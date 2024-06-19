<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Form\ReservationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;

class ReservationController extends AbstractController
{
    #[Route('/reservation', name: 'reservation')]
    public function new(Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {
        $reservation = new Reservation();
        $form = $this->createForm(ReservationType::class, $reservation);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                // Persist the reservation entity
                $entityManager->persist($reservation);
                $entityManager->flush();

                // Send the email
                $mail = (new TemplatedEmail())
                    ->to('reservations@mooving.fr')
                    ->from($reservation->getUser()->getEmail())
                    ->subject('Nouvelle réservation')
                    ->htmlTemplate('emails/reservation.html.twig')
                    ->context(['reservation' => $reservation]);
                $mailer->send($mail);

                $this->addFlash('success', 'Votre réservation a été enregistrée et un email a été envoyé.');
                return $this->redirectToRoute('home');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Une erreur est survenue lors de l\'enregistrement ou de l\'envoi du message.');
                return $this->redirectToRoute('home');
            }
        }

        return $this->render('contact/reservation.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}