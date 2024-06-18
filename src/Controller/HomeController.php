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

    #[Route('/vehicules/{id}', name: 'details_vehicle')]
    public function details(VehicleRepository $vehicleRepository, $id): Response
    {
        // Récupérer les informations du véhicule depuis le repository
        $vehicle = $vehicleRepository->findOneById($id);

        // Vérifier si le véhicule existe
        if (!$vehicle) {
            throw $this->createNotFoundException('Le véhicule demandé n\'existe pas.');
        }

        // Rendre la vue en passant les informations du véhicule
        return $this->render('home/details.html.twig', [
                'vehicle' => $vehicle,
            ]);
    }

    #[Route('/recherche/vehicules', name: 'search_vehicle')]
    public function search(Request $request, EntityManagerInterface $entityManager): Response
    {
        $query = $request->query->get('query');

        // Utilisez $query pour effectuer la recherche de véhicules par marque ou modèle

        // Par exemple, si vous utilisez Doctrine ORM
        $vehicles = $entityManager->getRepository(Vehicle::class)->findBySearchQuery($query);

        return $this->render('home/search.html.twig', [
            'vehicles' => $vehicles,
            'query' => $query,
        ]);
    }
}
