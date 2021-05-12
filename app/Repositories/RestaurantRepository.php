<?php

namespace App\Repositories;

use App\Models\Restaurant;

class RestaurantRepository
{
    protected $model;

    public function __construct(Restaurant $model)
    {
        $this->model = $model;
    }

    public function createRestaurant($data)
    {
        return $this->model->create($data);
    }

    public function getRestaurants()
    {
        return $this->model->get();
    }
}
