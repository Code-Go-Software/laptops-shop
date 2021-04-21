<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Laptop;

class Favourite extends Model
{
    use HasFactory;

    /*
    * Favourite Item Laptop
    */
    public function laptop(){
        return $this->belongsTo(Laptop::class);
    }
}
