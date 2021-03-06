<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{

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
        return redirect('/profile')->with('success', 'تم تعديل البيانات بنجاح');
    }

    public function destroy()
    {
        if(!Auth::user()->isAdmin()){
            return back()->with('fail', 'عذرا لا يمكن حذف هذا الحساب');
        }else{
            Auth::user()->delete();
            Auth::logout();
            return redirect('/')->with('success', 'تم حذف حسابك بنجاح');
        }
    }

    public function indexForAdmin(){
        return view('admin.users.index', [
            'users' => User::where('is_admin', false)->paginate(25)
        ]);
    }

    public function showForAdmin(User $user){
        return view('admin.users.show', [
            'user' => $user
        ]);
    }

    public function updateImage(Request $request){
        $validated = $request->validate([
            'image' => 'required|mimes:jpg,png,jpeg|max:1024'
        ]);

        $user = Auth::user();
        if($user->image != "default-user.png"){
            $image = public_path('images/'.$user->image);
            if (file_exists($image)) unlink($image);
        }

        $image_name = time() . '-' . $user->id . '.' . $request->image->extension();

        if($request->image->move(public_path('images'), $image_name)){
            $user->image = $image_name;
            $user->save();
            return back()->with('success', 'تم تعديل الصورة الشخصية بنجاح');
        }else{
            abort(500);
        }
    }
}
