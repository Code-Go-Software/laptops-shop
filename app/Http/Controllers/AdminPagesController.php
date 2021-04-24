<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laptop;
use App\Models\User;
use App\Models\Order;
use App\Models\Category;
use App\Models\Favourite;
use App\Models\Content;

class AdminPagesController extends Controller
{



    /*
    ** View the admin dashboard page with the requierd data
    */
    public function dashboard()
    {
        $all_orders = Order::all()->count();
        $uncompleted_orders = Order::where('status', false)->get();
        $completed_orders_count = $all_orders - $uncompleted_orders->count();
        $uncompleted_orders_count = $uncompleted_orders->count();
        $orders_value = Order::all()->sum('total_price');

        return view('admin.index', [
            'all_laptops' => Laptop::all()->count(),
            'all_users' => User::all()->count() - 1, // Execlude The Admin Account
            'all_views' => Laptop::all()->sum('views'),
            'all_orders' => $all_orders,
            'uncompleted_orders' => $uncompleted_orders,
            'completed_orders_count' => $completed_orders_count,
            'uncompleted_orders_count' => $uncompleted_orders_count,
            'orders_value' => $orders_value,
            'categories' => Category::all(),
            'favourites' => Favourite::all()
        ]);
    }




    /*
    ** View the admin manage currency page with the current currency value
    */
    public function currency()
    {
        $currency = Content::where('key', 'currency')->get();

        return view('admin.currency', [
            'currency' => doubleval($currency->first()->value)
        ]);
    }




    /*
    ** View the admin help page
    */
    public function help()
    {
        return view('admin.help-center');
    }
}
