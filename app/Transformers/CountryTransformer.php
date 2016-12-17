<?php
namespace App\Transformers;
use App\Contary;
use League\Fractal\TransformerAbstract;
class CountryTransformer extends TransformerAbstract
{
    public function transform(Contary $country)
    {
        return [
            'id'        => (int) $country->id,
            'name'      => ucfirst($country->name)
        ];
    }
}