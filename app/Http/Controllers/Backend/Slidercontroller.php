<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\Backend\Slider;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use File;


class Slidercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::orderBy('id','asc')->get();
        return view('backend.pages.slider.manage',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $slider = new Slider();
        
        $slider-> title = $request->title;
        $slider-> sub_title = $request->sub_title;
       
        $slider-> description = $request->description;
        $slider-> button_text = $request->button_text;
        $slider-> button_url = $request->button_url;

        if($request->hasFile('image'))
        {
            $image =$request->file('image');
            $img = rand().'.'.$image->getClientOriginalExtension();
            $location =public_path('Backend/img/slider/'.$img);
            Image::make($image)->save($location);
            $slider->image = $img;
            
        }
        $slider->save();
        return redirect()->route('slider.manage');
        
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
        $slider = Slider::find($id);
        if(!is_null($slider)){
            return view('backend.pages.slider.edit',compact('slider'));
        }
        else{
            return redirect()->route('slider.manage');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $slider = Slider::find($id);
        if(is_null($slider)){
            return redirect()->route('slider.manage');
        }
        $slider->title  = $request->title;
        $slider->sub_title  = $request->sub_title;
        $slider->description  = $request->description;
        $slider->button_text  = $request->button_text;
        $slider->button_url  = $request->button_url;
      
      

        if (!is_null($request->hasFile('image'))) {
            $image = $request->file('image');
        $img = rand() . '.' . $image->getClientOriginalExtension();
        $location = public_path('Backend/img/slider/' . $img);

        // Delete the old image file if it exists
        if (File::exists('Backend/img/slider/' . $slider->image)) {
            File::delete('Backend/img/slider/' . $slider->image);
        }

        Image::make($image)->save($location);
        $slider->image = $img;
        }

        $slider->save();

        return redirect()->route('slider.manage');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider = Slider::find($id);
        if(!is_null($slider)){
            // Delete the slider image
            if (File::exists('Backend/img/slider/' . $slider->image)) {
                File::delete('Backend/img/slider/' . $slider->image);
            }
            $slider->delete();
        }
        return redirect()->route('slider.manage');
    }
}