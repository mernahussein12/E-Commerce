<?php

namespace App\Http\Controllers;
// use App\Models\;
use App\Models\CategoryBlog;
use Illuminate\Http\Request;
use App\Models\Blog;

class CategoryBlogController extends Controller
{
    public function index()
    {
        $categories = CategoryBlog::all();
        return view('backend.blogcategory.index', compact('categories'));
    }

    public function create()
    {
        return view('backend.blogcategory.create');
    }

    public function store(Request $request)
    {

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('blogs'), $imageName);
        } else {
            $imageName = null;
        }
          if ($request->hasFile('single_image')) {
            $imageNamee = time() . '.' . $request->single_image->extension();
            $request->single_image->move(public_path('blogs'), $imageNamee);
        } else {
            $imageNamee = null;
        }
        CategoryBlog::create([
            'name_ar' => $request->input('name_ar'),
            'name_en' => $request->input('name_en'),
            'body_ar' => $request->input('body_ar'),
            'body_en' => $request->input('body_en'),
            'image' => $imageName,
             'single_image' => $imageNamee,
        ]);

        return redirect()->route('BlogCategory.index')->with('success', 'Category created successfully');
    }


     public function show($id)
{
     $bloge = CategoryBlog::find($id);
    $cat_blogs = Blog::where('category_id',$id)->get();
    return view('pages_website.single_blog', compact('bloge', 'cat_blogs'));
}

    public function edit($id)
    {
        $category = CategoryBlog::findOrFail($id);
        return view('backend.blogcategory.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {


        $category = CategoryBlog::findOrFail($id);

        $category->update([
            'name_ar' => $request->input('name_ar'),
            'name_en' => $request->input('name_en'),
            'body_ar' => $request->input('body_ar'),
            'body_en' => $request->input('body_en'),

        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('blogs'), $imageName);
            $category->image = $imageName;
        }

      if ($request->hasFile('single_image')) {
            $imageNamee = time() . '.' . $request->single_image->extension();
            $request->single_image->move(public_path('blogs'), $imageNamee);
            $category->single_image = $imageNamee;
        }

        return redirect()->route('BlogCategory.index')->with('success', 'Category updated successfully');
    }

    public function destroy($id)
    {
        $category = CategoryBlog::findOrFail($id);
        $category->delete();

        return redirect()->route('BlogCategory.index')->with('success', 'Category deleted successfully');
    }
}

