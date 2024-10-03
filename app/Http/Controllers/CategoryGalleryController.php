<?php

namespace App\Http\Controllers;

use App\Models\CategoryGallery;
use Illuminate\Http\Request;

class CategoryGalleryController extends Controller
{
    public function index()
    {
        $categories = CategoryGallery::all();
        return view('backend.gallarycategory.index', compact('categories'));
    }

    public function create()
    {
        return view('backend.gallarycategory.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_ar' => 'required|string|max:255',
            
           
        ]);

         // رفع الصورة الرئيسية
         if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('categorygalleries'), $imageName);
        } else {
            $imageName = null;
        }


        CategoryGallery::create([
            'name_ar' => $request->input('name_ar'),
           
            
            'image' => $imageName,
        ]);

        return redirect()->route('GallaryCategory.index')->with('success', 'Category created successfully');
    }

  
    public function edit($id)
    {
        $category = CategoryGallery::findOrFail($id);
        return view('backend.gallarycategory.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            
            'name_ar' => 'required|string|max:255',
          
//            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $category = CategoryGallery::findOrFail($id);

     
        $category->name_ar= $request->name_ar;
     

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('categorygalleries'), $imageName);
            $category->image = $imageName;
        }

        $category->save();

        return redirect()->route('GallaryCategory.index')->with('success','Data is Updated Successfully');
    }
    public function destroy($id)
    {
        $category = CategoryGallery::findOrFail($id);
        $category->delete();

        return redirect()->route('GallaryCategory.index')->with('success', 'Category deleted successfully');
    }
}