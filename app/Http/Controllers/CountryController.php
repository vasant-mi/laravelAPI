<?php

namespace App\Http\Controllers;

use App\Country;
use App\Transformers\CountryTransformer;

class CountryController extends Controller
{
    public function index()
    {
        $country = Country::all();
        return $this->response->collection($country, new CountryTransformer);
    }
}
