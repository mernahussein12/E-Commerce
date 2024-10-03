<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\CategoryService;
use App\Models\Service;
use Illuminate\Http\Request;

class CategoryServiceController extends Controller
{
    public function index()
    {
        $categoreis =CategoryService::all();
        return view('backend.servicecategory.index', compact('categoreis'));
    }



    public function create()
    {
        $categoreis =CategoryService::all();
        return view('backend.servicecategory.create',compact('categoreis'));
    }


public function show($id)
    {
        $servicee = CategoryService::find($id);
        $cat_services = Service::where('category_id',$id)->get();
        return view('pages_website.serv_single', compact('servicee','cat_services'));
    }
 


public function store(Request $request)
{
    // Create a new category service
    $category = new CategoryService();
    $category->name_ar = $request->name_ar;
    $category->name_en = $request->name_en;
    $category->text_ar = $request->text_ar;
    $category->text_en = $request->text_en;

    // Store experiences as JSON
    $category->exp_ar = json_encode($request->exp_ar);
    $category->exp_en = json_encode($request->exp_en);

    // Handle the 'front image'
    if ($request->hasFile('image')) {
        $imageName = time() . '_front.' . $request->image->extension();
        $request->image->move(public_path('services'), $imageName);
        $category->image = $imageName;
    }

    // Handle the 'single image'
    if ($request->hasFile('single_image')) {
        $singleImageName = time() . '_single.' . $request->single_image->extension();
        $request->single_image->move(public_path('services'), $singleImageName);
        $category->back = $singleImageName;
    }

    // Handle the 'icon image'
    if ($request->hasFile('icon_image')) {
        $iconImageName = time() . '_icon.' . $request->icon_image->extension();
        $request->icon_image->move(public_path('services'), $iconImageName);
        $category->icon = $iconImageName;
    }

    $category->save();

    return redirect()->route('ServiceCategory.index')->with('success', 'Service Category Created Successfully');
}







    public function edit($id)
    {
        $category =  CategoryService::findOrFail($id);
        return view('backend.servicecategory.edit', compact('category'));
    }

public function update(Request $request, $id)
{
    // Find the category by ID
    $category = CategoryService::findOrFail($id);

    // Update category fields
    $category->name_ar = $request->name_ar;
    $category->name_en = $request->name_en;
    $category->text_ar = $request->text_ar;
    $category->text_en = $request->text_en;
    
    // Encode experiences as JSON
    $category->exp_ar = json_encode($request->exp_ar);
    $category->exp_en = json_encode($request->exp_en);

    // Handle the 'front image'
    if ($request->hasFile('image')) {
        // Delete old image if exists
        if ($category->image && file_exists(public_path('services/' . $category->image))) {
            unlink(public_path('services/' . $category->image));
        }

        $imageName = time() . '_front.' . $request->image->extension();
        $request->image->move(public_path('services'), $imageName);
        $category->image = $imageName;
    }

    // Handle the 'single image'
    if ($request->hasFile('single_image')) {
        // Delete old image if exists
        if ($category->back && file_exists(public_path('services/' . $category->back))) {
            unlink(public_path('services/' . $category->back));
        }

        $singleImageName = time() . '_single.' . $request->single_image->extension();
        $request->single_image->move(public_path('services'), $singleImageName);
        $category->back = $singleImageName;
    }

    // Handle the 'icon image'
    if ($request->hasFile('icon_image')) {
        // Delete old image if exists
        if ($category->icon && file_exists(public_path('services/' . $category->icon))) {
            unlink(public_path('services/' . $category->icon));
        }

        $iconImageName = time() . '_icon.' . $request->icon_image->extension();
        $request->icon_image->move(public_path('services'), $iconImageName);
        $category->icon = $iconImageName;
    }

    // Save the updated category
    $category->save();

    // Redirect with success message
    return redirect()->route('ServiceCategory.index')->with('success', 'Data is Updated Successfully');
}


    public function destroy($id)
    {
        $category = CategoryService::findOrFail($id);
        $category->delete();

        return redirect()->route('ServiceCategory.index')->with('success','Data is Delete Successfully');
    }
}
