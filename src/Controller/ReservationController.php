<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Entity\Vehicle;
use App\Form\ReservationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class ReservationController extends AbstractController
{
    #[Route('/reservation/{vehicleId}', name: 'reservation')]
    #[IsGranted('ROLE_VERIFIED')]
    public function new(Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer, int $vehicleId): Response
    {
        $vehicle = $entityManager->getRepository(Vehicle::class)->find($vehicleId);
        if (!$vehicle) {
            throw $this->createNotFoundException('Véhicule non trouvé');
        }

        $reservation = new Reservation();
        $reservation->setVehicle($vehicle);
        $reservation->setUser($this->getUser());

        $form = $this->createForm(ReservationType::class, $reservation, [
            'user' => $this->getUser(),
            'vehicle' => $vehicle,
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $entityManager->persist($reservation);
                $entityManager->flush();
                // dd($reservation);

                $mail = (new TemplatedEmail())
                    ->to('reservation@mooving.fr')
                    ->from($reservation->getUser()->getEmail())
                    ->subject('Nouvelle réservation')
                    ->htmlTemplate('emails/reservation.html.twig')
                    ->context(['reservation' => $reservation]);

                $mailer->send($mail);

                $this->addFlash('success', 'Votre réservation a bien été envoyée');
                return $this->redirectToRoute('home');

            } catch (\Exception $e) {
                $this->addFlash('error', 'Une erreur est survenue lors de l\'envoi de la réservation : ' . $e->getMessage());
            }
        }

        return $this->render('contact/reservation.html.twig', [
            'form' => $form->createView(),
            'vehicle' => $vehicle,
        ]);
    }

}