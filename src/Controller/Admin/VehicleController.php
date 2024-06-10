<?php

namespace App\Controller\Admin;

use App\Entity\Vehicle;
use App\Entity\Image;
use App\Form\VehicleType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

#[Route("/admin/vehicules", name: "admin_vehicle_")]
class VehicleController extends AbstractController
{
    #[Route("/", name: "index")]
    public function index(ManagerRegistry $doctrine): Response
    {
        $vehicles = $doctrine->getRepository(Vehicle::class)->findAll();

        return $this->render('admin/vehicle/index.html.twig', [
            'vehicles' => $vehicles,
        ]);
    }

     #[Route("/ajouter", name: "create")]
    public function create(Request $request, ManagerRegistry $doctrine, SluggerInterface $slugger, string $images_directory = null)
    {
        $vehicle = new Vehicle();
        $images = new Image();

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
                // Handle image uploads
                /** @var UploadedFile $images */
                $images = $form->get('images')->getData();
                $images_directory = $this->getParameter('kernel.project_dir').'/public/uploads/';
                foreach ($images as $imageFile) {
                    $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                    $safeFilename = $slugger->slug($originalFilename);
                    $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                    // Move the file to the directory where images are stored
                    try {
                        $imageFile->move(
                            $images_directory,
                            $newFilename
                        );
                    } catch (FileException $e) {
                        // Handle exception if something happens during file upload
                    }

                    // Create new Image entity and set its properties
                    $image = new Image();
                    $image->setFileName($newFilename);
                    $image->setVehicle($vehicle);

                    // Persist the Image entity
                    $entityManager->persist($image);
                }

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

    // #[Route("/{id}/modifier", name: "edit", requirements: ['id' => '\d+'])]
    // public function edit(Vehicle $vehicle, Request $request, ManagerRegistry $doctrine, SluggerInterface $slugger, string $images_directory): Response
    // {
    //     $form = $this->createForm(VehicleType::class, $vehicle);
    //     $form->handleRequest($request);

    //     if ($form->isSubmitted() && $form->isValid()) {
    //         $entityManager = $doctrine->getManager();

    //         // Handle image uploads
    //         $images = $form->get('images')->getData();
    //         foreach ($images as $imageFile) {
    //             $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
    //             $safeFilename = $slugger->slug($originalFilename);
    //             $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

    //             // Move the file to the directory where images are stored
    //             try {
    //                 $imageFile->move(
    //                     $images_directory,
    //                     $newFilename
    //                 );
    //             } catch (FileException $e) {
    //                 // Handle exception if something happens during file upload
    //             }

    //             // Create new Image entity and set its properties
    //             $image = new Image();
    //             $image->setFileName($newFilename);
    //             $image->setVehicle($vehicle);

    //             // Persist the Image entity
    //             $entityManager->persist($image);
    //         }

    //         $entityManager->flush();

    //         $this->addFlash('success', 'Le véhicule a bien été modifié.');
    //         return $this->redirectToRoute('admin_vehicle_index');
    //     }

    //     return $this->render('admin/vehicle/edit.html.twig', [
    //         'form' => $form->createView(),
    //     ]);
    // }

    // #[Route("/{id}/supprimer", name: "delete", requirements: ['id' => '\d+'])]
    // public function delete(Vehicle $vehicle, ManagerRegistry $doctrine): Response
    // {
    //     $entityManager = $doctrine->getManager();
    //     $entityManager->remove($vehicle);
    //     $entityManager->flush();
    //     $this->addFlash('success', 'Le véhicule a bien été supprimé.');

    //     return $this->redirectToRoute('admin_vehicle_index');
    // }
}
