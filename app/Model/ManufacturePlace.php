<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ManufacturePlace extends Model
{
    public function place_to_products(){
        return $this->hasMany('App\Model\Product','manufacturing_place_id','id');
    }
}
