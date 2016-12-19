<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = "country";

    public function states() {
        return $this->hasMany('App\State');
    }
}
