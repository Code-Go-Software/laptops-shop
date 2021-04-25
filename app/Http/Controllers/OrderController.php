<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{

    public function index()
    {
        $orders;

        if(Auth::check()){
            $orders = Auth::user()->orders;
        }else{
            $orders = [];
        }

        return view('user.orders', [
            'orders' => $orders
        ]);
    }

    public function indexForAdmin(){
        return view('admin.orders.index', [
            'completed_orders' => Order::where('status', true)->get(),
            'uncompleted_orders' => Order::where('status', false)->get()
        ]);
    }

    public function store(Request $request)
    {
        if(Auth::user()->isAdmin())
        {
            return back()->with('fail', 'عذرا لا يمكنك القيام بهذا الإجراء من حساب مدير الموقع');
        }

        // Ensure That The User Added A Contact Phone Number
        $validated = $request->validate([
            'contact_number' => 'required|numeric',
        ]);

        $user_id = Auth::user()->id;

        // Get All Laptops In User Cart
        $cart_items = Cart::where('user_id', $user_id)->get();

        // Create The New Order
        $order = new Order();
        $order->user_id = $user_id;
        $order->total_price = $request->total_price;
        $order->contact_number = $request->contact_number;

        $order->save();

        // Attach The Laptops In The Cart To The Order
        foreach($cart_items as $item){
            $order->laptops()->attach($item->laptop->id, array('price' => $item->laptop->afterDiscountPrice()));
        }

        // Delete All Items From The User Cart
        Cart::where('user_id', $user_id)->delete();

        return back()->with('success', 'تمت إضافة طلبك بنجاح سنقوم بالتواصل معك بأسرع وقت ممكن');
    }

    public function show(Order $order)
    {
        return view('admin.orders.show', [
            'order' => $order
        ]);
    }

    public function update(Request $request, Order $order)
    {
        $order->status = ! $order->status;
        $order->save();

        return redirect('/admin/orders/'.$order->id)->with('success', 'تم تعديل حالة الطلب بنجاح');
    }

}
