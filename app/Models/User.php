<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Favourite;
use App\Models\Cart;
use App\Models\Order;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fullname',
        'email',
        'password',
        'phone',
        'address',
        'role',
        'image'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /*
    * User Favourites Laptops 
    */
    public function favourites(){
        return $this->hasMany(Favourite::class);
    }

    /*
    * User Cart Items
    */
    public function carts(){
        return $this->hasMany(Cart::class);
    }

    /*
    * User Orders
    */
    public function orders(){
        return $this->hasMany(Order::class);
    }
}
