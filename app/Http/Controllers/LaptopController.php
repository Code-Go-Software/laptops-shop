<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laptop;
use App\Models\Category;

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
        $laptops = Laptop::paginate(12);
        return view('user.laptops', [
            'laptops' => $laptops
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

    public function show(Laptop $laptop, $name)
    {
        // Get The Laptops From The Same Company
        $related_laptops = Laptop::where('company', $laptop->company)->limit(8)->get();
        
        return view('user.laptop', [
            'laptop' => $laptop,
            'related_laptops' => $related_laptops
        ]);
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
