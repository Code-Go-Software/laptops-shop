<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{



    /*
    ** View all categories for the admin
    */
    public function index()
    {
        return view('admin.categories.index', [
            'categories' => Category::all()
        ]);
    }




    /*
    ** View the admin create category page
    */
    public function create()
    {
        return view('admin.categories.create');
    }




    /*
    ** Validate the new category data and store it
    */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:categories'
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;

        $category->save();

        return redirect('admin/categories')->with('success', 'تم إنشاء الفئة بنجاح');
    }




    /*
    ** View the edit category form category current data
    */
    public function edit(Category $category)
    {
        return view('admin.categories.edit', [
            'category' => $category
        ]);
    }




    /*
    ** Validate the new category data and update it
    */
    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'name' => 'required'
        ]);

        $category->name = $request->name;
        $category->description = $request->description;

        $category->save();
        return redirect('admin/categories')->with('success', 'تم تعديل بيانات الفئة بنجاح');
    }




    /*
    ** Delete the category
    */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect('admin/categories')->with('success', 'تمت إزالة الفئة وجميع الحواسيب التي تنتمي لها بنجاح');
    }
}
