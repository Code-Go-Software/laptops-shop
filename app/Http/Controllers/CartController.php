<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{



    /*
    ** View the user cart page
    */
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




    /*
    ** Validate the new cart item data and store it
    */
    public function store(Request $request)
    {
        if(Auth::user()->isAdmin())
        {
            return back()->with('fail', 'عذرا لا يمكنك القيام بهذا الإجراء من حاسب مدير الموقع');
        }

        $validated = $request->validate([
            'laptop_id' => 'required|numeric',
        ]);

        $cart = new Cart();
        $cart->user_id = Auth::user()->id;
        $cart->laptop_id = $request->laptop_id;

        $cart->save();

        return back()->with('success', 'تمت إضافة الحاسوب إلى سلة المشتريات بنجاح'); 
    }




    /*
    ** Check if the cart item belongs to the current user and delete it 
    */
    public function destroy(Cart $cart)
    {
        // Check if The Cart Item Belongs To The Authenticated User
        if($cart->user_id != Auth::user()->id)
            return redirect('/cart')->with('fail', 'حدث خطأ أثناء محاولة إزالة الحاسوب من سلة المشتريات');

        $cart->delete();
        return redirect('/cart')->with('success', 'تمت إزالة الحاسوب من سلة المشتريات بنجاح');
    }
}
