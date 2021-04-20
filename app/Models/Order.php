<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Laptop;

class Order extends Model
{
    use HasFactory;

    /*
    * Get Order Laptops
    */
    public function laptops(){
        return $this->belongsToMany(Laptop::class)->with(['price']);
    }
}
