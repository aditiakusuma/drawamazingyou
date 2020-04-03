<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Customer;

class Product extends Model
{
    // protected $table = "products";
    protected $fillable = [
        'nama',
        'harga',
        'cetak',
        'premium',
        'head'
    ];

    public function customer()
    {
        return $this->belongsToMany(Customer::class);
    }
    
    // public function Buy()
    // {
    //     return $this->belongsTo(Buy::class);
    // }

}



