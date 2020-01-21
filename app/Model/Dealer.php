<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Dealer extends Model
{
    public function dealer_to_products(){
        return $this->hasMany('App\Model\DealerToProduct','dealer_id', 'id');
    }
}
