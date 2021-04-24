<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

class ContentController extends Controller
{



    /*
    ** View the admin page to manage the website content values
    */
    public function index()
    {
        return view('admin.content.index');
    }




    /*
    ** Validate the new content values and update it
    */
    public function update(Request $request, Content $content)
    {
        if($request->is_image){
            $validated = $request->validate([
                'value' => 'required|mimes:jpg,png,jpeg'
            ]);
            
            $this->delete($content->value);
    
            $image_name = $this->create_name($content->id, $request->file('value')->extension());
    
            if(!$request->file('value')->move(public_path('images/'), $image_name)) return back()->with('fail', 'فشل في تحميل الصورة حاول مجددا');

            $content->value = $image_name;

        }else{
            $validated = $request->validate([
                'value' => 'required'
            ]);
            $content->value = $request->value;
        }

        $content->save();
        return back()->with('success', 'تم تعديل البيانات بنجاح');
    }

}
