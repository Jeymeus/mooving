<?php

namespace App\Controller;

use App\Form\SearchAvailabilityType;
use App\Repository\AvailabilityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends AbstractController
{
    #[Route('/search/availability', name: 'search_availability')]
    public function searchAvailability(Request $request, AvailabilityRepository $availabilityRepository): Response
    {
        
        $availabilities = [];
        $searchAvailabilityForm = $this->createForm(SearchAvailabilityType::class);

        if ($searchAvailabilityForm->handleRequest($request)->isSubmitted() && $searchAvailabilityForm->isValid()) {
            
            $duration = $searchAvailabilityForm->getData();
            $price_per_day = $this->calculatePricePerDay($duration);
            $availabilities = $availabilityRepository->findByAvailability($duration, $price_per_day);

        } elseif ($request->isMethod('POST') && $request->request->get('extend_search')) {

            $start_date = \DateTime::createFromFormat('Y-m-d', $request->request->get('start_date'));
            $end_date = \DateTime::createFromFormat('Y-m-d', $request->request->get('end_date'));
            $maxPrice = $request->request->get('maxPrice');
            
            $durations = $this->generateDateRanges($start_date, $end_date, $maxPrice);

            foreach ($durations as $duration) {
                $price_per_day = $this->calculatePricePerDay($duration);
                $availabilitiesForDuration = $availabilityRepository->findByAvailability($duration, $price_per_day);

                $availabilities = $availabilitiesForDuration;
                
            }
        }

        return $this->render('search/availability.html.twig', [
            'search_form' => $searchAvailabilityForm->createView(),
            'availabilities' => $availabilities,
        ]);
    }

   /**
    * Calculate the price per day.
    * @param array $duration The duration.
    * @return float The price per day.
    */
    public function calculatePricePerDay(array $duration): float
    {
        $start_date = $duration['start_date'];
        $end_date = $duration['end_date'];
        $maxPrice = $duration['maxPrice'];

        $interval = $start_date->diff($end_date);
        $nbDays = ($interval->days) + 1;

        return $maxPrice / $nbDays;
    }
    
    /**
     * Generate date ranges.
     * 
     * @param \DateTime $start_date The start date.
     * @param \DateTime $end_date The end date.
     * @param float $maxPrice The maximum price.
     * @return array The date ranges.
     * 
     */
    public function generateDateRanges(\DateTime $start_date, \DateTime $end_date, float $maxPrice): array
    {
        $durations = [];

        $modifications = [
            [-1, -1],
            [0, -1],
            [1, -1],
            [1, 0],
            [1, 1],
        ];

        foreach ($modifications as [$startModification, $endModification]) {
            $start_date_clone = clone $start_date;
            $end_date_clone = clone $end_date;

            $start_date_clone->modify(sprintf('%d day', $startModification));
            $end_date_clone->modify(sprintf('%d day', $endModification));

            $durations[] = [
                'start_date' => $start_date_clone,
                'end_date' => $end_date_clone,
                'maxPrice' => $maxPrice,
            ];
        }

        return $durations;
    }
}



