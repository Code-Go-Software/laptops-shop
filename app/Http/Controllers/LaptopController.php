<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laptop;
use App\Models\Category;
use App\Models\SubImage;

class LaptopController extends Controller
{

    public function home()
    {
        $categories = Category::all();
        return view('user.index', [
            'categories' => $categories
        ]);
    }

    public function index()
    {
        return view('user.laptops', [
            'laptops' => Laptop::where('is_available', true)->paginate(12)
        ]);
    }

    public function indexForAdmin(){
        return view('admin.laptops.index', [
            'laptops' => Laptop::where('is_available', true)->paginate(12),
            'un_available_laptops' => Laptop::where('is_available', false)->get(),
            'categories' => Category::all()
        ]);
    }

    public function create()
    {
        return view('admin.laptops.create', [
            'categories' => Category::all()
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'before_discount_price' => 'required',
            'after_discount_price' => 'required',
            'company' => 'required',
            'cpu' => 'required',
            'ram' => 'required',
            'hard' => 'required',
            'screen_card' => 'required',
            'screen_card_type' => 'required',
            'screen_size' => 'required',
            'cd_driver' => 'required',
            'battery' => 'required',
            'ports' => 'required',
            'is_available' => 'required',
            'type' => 'required',
            'category_id' => 'required',
            'ports' => 'required',
        ]);

        $laptop = new Laptop();
        $laptop->name = $request->name;
        $laptop->before_discount_price = $request->before_discount_price;
        $laptop->after_discount_price = $request->after_discount_price;
        $laptop->company = $request->company;
        $laptop->cpu = $request->cpu;
        $laptop->ram = $request->ram;
        $laptop->hard = $request->hard;
        $laptop->screen_card = $request->screen_card;
        $laptop->screen_card_type = $request->screen_card_type;
        $laptop->screen_size = $request->screen_size;
        $laptop->cd_driver = $request->cd_driver;
        $laptop->battery = $request->battery;
        $laptop->ports = $request->ports;
        $laptop->is_available = $request->is_available;
        $laptop->type = $request->type;
        $laptop->category_id = $request->category_id;
        $laptop->ports = $request->ports;
        $laptop->image = "image";

        $laptop->save();

        return redirect('/admin/laptops/')->with('success', 'تمت إضافة الحاسوب بنجاح');
    }

    public function show(Laptop $laptop, $name)
    {

        $laptop->views = $laptop->views + 1;
        $laptop->save();

        // Get The Laptops From The Same Company
        $related_laptops = Laptop::where('company', $laptop->company)->limit(8)->get();
        
        return view('user.laptop', [
            'laptop' => $laptop,
            'related_laptops' => $related_laptops
        ]);
    }

    public function showForAdmin(Laptop $laptop){
        return view('admin.laptops.show', [
            'laptop' => $laptop
        ]);
    }

    public function edit(Laptop $laptop){
        return view('admin.laptops.edit', [
            'laptop' => $laptop,
            'categories' => Category::all()
        ]);
    }

    public function update(Request $request, Laptop $laptop)
    {
        $validated = $request->validate([
            'name' => 'required',
            'before_discount_price' => 'required',
            'after_discount_price' => 'required',
            'company' => 'required',
            'cpu' => 'required',
            'ram' => 'required',
            'hard' => 'required',
            'screen_card' => 'required',
            'screen_card_type' => 'required',
            'screen_size' => 'required',
            'cd_driver' => 'required',
            'battery' => 'required',
            'ports' => 'required',
            'is_available' => 'required',
            'type' => 'required',
            'category_id' => 'required',
            'ports' => 'required',
        ]);

        if($laptop->image != "laptop-placeholder.jpg"){
            $image = public_path('images/'.$laptop->image);
            if (file_exists($image)) unlink($image);
        }

        $image_name = time() . '-' . 'laptop' . '.' . $request->image->extension();

        if($request->image->move(public_path('images'), $image_name)){
            $laptop->image = $image_name;
        }
        
        $laptop->name = $request->name;
        $laptop->before_discount_price = $request->before_discount_price;
        $laptop->after_discount_price = $request->after_discount_price;
        $laptop->company = $request->company;
        $laptop->cpu = $request->cpu;
        $laptop->ram = $request->ram;
        $laptop->hard = $request->hard;
        $laptop->screen_card = $request->screen_card;
        $laptop->screen_card_type = $request->screen_card_type;
        $laptop->screen_size = $request->screen_size;
        $laptop->cd_driver = $request->cd_driver;
        $laptop->battery = $request->battery;
        $laptop->ports = $request->ports;
        $laptop->is_available = $request->is_available;
        $laptop->type = $request->type;
        $laptop->category_id = $request->category_id;
        $laptop->ports = $request->ports;
        
        $laptop->save();

        return redirect('/admin/laptops/'.$laptop->id)->with('success', 'تم تعديل بيانات الحاسوب بنجاح');
    }

    public function updateImage(Request $request, Laptop $laptop){
        $validated = $request->validate([
            'image' => 'required|mimes:jpg,png,jpeg|max:1024'
        ]);

        $image = public_path('images/'.$laptop->image);
        if (file_exists($image)) unlink($image);
        
        $image_name = time() . '-' . 'laptop' . '.' . $request->image->extension();

        if($request->image->move(public_path('images'), $image_name)){
            $laptop->image = $image_name;
            $laptop->save();
            return redirect('/admin/laptops/' . $laptop->id)->with('success', 'تم تعديل الصورة الأساسية للحاسوب بنجاح');
        }else{
            abort(500);
        }
    }

    public function destroy(Laptop $laptop)
    {
        $image = public_path('images' . $laptops->image);
        if(file_exists($image)) unlink($image);

        $sub_images = $laptop->subImages;
        if($sub_images->count() > 0){
            foreach($sub_images as $sub_image){
                $path = public_path('images' . $sub_image->image);
                if(file_exists($path)) unlink($path);
            }
        }

        $laptop->delete();
        return redirect('/admin/laptops')->with('success', 'تمت إزالة الحاسوب بنجاح');
    }

    public function addSubImage(Request $request){

        $validated = $request->validate([
            'sub_image' => 'required|mimes:jpg,png,jpeg|max:1024',
            'laptop_id' => 'required'
        ]);
        
        $image_name = time() . '-' . 'sub' . '.' . $request->file('sub_image')->extension();

        if($request->file('sub_image')->move(public_path('images'), $image_name)){
            $sub_image = new SubImage();
            $sub_image->laptop_id = $request->laptop_id;
            $sub_image->image = $image_name;
            $sub_image->save();
            return redirect('/admin/laptops/' . $request->laptop_id)->with('success', 'تمت إضافة الصورة الفرعية للحاسوب بنجاح');
        }else{
            abort(500);
        }
        
    }

    public function deleteSubImage(SubImage $subImage){
        $image = public_path('images/' . $subImage->image);
        if(file_exists($image)) unlink($image);
        $subImage->delete();
        return back()->with('success', 'تمت إزالة الصورة الفرعية للحاسوب بنجاح');
    }
}
