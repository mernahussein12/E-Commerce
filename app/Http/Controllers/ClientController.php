<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function client()
    {
        $clients = Client::all();
        return view('frontend.ourclient',compact('clients'));
    }
    
    public function index()
    {
        $clients =Client::all();
        return view('backend.client.index', compact('clients'));
    }

    public function create()
    {
        return view('backend.client.create');
    }


    public function clients()
    {
        $clients =Client::all();
        return view('frontend.body', compact('clients'));
    }



    public function store(Request $request)
    {
        $request->validate([
            'link' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('clients'), $imageName);
        }

        Client::create([
            'link' => $request->input('link'),
            'image' => $imageName,
        ]);

        return redirect()->route('Client.index')->with('success', 'Client added successfully');
    }

    public function edit($id)
    {
        $client= Client::findOrFail($id);
        return view('backend.client.edit', compact('client'));
    }

    public function update(Request $request, $id)
    {
        $client = Client::findOrFail($id);

        $request->validate([
            'link' => 'nullable|string',
        ]);


        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('clients'), $imageName);
            $client->image = $imageName;
        }else{
            $imageName = $client->image;
        }

        $client->update([
            'link' => $request->input('link'),
            'image' => $imageName,
        ]);

        return redirect()->route('Client.index')->with('success', 'Client updated successfully!');
    }


    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();

        return redirect()->route('Client.index')->with('success', 'Client deleted successfully!');
    }
}
