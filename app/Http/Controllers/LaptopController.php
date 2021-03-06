<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laptop;
use App\Models\Category;
use App\Models\SubImage;

class LaptopController extends Controller
{

    /*
    ** View the website index page
    */
    public function home()
    {
        return view('user.index', [
            'all_categories' => Category::limit(12)->get(),
            'categories' => Category::has('laptops', '>=', 1)->limit(4)->get(),
            'top4laptops' => Laptop::where('is_available', true)->orderby('views', 'DESC')->limit(4)->get()
        ]);
    }




    /*
    ** View the laptops page
    */
    public function index()
    {
        $laptops = $this->searchLaptops();

        return view('user.laptops', [
            'laptops' => $laptops,
            'categories' => Category::all()
        ]);
    }




    /*
    ** View all laptops for admin
    */
    public function indexForAdmin()
    {
        $laptops = $this->searchLaptops();

        return view('admin.laptops.index', [
            'laptops' => $laptops,
            'un_available_laptops' => Laptop::where('is_available', false)->get(),
            'categories' => Category::all()
        ]);
    }




    /*
    ** View the create laptop page
    */
    public function create()
    {
        return view('admin.laptops.create', [
            'categories' => Category::all()
        ]);
    }




    /*
    ** Validate the laptop data and store it
    */
    public function store(Request $request)
    {
        $this->validateLaptop($request, true);

        $image_name = $this->create_name('laptop', $request->image->extension());

        if(!$request->image->move(public_path('images'), $image_name)) return back()->with('fail', 'فشل في تحميل الصورة حاول مجددا');

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
        $laptop->image = $image_name;
        $laptop->description = $request->description;

        $laptop->save();

        return redirect('/admin/laptops/')->with('success', 'تمت إضافة الحاسوب بنجاح');
    }




    /*
    ** View specific laptop data for the user
    */
    public function show(Laptop $laptop, $name)
    {
        if($laptop->is_available){
            $laptop->views = $laptop->views + 1;
            $laptop->save();

            // Get The Laptops From The Same Company
            $related_laptops = Laptop::where('company', $laptop->company)->where('id', '!=', $laptop->id)->limit(8)->get();
            
            return view('user.laptop', [
                'laptop' => $laptop,
                'related_laptops' => $related_laptops
            ]);
        }
        return back()->with('fail', 'عذرا هذا الحاسوب لم يعد متوفرا لدينا');
    }




    /*
    ** View specific laptop data for the admin
    */
    public function showForAdmin(Laptop $laptop)
    {
        return view('admin.laptops.show', [
            'laptop' => $laptop
        ]);
    }




    /*
    ** View edit laptop form with laptop current data
    */
    public function edit(Laptop $laptop)
    {
        return view('admin.laptops.edit', [
            'laptop' => $laptop,
            'categories' => Category::all()
        ]);
    }




    /*
    ** Validate the request laptop data and update it
    */
    public function update(Request $request, Laptop $laptop)
    {
        $this->validateLaptop($request);
        
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
        $laptop->description = $request->description;
        
        $laptop->save();

        return redirect('/admin/laptops/'.$laptop->id)->with('success', 'تم تعديل بيانات الحاسوب بنجاح');
    }




    /*
    ** Validate the laptop new image and update it
    */
    public function updateImage(Request $request, Laptop $laptop)
    {
        $validated = $request->validate([
            'image' => 'required|mimes:jpg,png,jpeg|max:1024'
        ]);

        $this->delete($laptop->image);
        
        $image_name = $this->create_name('laptop', $request->image->extension());

        if(!$request->image->move(public_path('images'), $image_name)) return back()->with('fail', 'فشل في تحميل الصورة حاول مجددا');
        
        $laptop->image = $image_name;
        $laptop->save();
        return redirect('/admin/laptops/' . $laptop->id)->with('success', 'تم تعديل الصورة الأساسية للحاسوب بنجاح');
    }




    /*
    ** Delete the laptop image and sub images and delete it 
    */
    public function destroy(Laptop $laptop)
    {
        $this->delete($laptop->image);

        $sub_images = $laptop->subImages;
        if($sub_images->count() > 0){
            foreach($sub_images as $sub_image){
                $this->delete($sub_image->image);
            }
        }

        $laptop->delete();
        return redirect('/admin/laptops')->with('success', 'تمت إزالة الحاسوب بنجاح');
    }




    /*
    ** Validate the laptop sub image and add it
    */
    public function addSubImage(Request $request)
    {
        $validated = $request->validate([
            'sub_image' => 'required|mimes:jpg,png,jpeg|max:1024',
            'laptop_id' => 'required'
        ]);
        
        $image_name = $this->create_name('sub', $request->file('sub_image')->extension());

        if(!$request->file('sub_image')->move(public_path('images'), $image_name)) return back()->with('fail', 'فشل في تحميل الصورة حاول مجددا');

        $sub_image = new SubImage();
        $sub_image->laptop_id = $request->laptop_id;
        $sub_image->image = $image_name;
        $sub_image->save();
        return redirect('/admin/laptops/' . $request->laptop_id)->with('success', 'تمت إضافة الصورة الفرعية للحاسوب بنجاح');
    }




    /*
    ** Delete the laptop sub image
    */
    public function deleteSubImage(SubImage $subImage)
    {
        $this->delete($subImage->image);
        $subImage->delete();
        return back()->with('success', 'تمت إزالة الصورة الفرعية للحاسوب بنجاح');
    }





    /*
    ** Helper function to validate the data of the laptop
    */
    private function validateLaptop($request, $with_image = false)
    {
        $validate_arr = [
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
        ];

        if($with_image) $validate_arr['image'] = 'required|mimes:jpg,png,jpeg|max:1024';

        $request->validate($validate_arr);
    }





    /*
    ** Helper function to search laptops
    */
    private function searchLaptops()
    {
        $t = (strtolower(request('t')) == 'old') ? 'ASC' : 'DESC';
        $p = (strtolower(request('p')) == 'high') ? 'DESC' : 'ASC';
        $cid = (intval(request('cid')) != 0) ? intval(request('cid')) : 0;
        $q = request('q');
        $laptops;

        if($cid > 0 && $q != '')
        {
            //Search by category and name
            $laptops = Laptop::where('is_available', true)
            ->where('category_id', $cid)
            ->where('name', 'like', '%'. $q . '%')
            ->orderBy('after_discount_price', $p)
            ->orderBy('created_at', $t)
            ->paginate(12);
        }
        elseif($cid > 0 && $q == '')
        {
            //Search by category
            $laptops = Laptop::where('is_available', true)
            ->where('category_id', $cid)
            ->orderBy('after_discount_price', $p)
            ->orderBy('created_at', $t)
            ->paginate(12);
        }
        elseif($cid == 0 && $q != '')
        {
            //Search by name
            $laptops = Laptop::where('is_available', true)
            ->where('name', 'like', '%'. $q . '%')
            ->orderBy('after_discount_price', $p)
            ->orderBy('created_at', $t)
            ->paginate(12);
        }
        else
        {
            //No search just sorting
            $laptops = Laptop::where('is_available', true)
            ->orderBy('after_discount_price', $p)
            ->orderBy('created_at', $t)
            ->paginate(12);
        }

        return $laptops;
    }
}
