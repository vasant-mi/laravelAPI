<?php

namespace App\Http\Controllers;

use App\State;
use App\Transformers\StateTransformer;
use Illuminate\Http\Request;

class StateController extends Controller
{
    public function index()
    {
        $requestData = app('request')->id;
        $state = State::whereCountryId($requestData)->get();
        return $this->response->collection($state, new StateTransformer);
    }
}
