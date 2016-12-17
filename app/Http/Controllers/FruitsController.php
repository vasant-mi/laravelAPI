<?php


namespace App\Http\Controllers;

use App\Fruit;
use Dingo\Api\Routing\Helpers;
use App\Transformers\FruitsTransformer;
use Illuminate\Http\Request;

class FruitsController extends Controller
{
    public function index()
    {
        $fruits = Fruit::all();
        //dd($fruits);
        //return $this->response->array(['data' => $fruits], 200);
        return $this->response->collection($fruits, new FruitsTransformer);
    }
}
