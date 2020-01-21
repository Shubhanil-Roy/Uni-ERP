<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DealerToProduct extends Model
{
    public function products_to_dealer(){
        return $this->hasOne('App\Model\Dealer','id','dealer_id');
    }
    public function dealer_to_products_to_products(){
        return $this->hasOne('App\Model\Product','id','product_id');
    }

}
