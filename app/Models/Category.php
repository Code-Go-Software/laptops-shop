<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Laptop;

class Category extends Model
{
    use HasFactory;

    /*
    * Get The Category Laptops
    */
    public function laptops(){
        return $this->hasMany(Laptop::class);
    }
}
