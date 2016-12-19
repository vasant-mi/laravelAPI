<?php
namespace App\Transformers;
use App\Country;
use League\Fractal\TransformerAbstract;
class CountryTransformer extends TransformerAbstract
{
    public function transform(Country $country)
    {
        return [
            'id'        => (int) $country->id,
            'name'      => ucfirst($country->name)
        ];
    }
}