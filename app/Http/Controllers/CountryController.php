<?php

namespace App\Http\Controllers;

use App\Contary;
use App\Transformers\CountryTransformer;

class CountryController extends Controller
{
    public function index()
    {

        $country = Contary::all();
        //dd($country);
        return $this->response->collection($country, new CountryTransformer);
    }
}
