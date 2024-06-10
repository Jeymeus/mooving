<?php

namespace App\Controller\Admin;

use App\Entity\Vehicle;
use App\Form\VehicleType;
use Doctrine\Persistence\ManagerRegistry;
use PharIo\Manifest\Requirement;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Requirement\Requirement as RequirementRequirement;

#[Route("/admin/vehicules", name: "admin_vehicle_")]
class VehicleController extends AbstractController


{
    #[Route("/", name: "index")]
    /**
     * 
     * @param ManagerRegistry $doctrine The Doctrine registry.
     * @return Response A HTTP response object.
     * 
     */
    public function index(ManagerRegistry $doctrine): Response
    {
        $vehicles = $doctrine->getRepository(Vehicle::class)->findAll();
        
        return $this->render('admin/vehicle/index.html.twig', [
            'vehicles' => $vehicles,
        ]);
    }
    
    #[Route("/ajouter", name: "create")]
    /**
     * 
     * @param Request $request The HTTP request object.
     * @param ManagerRegistry $doctrine The Doctrine registry.
     * @return Response A HTTP response object.
     * 
     */
    public function create(Request $request, ManagerRegistry $doctrine): Response
    {
        // $this->denyAccessUnlessGranted('ROLE_USER');
        $vehicle = new Vehicle();

        $form = $this->createForm(VehicleType::class, $vehicle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager = $doctrine->getManager();
            $existingVehicle = $entityManager->getRepository(Vehicle::class)->findOneBy([
            'brand' => $vehicle->getBrand(),
            'model' => $vehicle->getModel(),
            ]);
            if ($existingVehicle !== null) {
                $this->addFlash('danger', 'Ce véhicule existe déjà.');
            } else {        
                $entityManager->persist($vehicle);
                $entityManager->flush();
                $this->addFlash('success', 'Le véhicule a bien été ajouté.');

                return $this->redirectToRoute('admin_vehicle_index');
            }
        }

        return $this->render('admin/vehicle/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route("/{id}/modifier", name: "edit", requirements: ['id' => '\d+'])]
    /**
     * 
     * @param Vehicle $vehicle The vehicle entity.
     * @param Request $request The HTTP request object.
     * @param ManagerRegistry $doctrine The Doctrine registry.
     * @return Response A HTTP response object.
     * 
     */
    public function edit(Vehicle $vehicle, Request $request, ManagerRegistry $doctrine): Response
    {
        // $this->denyAccessUnlessGranted('ROLE_USER');
        $form = $this->createForm(VehicleType::class, $vehicle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $doctrine->getManager();
            $entityManager->flush();
            $this->addFlash('success', 'Le véhicule a bien été modifié.');

            return $this->redirectToRoute('admin_vehicle_index');
        }

        return $this->render('admin/vehicle/edit.html.twig', [
            'form' => $form->createView(),
        ]);

    }

    #[Route("/{id}/supprimer", name: "delete", requirements: ['id' => '\d+'])]
    /**
     * 
     * @param Vehicle $vehicle The vehicle entity.
     * @param ManagerRegistry $doctrine The Doctrine registry.
     * @return Response A HTTP response object.
     * 
     */
    public function delete(Vehicle $vehicle, ManagerRegistry $doctrine): Response
    {
        // $this->denyAccessUnlessGranted('ROLE_USER');
        $entityManager = $doctrine->getManager();
        $entityManager->remove($vehicle);
        $entityManager->flush();
        $this->addFlash('success', 'Le véhicule a bien été supprimé.');

        return $this->redirectToRoute('admin_vehicle_index');
    }

    
}
