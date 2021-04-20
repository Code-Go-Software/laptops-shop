<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Content;


class Laptop extends Model
{
    use HasFactory;

    public function beforeDiscountPrice(){
        $currency = Content::where('key', 'currency');
        $cureency_value = doubleval($currency->value);

        return $this->before_discount_price * $cureency_value;
    }

    public function afterDiscountPrice(){
        $currency = Content::where('key', 'currency');
        $cureency_value = doubleval($currency->value);

        return $this->after_discount_price * $cureency_value;
    }
}
