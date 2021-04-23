<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Content;
use App\Models\Category;
use App\Models\SubImage;


class Laptop extends Model
{
    use HasFactory;

    public function beforeDiscountPrice(){
        $currency = Content::where('key', 'currency')->get();
        $cureency_value = doubleval($currency->first()->value);

        return $this->before_discount_price * $cureency_value;
    }

    public function afterDiscountPrice(){
        $currency = Content::where('key', 'currency')->get();
        $cureency_value = doubleval($currency->first()->value);

        return $this->after_discount_price * $cureency_value;
    }

    /*
    * Laptop Category
    */
    public function category(){
        return $this->belongsTo(Category::class);
    }

    /*
    * Get The Laptops Order
    */
    public function orders(){
        return $this->belongsToMany(Order::class)->with(['price']);
    }

    /*
    * Get The Laptop Sub Images
    */
    public function subImages(){
        return $this->hasMany(SubImage::class);
    }
}
