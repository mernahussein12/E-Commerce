<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use Illuminate\Http\Request;

class MissionController extends Controller
{
    public function index()
    {
        $missions = Mission::all();
        return view('backend.mission.index', compact('missions'));
    }

    public function create()
    {
        return view('backend.mission.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'title_ar' => 'required|string|max:255',
            'body_ar' => 'required|string',
            'title_en' => 'required|string|max:255',
            'body_en' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('missions'), $imageName);
        }else {
            $imageName=null;
        }


        Mission::create([
            'title_ar' => $request->input('title_ar'),
            'body_ar' => $request->input('body_ar'),
            'title_en' => $request->input('title_en'),
            'body_en' => $request->input('body_en'),
            'image' => $imageName,
        ]);

        return redirect()->route('Mission.index')->with('success', 'Mission created successfully!');
    }

    public function edit($id)
    {
        $mission= Mission::findOrFail($id);
        return view('backend.mission.edit', compact('mission'));
    }

    public function update(Request $request, $id)
    {

        $mission = Mission::findOrFail($id);

        $request->validate([
            'title_ar' => 'required|string|max:255',
            'body_ar' => 'required|string',
            'title_en' => 'required|string|max:255',
            'body_en' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('missions'), $imageName);
            $mission->image = $imageName;
        }else{
            $imageName = $mission->image;
        }

        $mission->update([
            'title_ar' => $request->input('title_ar'),
            'body_ar' => $request->input('body_ar'),
            'title_en' => $request->input('title_en'),
            'body_en' => $request->input('body_en'),
            'image' => $imageName,
        ]);

        return redirect()->route('Mission.index')->with('success', 'Mission updated successfully!');
    }

    public function destroy($id)
    {
        $mission = Mission::findOrFail($id);
        $mission->delete();

        return redirect()->route('Mission.index')->with('success', 'Mission deleted successfully!');
    }


}
