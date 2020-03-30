<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Customer;

class Product extends Model
{
    // protected $table = "products";

    public function customer()
    {
        return $this->belongsToMany(Customer::class);
    }
    
    // public function Buy()
    // {
    //     return $this->belongsTo(Buy::class);
    // }

}



