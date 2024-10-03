<?php

namespace App\Http\Controllers;

use App\Models\CategoryService;
use App\Models\Image;
use App\Models\Service;
use App\Models\Slider;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index() {

        $services = Service::all();
        $categoreis =CategoryService::all();
        return view('backend.service.index', compact('services','categoreis'));
    }



    public function create()
    {
        $categoreis =CategoryService::all();
        return view('backend.service.create', compact('categoreis'));
    }

    public function store(Request $request)
    {
//         dd($request);

        $request->validate([
            'name_ar' => 'required|string',
            'body_ar' => 'required|string',

            'exp_ar' => 'required|string',
            'name_en' => 'required|string',
            'body_en' => 'required|string',
            'exp_en' => 'required|string',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // تحقق من جميع الصور المرسلة
        ]);

        // رفع الصورة الرئيسية
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('services'), $imageName);
        } else {
            $imageName = null;
        }

        // إنشاء خدمة جديدة
        $service = new Service();
        $service->name_ar = $request->name_ar;
        $service->body_ar = $request->body_ar;

        $service->exp_ar = $request->exp_ar;
        $service->name_en = $request->name_en;
        $service->body_en = $request->body_en;
        $service->exp_en = $request->exp_en;
        $service->category_id = $request->category_id;
        $service->image = $imageName;
        $service->save();



        return redirect()->route('Service.index')->with('success', 'تم إنشاء الخدمة بنجاح');
    }



    public function show($id)
    {
        $service = Service::find($id);
        $servicees = Service::where('category_id',$service->category_id )->get();
        return view('pages_website.single_service', compact('service','servicees'));

    }

   
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        $categories =CategoryService::all();
        return view('backend.service.edit', compact('service', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);

        $request->validate([
            'name_ar' => 'required|string',
            'exp_ar' => 'required|string',
            'body_ar' => 'required|string',
            'name_en' => 'required|string',
            'exp_en' => 'required|string',
            'body_en' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('services'), $imageName);
            $service->image = $imageName;
        }else{
            $imageName = $service->image;
        }

        $service->update([

            'name_ar' => $request->input('name_ar'),
            'body_ar' => $request->input('body_ar'),
            'exp_ar' => $request->input('exp_ar'),
            'name_en' => $request->input('name_en'),
            'body_en' => $request->input('body_en'),
            'exp_en' => $request->input('exp_en'),
            'category_id' => $request->input('category_id'),
            'image' => $imageName,
        ]);


        return redirect()->route('Service.index')->with('success', 'Service updated successfully');
    }

    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();

        return redirect()->route('Service.index')->with('success', 'Service deleted successfully');
    }
}
