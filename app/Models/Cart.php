<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Laptop;

class Cart extends Model
{
    use HasFactory;

    /*
    * Get The Laptop Data
    */
    public function laptop(){
        return $this->hasOne(Laptop::class);
    }
}
