<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\SliderPosition;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index() {

        $sliders = Slider::all();
        return view('backend.slider.index', compact('sliders'));
    }

    public function create()
    {
        $categories = SliderPosition::all();
        return view('backend.slider.create', compact('categories'));
    }


    public function store(Request $request)
    {
       


        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }



        Slider::create([
            'text_ar' => $request->input('text_ar'),
            'text_en' => $request->input('text_en'),
            'position_id' => $request->input('position_id'),
            'image' => $imageName,
        ]);

        return redirect()->route('Slider.index')->with('success', 'Slider added successfully');
    }

    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        $categories = SliderPosition::all();

        return view('backend.slider.edit', compact('slider', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $slider = Slider::findOrFail($id);

       

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $slider->image = $imageName;
        }else{
            $imageName = $slider->image;
        }

        $slider->update([
            'text_ar' => $request->input('text_ar'),
            'text_en' => $request->input('text_en'),
            'position_id' => $request->input('position_id'),
            'image' => $imageName,
        ]);

        return redirect()->route('Slider.index')->with('success', 'Slider updated successfully');
    }

    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        $slider->delete();

        return redirect()->route('Slider.index')->with('success', 'Slider deleted successfully');
    }

}
