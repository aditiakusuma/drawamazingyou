<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Customer extends Model
{
    // protected $table = "customers";
    
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

}
