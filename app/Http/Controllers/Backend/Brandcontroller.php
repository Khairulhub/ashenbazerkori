<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Backend\Brand;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use File;

class Brandcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    // here $brands is a object and Brand is a model,by using model we take all the data from the database and send it to the manage page
    {
        $brands = Brand::orderBy('name', 'asc')->get();
        return view('backend.pages.brand.manage',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.Brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $brand = new Brand();
        $brand->name  = $request->name;
        $brand->slug  = Str::slug($request->name);
        $brand->description  = $request->description;
      
        $brand->is_featured  = $request->is_featured;
        $brand->status  = $request->status;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $img = rand() . '.' . $image->getClientOriginalExtension();
            $location = public_path('Backend/img/brand/' . $img);
            Image::make($image)->save($location);
            $brand->image = $img;  
        }

        $brand->save();
        return redirect()->route('brand.manage');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $brand = Brand::find($id);
        if(!is_null($brand)){
            return view('backend.pages.brand.edit',compact('brand'));
        }
        else{
            return redirect()->route('brand.manage');
        }
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $brand = Brand::find($id);
        
        

        
        $brand->name  = $request->name;
        $brand->slug  = Str::slug($request->name);
        $brand->description  = $request->description;
      
        $brand->is_featured  = $request->is_featured;
        $brand->status  = $request->status;

        if (!is_null($request->hasFile('image'))) {
            $image = $request->file('image');
        $img = rand() . '.' . $image->getClientOriginalExtension();
        $location = public_path('Backend/img/brand/' . $img);

        // Delete the old image file if it exists
        if (File::exists('Backend/img/brand/' . $brand->image)) {
            File::delete('Backend/img/brand/' . $brand->image);
        }

        Image::make($image)->save($location);
        $brand->image = $img;
        }

        $brand->save();
        return redirect()->route('brand.manage');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $brand = Brand::find($id);
        if(!is_null($brand)){
            // Delete the brand image
            if (File::exists('Backend/img/brand/' . $brand->image)) {
                File::delete('Backend/img/brand/' . $brand->image);
            }
            $brand->delete();
            return redirect()->route('brand.manage');
        }
        else{
            return redirect()->route('brand.manage');
        }
    }
}