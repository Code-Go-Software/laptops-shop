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
        //
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

    public function destroy($id)
    {
        //
    }
}
