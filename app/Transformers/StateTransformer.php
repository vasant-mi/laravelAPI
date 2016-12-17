<?php
namespace App\Transformers;
use App\State;
use League\Fractal\TransformerAbstract;
class StateTransformer extends TransformerAbstract
{
    public function transform(State $country)
    {
        return [
            'id'        => (int) $country->id,
            'name'      => ucfirst($country->name)
        ];
    }
}