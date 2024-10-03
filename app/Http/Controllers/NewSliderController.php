<?php

namespace App\Http\Controllers;

use App\Models\NewSlider;
use Illuminate\Http\Request;

class NewSliderController extends Controller
{
    public function index() {

        $sliders = NewSlider::all();
        return view('backend.new_slider.index', compact('sliders'));
    }

    public function create()
    {
        $categories = NewSlider::all();
        return view('backend.new_slider.create', compact('categories'));
    }


    public function store(Request $request)
    {
       

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/new_slider'), $imageName);
        }

if ($request->hasFile('image2')) {
            $imageName2 = mt_rand(1000, 9999) . time() . '.' . $request->image2->extension();
            $request->image2->move(public_path('images/new_slider'), $imageName2);
        }

        NewSlider::create([
            'pagetitle_ar' => $request->input('title_ar'),
            'saletitle_ar' => $request->input('sale_ar'),
            'text_ar' => $request->input('text_ar'),
            'image' => $imageName,
            'image2' => $imageName2,
            'status' => $request->input('status') == null ? 0 : 1 ,
        ]);

        return redirect()->route('new_slider.index')->with('success', 'Slider added successfully');
    }

    public function edit($id)
    {
        $slider = NewSlider::findOrFail($id);

        return view('backend.new_slider.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        $slider = NewSlider::findOrFail($id);

       

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/new_slider'), $imageName);
            $slider->image = $imageName;
        }else{
            $imageName = $slider->image;
        }
        
        if ($request->hasFile('image2')) {
            $imageName2 = mt_rand(1000, 9999) . time() . '.' . $request->image2->extension();
            $request->image2->move(public_path('images/new_slider'), $imageName2);
            $slider->image2 = $imageName;
        }else{
            $imageName2 = $slider->image2;
        }

        $slider->update([
            'pagetitle_ar' => $request->input('title_ar'),
            'saletitle_ar' => $request->input('sale_ar'),
            'text_ar' => $request->input('text_ar'),
            'image' => $imageName,
            'image2' => $imageName2,
            'status' => $request->input('status') == null ? 0 : 1 ,
        ]);

        return redirect()->route('new_slider.index')->with('success', 'Slider updated successfully');
    }

    public function destroy($id)
    {
        $slider = NewSlider::findOrFail($id);
        $slider->delete();

        return redirect()->route('new_slider.index')->with('success', 'Slider deleted successfully');
    }

}
