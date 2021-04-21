<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Laptop;
use App\Models\User;

class Order extends Model
{
    use HasFactory;

    /*
    * Get Order Laptops
    */
    public function laptops(){
        return $this->belongsToMany(Laptop::class);
    }

    /*
    * Get User Who Own The Order
    */
    public function user(){
        return $this->belongsTo(User::class);
    }
}
