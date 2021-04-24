<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favourite;
use Illuminate\Support\Facades\Auth;

class FavouriteController extends Controller
{
    


    /*
    ** View the user favourites page
    */
    public function index()
    {
        $favourites;

        if(Auth::check()){
            $favourites = Auth::user()->favourites;
        }else{
            $favourites = [];
        }

        //Show A List Of User Favourites Laptops
        return view('user.favourites', [
            'favourites' => $favourites
        ]);
    }





    /*
    ** Validate the favourite item data and store it
    */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'laptop_id' => 'required|numeric',
        ]);

        $fav = new Favourite();
        $fav->user_id = Auth::user()->id;
        $fav->laptop_id = $request->laptop_id;

        $fav->save();

        return back()->with('success', 'تمت إضافة الحاسوب إلى القائمة المفضلة بنجاح');
    }





    /*
    ** Check if the favourite item belongs to the current user and delete it
    */
    public function destroy(Favourite $favourite)
    {
        // Check if The Favourite Item Belongs To The Authenticated User
        if($favourite->user_id != Auth::user()->id)
            return redirect('/favourites')->with('fail', 'حدث خطأ أثناء محاولة إزالة الحاسوب من سلة المشتريات');

        $favourite->delete();
        return redirect('/favourites')->with('success', 'تمت إزالة الحاسوب من القائمة المفضلة بنجاح');
    }
}
