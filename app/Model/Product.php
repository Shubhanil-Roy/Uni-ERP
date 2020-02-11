<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   /* protected $fillable = [
        'identity',
        'name',
        'length',
        'width',
        'height',
        'price',
        'manufacturing_date',
        'manufacturing_place_id',
        'sl_no'
    ];*/

    public function products_to_place()
    {
        return $this->hasOne('App\Model\ManufacturePlace', 'id', 'manufacturing_place_id');
    }
    public function product_to_invoice(){
        return $this->hasMany('App\Model\DealerToProduct','product_id','id');
    }
    public function getWarrantyVoidAttribute(){
        if($this->product_to_invoice->count() > 0){
            $date = $this->product_to_invoice->invoice_date;
            $mod_date = strtotime($date."+ ".$this->warranty_time." years");
            return $mod_date;
        }
        else{
            return 'no invoice';
        }
    }
}
