<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Security\AppAuthenticator;
use App\Security\EmailVerifier;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mime\Address;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;
use Symfony\Component\Security\Core\Exception\InvalidCsrfTokenException;

/**
 * RegistrationController
 */
class RegistrationController extends AbstractController
{
    /**
     * RegistrationController constructor
     * 
     * @param EmailVerifier $emailVerifier
     */
    public function __construct(private EmailVerifier $emailVerifier)
    {
    }

    /**
     * Handle user registration
     * 
     * @param Request $request
     * @param UserPasswordHasherInterface $userPasswordHasher
     * @param Security $security
     * @param EntityManagerInterface $entityManager
     * @return Response
     */
    #[Route('/inscription', name: 'app_register', methods: ['GET', 'POST'])]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
    {
        // Create a new User entity
        $user = new User();

        // Create the registration form and handle the request
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        // Check if the form is submitted
        if ($form->isSubmitted()) {
            try {
                // Retrieve form data and CSRF token
                $formData = $request->request->all();
                $csrfToken = $formData['registration_form']['_token'];

                // Explicit CSRF token validation
                if (!$this->isCsrfTokenValid('registration_form', $csrfToken)) {
                    throw new InvalidCsrfTokenException();
                }

                // Check if the form is valid
                if ($form->isValid()) {
                    // Get plain and confirm passwords
                    $plainPassword = $form->get('plainPassword')->getData();
                    $confirmPassword = $form->get('confirmPassword')->getData();

                    // Check if passwords match
                    if ($plainPassword !== $confirmPassword) {
                        $this->addFlash('danger', 'Les mots de passe ne correspondent pas.');
                        return $this->redirectToRoute('app_register');
                    } else {
                        // Hash and set the user's password
                        $user->setPassword(
                            $userPasswordHasher->hashPassword(
                                $user,
                                $form->get('plainPassword')->getData()
                            )
                        );

                        // Persist the user entity and flush to the database
                        $entityManager->persist($user);
                        $entityManager->flush();

                        // Send email confirmation to the user
                        $this->emailVerifier->sendEmailConfirmation(
                            'app_verify_email',
                            $user,
                            (new TemplatedEmail())
                                ->from(new Address('support@mooving.fr', 'Support'))
                                ->to($user->getEmail())
                                ->subject('Merci de confirmer votre email')
                                ->htmlTemplate('registration/confirmation_email.html.twig')
                        );

                        $this->addFlash('success', 'Votre compte a bien été créé. Un email de confirmation vous a été envoyé.');
                        return $this->redirectToRoute('home');
                    }
                }
            } catch (InvalidCsrfTokenException $e) {
                // Handle invalid CSRF token exception
                $this->addFlash('danger', 'Le jeton CSRF est invalide. Veuillez soumettre le formulaire à nouveau.');
                return $this->redirectToRoute('app_register');
            }
        }

        // Render the registration form
        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }

    /**
     * Verify user email
     * 
     * @param Request $request
     * @param TranslatorInterface $translator
     * @return Response
     */
    #[Route('/verify/email', name: 'app_verify_email')]
    public function verifyUserEmail(Request $request, TranslatorInterface $translator, Security $security): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $user = $this->getUser();

        // validate email confirmation link, sets User::isVerified=true and persists
        try {
            $this->emailVerifier->handleEmailConfirmation($request, $this->getUser());
        } catch (VerifyEmailExceptionInterface $exception) {
            $this->addFlash('verify_email_error', $translator->trans($exception->getReason(), [], 'VerifyEmailBundle'));

            return $this->redirectToRoute('app_register');
        }

        // @TODO Change the redirect on success and handle or remove the flash message in your templates
        $this->addFlash('success', 'Votre email a bien été vérifié.');
        // Log the user in and redirect to the main page
        $security->login($user, AppAuthenticator::class, 'main');

        return $this->redirectToRoute('home');
    }
}
