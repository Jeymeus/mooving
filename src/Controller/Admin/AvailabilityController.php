<?php

namespace App\Controller\Admin;

use App\Entity\Vehicle;
use App\Repository\AvailabilityRepository;
use App\Entity\Availability;
use App\Form\AvailabilityType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


#[Route("admin/disponibilites", name: "admin_availability_")]
class AvailabilityController extends AbstractController
{
    /**
        * #[Route('/disponibilites/ajouter', name: 'availability_create')]
        *
        * @param Request $request The HTTP request object.
        * @param EntityManagerInterface $entityManager The Doctrine entity manager.
        * @return Response A HTTP response object.
    */
    #[Route('/ajouter', name: 'create')]
    public function create(Request $request, EntityManagerInterface $entityManager): Response
    {
        $availability = new Availability();
        $form = $this->createForm(AvailabilityType::class, $availability);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager->persist($availability);
            $entityManager->flush();

            $this->addFlash('success', 'Disponibilité ajoutée avec succès.');

            return $this->redirectToRoute('admin_vehicle_index');
        }

        return $this->render('admin/availability/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * #[Route('/{slug}', name: 'availability_show')]
     * 
     * Edits an existing availability record.
     * @param Request $request The HTTP request object.
     * @param EntityManagerInterface $entityManager The Doctrine entity manager.
     * @param string $slug The slug of the vehicle.
     * @param int $id The ID of the availability record.
     * @return Response A HTTP response object.
     * 
     */
    #[Route('/{slug}', name: 'show')]
    public function show(string $slug, AvailabilityRepository $availabilityRepository, EntityManagerInterface $entityManager): Response{
        // Récupérer le véhicule en utilisant le slug
        $vehicleRepository = $entityManager->getRepository(Vehicle::class);
        $vehicle = $vehicleRepository->findOneBy(['slug' => $slug]);

        if (!$vehicle) {
            throw $this->createNotFoundException('Véhicule non trouvé');
        }

        // Récupérer les disponibilités du véhicule spécifique
        $availabilities = $availabilityRepository->findByVehicle($vehicle);

        return $this->render('admin/availability/show.html.twig', [
            'vehicle' => $vehicle,
            'availabilities' => $availabilities,
        ]);
    }

    /**
     * #[Route('/{slug}/{id}/modifier', name: 'availability_edit', requirements: ['slug' => '[a-z0-9\-]+', 'id' => '\d+'])]
     *
     * Shows a confirmation page for deleting an availability record.
     * @param string $slug The slug of the vehicle.
     * @param int $id The ID of the availability record.
     * @param EntityManagerInterface $entityManager The Doctrine entity manager.
     * @return Response A HTTP response object.
     *
    */
    #[Route('/{slug}/{id}/modifier', name: 'edit', requirements: ['slug' => '[a-z0-9\-]+', 'id' => '\d+'])]
    public function edit(Request $request, EntityManagerInterface $entityManager, string $slug, int $id): Response
    {
        $vehicle = $entityManager->getRepository(Vehicle::class)->findOneBy(['slug' => $slug]);

        if (!$vehicle) {
            throw $this->createNotFoundException('Le véhicule demandé n\'a pas été trouvé.');
        }

        $availability = $entityManager->getRepository(Availability::class)->findOneBy(['vehicle' => $vehicle, 'id' => $id]);

        if (!$availability) {
            throw $this->createNotFoundException('La disponibilité demandée n\'a pas été trouvée.');
        }

        $form = $this->createForm(AvailabilityType::class, $availability);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Disponibilité modifiée avec succès.');

            return $this->redirectToRoute('admin_availability_show', ['slug' => $vehicle->getSlug()]);
        }

        return $this->render('admin/availability/edit.html.twig', [
            'form' => $form->createView(),
            'vehicle' => $vehicle,
        ]);
    }

    /**
     * #[Route('/{slug}/{id}/confirmer', name: 'availability_delete_confirm', methods: ['GET'])]
     *
     * Shows a confirmation page for deleting an availability record.
     * @param string $slug The slug of the vehicle.
     * @param int $id The ID of the availability record.
     * @param EntityManagerInterface $entityManager The Doctrine entity manager.
     * @return Response A HTTP response object.
     *
    */
    #[Route('/{slug}/{id}/confirmer', name: 'delete_confirm', methods: ['GET'])]
    public function deleteConfirm(string $slug, int $id, EntityManagerInterface $entityManager): Response
    {
        $vehicle = $entityManager->getRepository(Vehicle::class)->findOneBy(['slug' => $slug]);
        
        if (!$vehicle) {
            throw $this->createNotFoundException('Le véhicule demandé n\'a pas été trouvé.');
        }
        
        $availability = $entityManager->getRepository(Availability::class)->findOneBy(['vehicle' => $vehicle, 'id' => $id]);
        
        if (!$availability) {
            throw $this->createNotFoundException('La disponibilité demandée n\'a pas été trouvée.');
        }
        
        return $this->render('admin/availability/delete_confirm.html.twig', [
            'vehicle' => $vehicle,
            'availability' => $availability,
        ]);
    }
    
    /**
     * #[Route('/{slug}/{id}/supprimer', name: 'availability_delete', methods: ['DELETE'])]
     *
     * Deletes an existing availability record.
     *
     * @param Request $request The HTTP request object.
     * @param EntityManagerInterface $entityManager The Doctrine entity manager.
     * @param string $slug The slug of the vehicle.
     * @param int $id The ID of the availability record.
     * @return Response A HTTP response object.
     *
    */
    #[Route('/{slug}/{id}/supprimer', name: 'delete', methods: ['DELETE'])]
    public function delete(Request $request, EntityManagerInterface $entityManager, string $slug, int $id): Response
    {
        $vehicle = $entityManager->getRepository(Vehicle::class)->findOneBy(['slug' => $slug]);

        if (!$vehicle) {
            throw $this->createNotFoundException('Le véhicule demandé n\'a pas été trouvé.');
        }

        $availability = $entityManager->getRepository(Availability::class)->findOneBy(['vehicle' => $vehicle, 'id' => $id]);

        if (!$availability) {
            throw $this->createNotFoundException('La disponibilité demandée n\'a pas été trouvée.');
        }

        $entityManager->remove($availability);
        $entityManager->flush();

        $this->addFlash('success', 'Disponibilité supprimée avec succès.');

        return $this->redirectToRoute('admin_vehicle_index');
    }

}






