<?php

namespace App\Http\Controllers;

use App\Models\CategoryGallery;

use App\Models\CategoryService;
use App\Models\Gallery;
use App\Models\Image;
use App\Models\Product;
use App\Models\Service;
use App\Models\Slider;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $gallaries =Gallery::all();

        return view('backend.gallary.index', compact('gallaries'));
    }

    public function create()
    {
        $categories =CategoryGallery::all();
        return view('backend.gallary.create', compact('categories'));
    }

        public function show($id)
    {
        $category = CategoryGallery::with('galleries')->findOrFail($id);
        $categorie = Gallery::where('category_id',$category->category_id )->get();
        $categories =CategoryGallery::all();
        $galleries = Gallery::get();
        $slider=Slider::where('position_id',6)->get();
        return view('pages_website.single_gallary', compact('galleries', 'category', 'slider','categories','categorie'));
    }

  
    public function store(Request $request)
    {

        $request->validate([
            'title_ar' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
        ]);


        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('gallaries'), $imageName);
        } else {
            $imageName=null;
        }


        Gallery::create([

            'title_ar' => $request->input('title_ar'),
            'title_en' => $request->input('title_en'),
            'category_id' => $request->input('category_id'),
            'image' => $imageName,

        ]);

        return redirect()->route('Gallary.index')->with('success');
    }

    public function edit($id)
    {
        $gallary = Gallery::findOrFail($id);
        $categories =CategoryGallery::all();

        return view('backend.gallary.edit', compact('gallary', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $gallary = Gallery::findOrFail($id);

        $request->validate([
            'title_ar' => 'required|string',
            'title_en' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('gallaries'), $imageName);
            $gallary->image = $imageName;
        }else{
            $imageName = $gallary->image;
        }


        $gallary->update([
            'title_ar' => $request->input('title_ar'),
            'title_en' => $request->input('title_en'),
            'category_id' => $request->input('category_id'),
            'image' => $imageName,

        ]);

        return redirect()->route('Gallary.index')->with('success', 'Gallary updated successfully');
    }

    public function destroy($id)
    {
        $gallary = Gallery::findOrFail($id);
        $gallary->delete();

        return redirect()->route('Gallary.index')->with('success', 'Gallary deleted successfully');
    }

}
