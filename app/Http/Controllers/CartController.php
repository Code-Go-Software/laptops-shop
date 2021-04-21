<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    public function index()
    {
        $cart_items;
        if(Auth::check()){
            $cart_items = Auth::user()->carts;
        }else{
            $cart_items = [];
        }

        return view('user.cart', [
            'cart_items' => $cart_items
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'laptop_id' => 'required|numeric',
        ]);

        $cart = new Cart();
        $cart->user_id = Auth::user()->id;
        $cart->laptop_id = $request->laptop_id;

        $cart->save();

        return back(); 
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(Cart $cart)
    {
        // Check if The Cart Item Belongs To The Authenticated User
        if($cart->user_id != Auth::user()->id)
            return redirect('/cart');

        $cart->delete();
        return redirect('/cart');
    }
}
