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
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver as GdDriver;
use Symfony\Component\Security\Core\Exception\InvalidCsrfTokenException;

#[Route("/admin/vehicules", name: "admin_vehicle_")]
#[IsGranted("ROLE_ADMIN")]
class VehicleController extends AbstractController
{


    
    #[Route("/", name: "index")]
    public function index(ManagerRegistry $doctrine, Request $request): Response
    {
        $vehicles = $doctrine->getRepository(Vehicle::class)->findAll();

        return $this->render('admin/vehicle/index.html.twig', [
            'vehicles' => $vehicles,
        ]);
    }

    #[Route("/ajouter", name: "create", methods: ['GET', 'POST'])]
    public function create(Request $request, ManagerRegistry $doctrine, SluggerInterface $slugger, string $images_directory = null): Response
    {
        $vehicle = new Vehicle();

        $form = $this->createForm(VehicleType::class, $vehicle);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            try {
                
                $formData = $request->request->all();
                $csrfToken = $formData['vehicle']['_token'];
                // Vérification explicite du jeton CSRF
                if (!$this->isCsrfTokenValid('vehicle', $csrfToken)) {
                    throw new InvalidCsrfTokenException();
                }

                if ($form->isValid()) {
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
                        $images_directory = $this->getParameter('kernel.project_dir') . '/public/uploads/';

                        foreach ($images as $imageFile) {
                            $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                            $safeFilename = $slugger->slug($originalFilename);
                            $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

                            $driver = new GdDriver();

                            // Crée une instance de ImageManager avec le pilote choisi
                            $imageManager = new ImageManager($driver);

                            // Charge l'image
                            $image = $imageManager->read($imageFile->getPathname());

                            // Redimensionne l'image
                            $image->scale(500);

                            // Enregistre l'image redimensionnée
                            $image->save($images_directory . $newFilename);

                            // Create new Image entity and set its properties
                            $imageEntity = new Image();
                            $imageEntity->setFileName($newFilename);
                            $vehicle->addImage($imageEntity);

                            // Persist the Image entity
                            $entityManager->persist($imageEntity);
                        }

                        $entityManager->persist($vehicle);
                        $entityManager->flush();

                        $this->addFlash('success', 'Le véhicule a bien été ajouté.');
                        return $this->redirectToRoute('admin_vehicle_index');
                    }
                }
            } catch (InvalidCsrfTokenException) {
                $this->addFlash('danger', 'Le jeton CSRF est invalide. Veuillez soumettre le formulaire à nouveau.');
            }
        }

        return $this->render('admin/vehicle/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route("/{id}/modifier", name: "edit", requirements: ['id' => '\d+'])]
    public function edit(Vehicle $vehicle, Request $request, ManagerRegistry $doctrine, SluggerInterface $slugger, string $images_directory = null): Response
    {
        $form = $this->createForm(VehicleType::class, $vehicle);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager = $doctrine->getManager();

            // Handle image uploads
            /** @var UploadedFile $images */
            $images = $form->get('images')->getData();
            $images_directory = $this->getParameter('kernel.project_dir').'/public/uploads/';
            
            foreach ($images as $imageFile) {
            
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                $driver = new GdDriver();

                // Crée une instance de ImageManager avec le pilote choisi
                $imageManager = new ImageManager($driver);

                // Charge l'image
                $image = $imageManager->read($imageFile->getPathname());

                // Redimensionne l'image
                $image->scale(500);

                // Enregistre l'image redimensionnée
                $image->save($images_directory . $newFilename);

                
                // Create new Image entity and set its properties
                $image = new Image();
                $image->setFileName($newFilename);
                $vehicle->addImage($image);

                // Persist the Image entity
                $entityManager->persist($image);
            }

            $entityManager->persist($vehicle);
            $entityManager->flush();

            $this->addFlash('success', 'Le véhicule a bien été modifié.');
            return $this->redirectToRoute('admin_vehicle_index');
        }

        $images = $vehicle->getImages();

        return $this->render('admin/vehicle/edit.html.twig', [
            'form' => $form->createView(),
            'images' => $images,
            'vehicle' => $vehicle,
        ]);
    }

    #[Route("/image/{id}/supprimer", name: "delete_image", requirements: ['id' => '\d+'], methods: ['DELETE'])]
    public function deleteImage(Image $image, ManagerRegistry $doctrine, Request $request)
    {
        $data = json_decode($request->getContent(), true);
        
        if($this->isCsrfTokenValid('delete'.$image->getId(), $data['_token'])) {

            $fileName = $image->getFileName();
            unlink($this->getParameter('kernel.project_dir').'/public/uploads/'.$fileName);

            $entityManager = $doctrine->getManager();
            $entityManager->remove($image);
            $entityManager->flush();

            return new JsonResponse(['success' => 1]);
        } else {
            return new JsonResponse(['error' => 'Token CSRF invalide.'], 400);
        }
    }

    #[Route("/{id}/supprimer", name: "delete", requirements: ['id' => '\d+'])]
    public function delete(Vehicle $vehicle, ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();

        // Supprimer les fichiers images associés au véhicule
        $images_directory = $this->getParameter('kernel.project_dir') . '/public/uploads/';
        foreach ($vehicle->getImages() as $image) {
            $image_path = $images_directory . $image->getFileName();
            if (file_exists($image_path)) {
                unlink($image_path);
            }
            $entityManager->remove($image);
        }

        $entityManager->remove($vehicle);
        $entityManager->flush();
        $this->addFlash('success', 'Le véhicule a bien été supprimé.');

        return $this->redirectToRoute('admin_vehicle_index');
    }

}
