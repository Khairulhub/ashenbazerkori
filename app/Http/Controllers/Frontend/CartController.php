<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Backend\Brand;
use App\Models\Frontend\Cart;
use App\Models\Backend\Product;
use App\Models\Backend\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.pages.product.cart');
    }

  

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'product_id'=>'required',
        ],
        [
            'product_id.required'=>'Please choose a product',
        ]);

        if(Auth::check()){
            $cart = Cart::where('user_id',Auth::id())
                        ->where('product_id',$request->product_id)
                        ->where('order_id',NULL)
                        ->first();
        }else{
            $cart = Cart::where('ip_address',request()->ip())
                        ->where('product_id',$request->product_id)
                        ->where('order_id',NULL)
                        ->first();
        }

        if(!is_null($cart)){
            $cart->increment('product_quantity');
        }else{
            $cart = new Cart();
            if(Auth::check()){
                $cart->user_id = Auth::id();
            }
            $cart->ip_address = request()->ip();
            $cart->product_id = $request->product_id;
            $cart->product_quantity = $request->product_quantity;
            $cart->save();
        }
        return back();

        
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
        $cart = Cart::find($id);
        
        if(!is_null($cart)){
            $cart->delete();
        }
        else{
            return back();
        }
        return back();
        
    }
}