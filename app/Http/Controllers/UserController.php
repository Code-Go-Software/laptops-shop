<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{

    public function index()
    {
        return view('user.profile');
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

    public function indexForAdmin(){
        return view('admin.users.index', [
            'users' => User::paginate(25)
        ]);
    }

    public function showForAdmin(User $user){
        return view('admin.users.show', [
            'user' => $user
        ]);
    }
}
