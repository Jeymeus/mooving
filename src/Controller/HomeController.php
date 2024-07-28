<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\VehicleRepository;
use App\Entity\Vehicle;
use Doctrine\ORM\EntityManagerInterface;


class HomeController extends AbstractController
{
    
    
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }


    #[Route('/vehicules', name: 'vehicles')]
    public function listOfVehicles(VehicleRepository $vehicleRepository): Response
    {
        // get all vehicles
        $vehicles = $vehicleRepository->findAll();

        return $this->render('home/vehicles.html.twig', [
            'vehicles' => $vehicles,
        ]);
    }

    #[Route('/vehicules/{id}', name: 'details_vehicle')]
    public function details(VehicleRepository $vehicleRepository, $id): Response
    {
        // get vehicle by id
        $vehicle = $vehicleRepository->findOneById($id);

        // check if vehicle exists
        if (!$vehicle) {
            throw $this->createNotFoundException('Le véhicule demandé n\'existe pas.');
        }

        return $this->render('home/details.html.twig', [
                'vehicle' => $vehicle,
            ]);
    }

    #[Route('/recherche/vehicules', name: 'search_vehicle')]
    public function search(Request $request, EntityManagerInterface $entityManager): Response
    {
        // get search query
        $query = $request->query->get('query');

        // get vehicles by search query
        $vehicles = $entityManager->getRepository(Vehicle::class)->findBySearchQuery($query);

        return $this->render('home/search.html.twig', [
            'vehicles' => $vehicles,
            'query' => $query,
        ]);
    }
}
