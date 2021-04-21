<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index()
    {
        return view('user.profile');
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
        return view('user.profile');
    }

    public function showUser()
    {
        return view('user.profile',[
            'user' => Auth::user()
        ]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'fullname' => 'required|min:6',
            'phone' => 'required|numeric',
            'address' => 'required'
        ]);

        $user = Auth::user();
        $user->fullname = $request->fullname;
        $user->phone = $request->phone;
        $user->address = $request->address;

        $user->save();
        return redirect('/profile');
    }

    public function destroy()
    {
        Auth::user()->delete();
        Auth::logout();
        return redirect('/');
    }
}
