<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\VehicleRepository;

class HomeController extends AbstractController
{
    
    /**
     * #[Route('/', name: 'home')]
     * 
     * @return Response A HTTP response object.
     * 
    */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }


    #[Route('/vehicules', name: 'vehicles')]
    public function listOfVehicles(VehicleRepository $vehicleRepository): Response
    {
        // Récupérer tous les véhicules
        $vehicles = $vehicleRepository->findAll();

        // Passer les données des véhicules au template approprié
        return $this->render('home/vehicles.html.twig', [
            'vehicles' => $vehicles,
        ]);
    }
}
