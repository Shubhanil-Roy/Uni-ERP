<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use SMartins\PassportMultiauth\HasMultiAuthApiTokens;

class Dealer extends Authenticatable
{
    use Notifiable, HasMultiAuthApiTokens;
    public function dealer_to_products(){
        return $this->hasMany('App\Model\DealerToProduct','dealer_id', 'id');
    }
}
