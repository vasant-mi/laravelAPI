<?php

namespace App\Http\Controllers;


use App\ApiController;
use App\Fruit;
use Dingo\Api\Routing\Helpers;
use App\Transformers\FruitsTransformer;
use Illuminate\Http\Request;

class FruitsController extends ApiController
{
    public function index()
    {
        $this->validateRequest('invite_to_support_network');
        $fruits = Fruit::all();
        //dd($fruits);
        //return $this->response->array(['data' => $fruits], 200);
        return $this->response->collection($fruits, new FruitsTransformer);
    }
}
