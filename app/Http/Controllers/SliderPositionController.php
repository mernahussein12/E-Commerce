<?php

namespace App\Http\Controllers;

use App\Models\SliderPosition;
use Illuminate\Http\Request;

class SliderPositionController extends Controller
{
    public function index()
    {
        $categoreis =SliderPosition::all();
        return view('backend.sliderposition.index', compact('categoreis'));
    }



    public function create()
    {
        return view('backend.sliderposition.create');
    }

    public function store(Request $request)
    {
       // dd($request);
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        } else {
            $imageName = null;
        }

      
        SliderPosition::create([
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,
             'image'=> $imageName,
           
        ]);

        return redirect()->route('SliderPosition.index')->with('success');
    }

    public function edit($id)
    {
        $category =  SliderPosition::findOrFail($id);
        return view('backend.sliderposition.edit', compact('category'));
    }


    public function update(Request $request, $id)
    {
       

        $categoreis = SliderPosition::findOrFail($id);
        
          if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $categoreis->image = $imageName;
        }else{
            $imageName = $categoreis->image;
        }

        $categoreis->name_ar = $request->name_ar;
         $categoreis->name_en = $request->name_en;
          $categoreis->image = $imageName;

        $categoreis->save();

        return redirect()->route('SliderPosition.index')->with('success','Data is Updated Successfully');
    }

    public function destroy($id)
    {
        $category = SliderPosition::findOrFail($id);
        $category->delete();

        return redirect()->route('SliderPosition.index')->with('success','Data is Delete Successfully');
    }
}
