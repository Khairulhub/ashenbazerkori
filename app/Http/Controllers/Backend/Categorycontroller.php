<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//this 4 line is for image upload and category is model
use App\Models\Backend\Category;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use File;

class Categorycontroller extends Controller
{
    
    public function index()
    {
        $categories=Category::orderBy('name','asc')->get();
        return view('backend.pages.Category.manage',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        


        
        return view('backend.pages.Category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = new Category();
        
        $category-> name = $request->name;
        $category-> slug = Str::slug( $request->name) ;
        $category-> description = $request->description;
        $category-> is_parent = $request->is_parent;
        $category-> status = $request->status;

        if($request->hasFile('image'))
        {
            $image =$request->file('image');
            $img = rand().'.'.$image->getClientOriginalExtension();
            $location =public_path('Backend/img/category/'.$img);
            Image::make($image)->save($location);
            $category->image = $img;
            
        }
        $category->save();
        return redirect()->route('category.manage');
        

        
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
        $category = Category::find($id);
        if(!is_null($category)){
            return view('backend.pages.category.edit',compact('category'));
        }
        else{
            return redirect()->route('category.manage');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = Category::find($id);
        if(is_null($category)){
            return redirect()->route('category.manage');
        }
        $category->name  = $request->name;
        $category->slug  = Str::slug($request->name);
        $category->description  = $request->description;
      
        $category->is_parent  = $request->is_parent;
        $category->status  = $request->status;

        if (!is_null($request->hasFile('image'))) {
            $image = $request->file('image');
        $img = rand() . '.' . $image->getClientOriginalExtension();
        $location = public_path('Backend/img/category/' . $img);

        // Delete the old image file if it exists
        if (File::exists('Backend/img/category/' . $category->image)) {
            File::delete('Backend/img/category/' . $category->image);
        }

        Image::make($image)->save($location);
        $category->image = $img;
        }

        $category->save();
        return redirect()->route('category.manage');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);
        if(!is_null($category)){
            // Delete the category image
            if (File::exists('Backend/img/category/' . $category->image)) {
                File::delete('Backend/img/category/' . $category->image);
            }
            $category->delete();
        }
        return redirect()->route('category.manage');
        
    }
}