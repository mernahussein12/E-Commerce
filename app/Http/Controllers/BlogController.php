<?php

namespace App\Http\Controllers;

use App\Models\CategoryBlog;
use App\Models\Blog;
use App\Models\Slider;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('backend.blog.index', compact('blogs'));
    }





     public function show($id)
{
     $bloge = Blog::find($id);
    $blogs = Blog::where('category_id',$bloge->category_id)->get();

    return view('pages_website.single_blogs', compact('bloge', 'blogs'));
}


    public function create()
    {
        $categories =CategoryBlog::all();
        return view('backend.blog.create', compact('categories'));
    }

    public function store(Request $request)
    {


        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('blogs'), $imageName);
        }else {
            $imageName=null;
        }
       if ($request->hasFile('single_image')) {
            $imageNamee = time() . '.' . $request->single_image->extension();
            $request->single_image->move(public_path('blogs'), $imageNamee);
        }else {
            $imageNamee=null;
        }


        Blog::create([
            'name_ar' => $request->input('name_ar'),
            'title_ar' => $request->input('title_ar'),
            'body_ar' => $request->input('body_ar'),
            'name_en' => $request->input('name_en'),
            'title_en' => $request->input('title_en'),
            'body_en' => $request->input('body_en'),
            'category_id' => $request->input('category_id'),
            'image' => $imageName,
            'single_image' => $imageNamee,
        ]);

        return redirect()->route('Blog.index')->with('success', 'Blog created successfully!');
    }

    public function edit($id)
    {
        $blog= Blog::findOrFail($id);
        $categories =CategoryBlog::all();

        return view('backend.blog.edit', compact('blog','categories'));
    }

    public function update(Request $request, $id)
    {

        $blog = Blog::findOrFail($id);



        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('blogs'), $imageName);
            $blog->image = $imageName;
        }else{
            $imageName = $blog->image;
        }
                if ($request->hasFile('single_image')) {
            $imageNamee = time() . '.' . $request->single_image->extension();
            $request->single_image->move(public_path('blogs'), $imageNamee);
            $blog->single_image = $imageNamee;
        }else{
            $imageNamee = $blog->single_image;
        }


        $blog->update([
            'name_ar' => $request->input('name_ar'),
            'title_ar' => $request->input('title_ar'),
            'body_ar' => $request->input('body_ar'),
            'name_en' => $request->input('name_en'),
            'title_en' => $request->input('title_en'),
            'body_en' => $request->input('body_en'),
            'category_id' => $request->input('category_id'),
            'image' => $imageName,
            'image_single' => $imageNamee,
        ]);

        return redirect()->route('Blog.index')->with('success', 'Blog updated successfully!');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('Blog.index')->with('success', 'Blog deleted successfully!');
    }
}
