<?php

namespace App\Http\Controllers\Frontend;

use File;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Backend\Slider;
use App\Models\Backend\Product;
use App\Http\Controllers\Controller;
use App\Models\Backend\Category;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::orderBy('id','asc')->get();
        $hotProducts =Product::orderBy('id','desc')->paginate(8);
        $featuredProducts =Product::orderBy('id','desc')->where('featured_item',1)->get();
        // dd($sliders);
        return view('frontend.layout.master',compact('sliders','hotProducts','featuredProducts'));
    }



    // all products 
    public function allproducts()
    {
        $sliders = Slider::orderBy('id','asc')->get();

        $allproducts = Product::orderBy('id','desc')->paginate(10);
        $hotProducts =Product::orderBy('id','desc')->get();
        $featuredProducts =Product::orderBy('id','desc')->where('featured_item',1)->get();
        // dd($sliders);
        return view('frontend.pages.product.allproductsdetails',compact('sliders','allproducts','hotProducts','featuredProducts'));
    }
 
    // productshow 
    public function productshow($slug)
    {
        $sliders = Slider::orderBy('id','asc')->get();
        $hotProducts =Product::orderBy('id','desc')->get();
        $featuredProducts =Product::orderBy('id','desc')->where('featured_item',1)->get();
        $value = Product::where('slug',$slug)->first();


        if(!is_null($value))
        {
            return view('frontend.pages.product.productdetails',compact('sliders','hotProducts','value','featuredProducts'));
        }
        else{
            return back();
        }
       
    }
 
    // productcategory 
    public function productcategory()
    {
       
        return view('frontend.pages.product.allproductsdetails');
       
       
    }
 
    // categoryshow 
    public function categoryshow($slug)
    {
        $category = Category::where('slug',$slug)->first();
        $sliders = Slider::orderBy('id','asc')->get();
        $hotProducts =Product::orderBy('id','desc')->get();
        $featuredProducts =Product::orderBy('id','desc')->where('featured_item',1)->get();
        
       if(!is_null($category)){
        
           return view('frontend.pages.product.category',compact('category','sliders','hotProducts','featuredProducts'));
       }
       else{
        return redirect()->route('home');
       }
       
    }
 
  






    
    public function create()
    {
        return view('frontend.maintemp');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}