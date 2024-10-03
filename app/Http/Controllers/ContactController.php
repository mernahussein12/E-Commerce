<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {

        $contacts = Contact::all();
        return view('backend.contact.index',compact('contacts'));
    }

    public function create()
    {

        return view('backend.contact.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'title_ar' => 'required|string',
            'address_ar' => 'nullable|string',
            'title_en' => 'required|string',
            'address_en' => 'nullable|string',
            'phone' => 'nullable|string',
            'email' => 'nullable|email',
           
        ]);

       

            Contact::create([
                 'title_ar' => $request->title_ar,
                 'address_ar'=>$request->address_ar,
                 'title_en' => $request->title_en,
                 'address_en'=>$request->address_en,
                 'phone'=>$request->phone,
                 'email'=>$request->email,
                 'facebook'=>$request->facebook,
                 'instegram'=>$request->instegram,
                 'twitter'=>$request->twitter,
                 'location'=>$request->location,
                 'youtube'=>$request->youtube,

            ]);

            return redirect()->route('Contact.index')->with('success', 'contact added successfully');

    }


    public function edit($id)
    {
        $contact =  contact::findOrFail($id);
        return view('backend.contact.edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {

        $contact = contact::findOrFail($id);

        $request->validate([
            'title_ar' => 'required|string',
            'address_ar' => 'nullable|string',
            'title_en' => 'required|string',
            'address_en' => 'nullable|string',
            'phone' => 'nullable|string',
            'email' => 'nullable|email',
            'facebook' => 'nullable|string',
            'instegram' => 'nullable|string',
            'twitter' => 'nullable|string',
            'youtube' => 'nullable|string',
            'location' => 'nullable|string',
        ]);



        $contact->update([
            'title_ar' => $request->input('title_ar'),
            'address_ar' => $request->input('address_ar'),
            'title_en' => $request->input('title_en'),
            'address_en' => $request->input('address_en'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'location' => $request->input('location'),
            'facebook' => $request->input('facebook'),
            'twitter' => $request->input('twitter'),
            'instegram' => $request->input('instegram'),
            'youtube' => $request->input('youtube'),
        ]);

        return redirect()->route('Contact.index')->with('success', 'contact updated successfully!');
    }

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->route('Contact.index')->with('success', 'contact deleted successfully!');
    }
}
