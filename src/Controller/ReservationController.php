<?php

namespace App\Controller;

use App\Form\ReservationType;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;

class ReservationController extends AbstractController
{
    #[Route('/reservation/nouveau', name: 'reservation_nouveau')]
    public function nouveau(Request $request, MailerInterface $mailer): Response
    {
        $reservation = new Reservation();
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $email = (new TemplatedEmail())
                    ->to('contact@example.fr') // Remplacez par l'adresse e-mail de réception   
                    ->from($reservation->getEmail())
                    ->subject('Nouvelle réservation')
                    ->htmlTemplate('emails/reservation.html.twig') // Créez le template Twig correspondant
                    ->context(['reservation' => $reservation]);

                $mailer->send($email);
                $this->addFlash('success', 'Votre réservation a bien été envoyée');
                return $this->redirectToRoute('reservation_nouveau');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Une erreur est survenue lors de l\'envoi de la réservation');
                return $this->redirectToRoute('reservation_nouveau');
            }
        }

        return $this->render('reservation/nouveau.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
