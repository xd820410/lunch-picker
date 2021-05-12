<?php

namespace App\Services;

use App\Repositories\RestaurantRepository;
use Exception;

class RestaurantService
{
    protected $restaurantRepository;

    public function __construct(RestaurantRepository $restaurantRepository)
    {
        $this->restaurantRepository = $restaurantRepository;
    }

    public function createRestaurant($data)
    {
        $restaurant = $this->restaurantRepository->createRestaurant($data);

        if (empty($restaurant)) {
            throw new Exception('Fail to create restaurant.');
        }

        return $restaurant;
    }

    public function getRestaurants()
    {
        return $this->restaurantRepository->getRestaurants();
    }
}
