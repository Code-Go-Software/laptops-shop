<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

class ContentController extends Controller
{

    public function index()
    {
        return view('admin.content.index');
    }

    public function update(Request $request, Content $content)
    {
        if($request->is_image){
            $validated = $request->validate([
                'value' => 'required|mimes:jpg,png,jpeg'
            ]);
            
            $image = public_path('/assets/images/'.$content->value);
            if (file_exists($image)) unlink($image);
    
            $image_name = time() . '-' . $content->id . '.' . $request->file('value')->extension();
    
            if($request->file('value')->move(public_path('assets/images'), $image_name)){
                $content->value = $image_name;
            }else{
                abort(500);
            }

        }else{
            $validated = $request->validate([
                'value' => 'required'
            ]);
            $content->value = $request->value;
        }

        $content->save();
        return back();
    }

}
