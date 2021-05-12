<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRestaurants;
use App\Services\RestaurantService;
use Illuminate\Http\Request;
use Exception;

class RestaurantController
{
    /**
     * 用method injection注入service
     */
    public function __construct()
    {
    }

    public function createAwards(CreateRestaurants $request, RestaurantService $restaurantService)
    {
        try {
            $award = $restaurantService->createRestaurant($request->input());
            $returnMessage = [
                'title' => 'SUCCESS',
                'content' => $award,
            ];

            return response()->json($returnMessage, 200);
        } catch (Exception $e) {
            $errorMessage = [
                'title' => 'ERROR',
                'content' => $e->getMessage(),
            ];

            return response()->json($errorMessage, 404);
        }
    }
}
