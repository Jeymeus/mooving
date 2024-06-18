<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Reservation;
use App\Form\ReservationType;
use Doctrine\ORM\EntityManager;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;

class ReservationController extends AbstractController
{
    #[Route('/reservation', name: 'reservation')]
    public function nouveau(Request $request, MailerInterface $mailer): Response
    {
        $reservation = new Reservation();

        // Récupère l'utilisateur connecté
        $user = $this->getUser();
        dd($user);
        return $this->render('contact/reservation.html.twig');

    }
}   
