<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index() {

        $teams = Team::all();
        return view('backend.team.index',compact('teams'));
    }

        public function show($id)
    {
        $team = Team::find($id);
        return view('pages_website.single_team', compact('team'));
    }

    public function create()
    {

        return view('backend.team.create');
    }



    public function store(Request $request)
    {



        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('teams'), $imageName);
            } else {
                $imageName=null;
            }

            Team::create([
                 'name_ar' => $request->name_ar,
                //  'name_en' => $request->name_en,
                  'job_ar' => $request->job_ar,
                //  'job_en' => $request->job_en,
                 'image' => $imageName,
                 'address_ar'=>$request->address_ar,
                 'phone'=>$request->phone,
                 'email'=>$request->email,
                 'summary_ar'=>$request->summary_ar,
                 'spec_ar'=>$request->spec_ar,
                 'exp_ar'=>$request->exp_ar,
                 'skills_ar'=>$request->skills_ar,
                 'education_ar'=>$request->education_ar,


                //  'address_en'=>$request->address_en,

                //  'summary_en'=>$request->summary_en,

                //  'spec_en'=>$request->spec_en,

                //  'exp_en'=>$request->exp_en,
                //  'skills_en'=>$request->skills_en,

                //  'education_en'=>$request->education_en,


            ]);

            return redirect()->route('Team.index')->with('success', 'Team added successfully');

    }


    public function edit($id)
    {
        $team =  Team::findOrFail($id);
        return view('backend.team.edit', compact('team'));
    }

    public function update(Request $request, $id)
    {

        $team = Team::findOrFail($id);




        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('teams'), $imageName);
            } else {
                $imageName=null;
            }

        $team->update([
            'name_ar' => $request->input('name_ar'),
            'image' => $imageName,
            'address_ar' => $request->input('address_ar'),
            'phone_ar' => $request->input('phone'),
            'email' => $request->input('email'),
            'summary_ar' => $request->input('summary_ar'),
            'spec_ar' => $request->input('spec_ar'),
            'exp_ar' => $request->input('exp_ar'),
            'skills_ar' => $request->input('skills_ar'),
            'education_ar' => $request->input('education_ar'),
            'name_ar' => $request->input('name_ar'),

            // 'address_en' => $request->input('address_en'),
            // 'summary_en' => $request->input('summary_en'),

            // 'spec_en' => $request->input('spec_en'),

            // 'exp_en' => $request->input('exp_en'),

            // 'skills_en' => $request->input('skills_en'),

            // 'education_en' => $request->input('education_en'),
            'job_ar'=> $request->input('job_ar'),
            // 'job_en'=>$request->input('job_ar'),

        ]);

        return redirect()->route('Team.index')->with('success', 'Team updated successfully!');
    }

    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        $team->delete();

        return redirect()->route('Team.index')->with('success', 'Team deleted successfully!');
    }

}
