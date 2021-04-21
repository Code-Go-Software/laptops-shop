<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favourite;
use Illuminate\Support\Facades\Auth;

class FavouriteController extends Controller
{
    
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

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'laptop_id' => 'required|numeric',
        ]);

        $fav = new Favourite();
        $fav->user_id = Auth::user()->id;
        $fav->laptop_id = $request->laptop_id;

        $fav->save();

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

    public function destroy(Favourite $favourite)
    {
        // Check if The Favourite Item Belongs To The Authenticated User
        if($favourite->user_id != Auth::user()->id)
            return redirect('/favourites');

        $favourite->delete();
        return redirect('/favourites');
    }
}
