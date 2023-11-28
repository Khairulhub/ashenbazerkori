<?php

namespace App\Http\Controllers\Frontend;

use File;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Backend\Slider;
use App\Http\Controllers\Controller;
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
        // dd($sliders);
        return view('frontend.layout.master',compact('sliders'));
    }
    // public function login()
    // {
    //     // $sliders = Slider::orderBy('id','asc')->get();
    //     // // dd($sliders);
    //     // return view('frontend.pages.login');
        
    // }

    // public function login(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');
    
    //     if (Auth::attempt($credentials)) {
    //         // Authentication passed, redirect to the dashboard
    //         return redirect()->route('dashbord');
    //     }
    
    //     // Authentication failed, redirect back with errors
    //     return redirect()->route('login')->with('error', 'Invalid credentials');
    // }
    
    // public function registration()
    // {
    //     // $sliders = Slider::orderBy('id','asc')->get();
    //     // // dd($sliders);
    //     return view('frontend.pages.registration');
    // }

  






    
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