<?php

namespace App\Http\Controllers\Backend;

use File;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

use App\Models\Backend\Brand;
use App\Models\Backend\Product;
use App\Models\Backend\Category;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class Productcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::orderBy('title','asc')->get();
        $brands = Brand::orderBy('name','asc')->get();
        $categories = Category::orderBy('name','asc')->get();
        return view('backend.pages.product.manage',compact('products','brands','categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brands = Brand::orderBy('name','asc')->get();
        // $categories = Category::orderBy('name','asc')->get();
        return view('backend.pages.product.create',compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->title  = $request->title;
        $product->slug  = Str::slug($request->title);
        $product->short_describtion  = $request->short_describtion;
        $product->describtion  = $request->description;
        $product->tags  = $request->tags;
        $product->quantity  = $request->quantity;
        $product->regular_price  = $request->regular_price;
        $product->offer_price  = $request->offer_price;
        $product->sku_code  = $request->sku_code;
        $product->category_id  = $request->category_id;
        $product->brand_id  = $request->brand_id;
        $product->product_type  = $request->product_type;
    
      
        $product->featured_item  = $request->featured_item;
        $product->status  = $request->status;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $img = rand() . '.' . $image->getClientOriginalExtension();
            $location = public_path('Backend/img/product/' . $img);
            Image::make($image)->save($location);
            $product->image = $img;  
        }

        $product->save();
        return redirect()->route('product.manage');
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
        $brands = Brand::orderBy('name','asc')->get();
        $product = Product::find($id);
        if(!is_null($product)){
            return view('backend.pages.product.edit',compact('product','brands'));
        }
        else{
            return redirect()->route('product.manage');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);
        $product->title  = $request->title;
        $product->slug  = Str::slug($request->title);
        $product->short_describtion  = $request->short_describtion;
        $product->describtion  = $request->description;
        $product->tags  = $request->tags;
        $product->quantity  = $request->quantity;
        $product->regular_price  = $request->regular_price;
        $product->offer_price  = $request->offer_price;
        $product->sku_code  = $request->sku_code;
        $product->category_id  = $request->category_id;
        $product->brand_id  = $request->brand_id;
        $product->product_type  = $request->product_type;
    
      
        $product->featured_item  = $request->featured_item;
        $product->status  = $request->status;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $img = rand() . '.' . $image->getClientOriginalExtension();
            $location = public_path('Backend/img/product/' . $img);

             // Delete the old image file if it exists
            if (File::exists('Backend/img/product/' . $product->image)) {
                File::delete('Backend/img/product/' . $product->image);
            }
            
            Image::make($image)->save($location);
            $product->image = $img;  
        }

        $product->save();
        return redirect()->route('product.manage');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = product::find($id);
        if(!is_null($product)){
            // Delete the product image
            if (File::exists('Backend/img/product/' . $product->image)) {
                File::delete('Backend/img/product/' . $product->image);
            }
            $product->delete();
        }
        return redirect()->route('product.manage');
    }
}