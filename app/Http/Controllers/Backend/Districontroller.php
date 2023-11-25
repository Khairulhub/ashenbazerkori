<?php

namespace App\Http\Controllers\Backend;

use File;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

use App\Models\Backend\District;
use App\Models\Backend\Division;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use App\Models\Backend\District as BackendDistrict;


class Districontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $districts = District::orderBy('name','asc')->get();
        return view('backend.pages.district.manage',compact('districts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $divisions = Division::orderBy('priority','asc')->get();
        return view('backend.pages.district.create',compact('divisions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $district = new District();
        $district->name  = $request->name;
        $district->divisions_id  = $request->divisions_id;



        $district->save();
        return redirect()->route('district.manage');
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
        $divisions = Division::orderBy('priority','asc')->get();
        $district = District::find($id);
        if(!is_null($district)){
            return view('backend.pages.district.edit',compact('district','divisions'));
        }
        else{
            return redirect()->route('district.manage');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $district = District::find($id);
        
        

        
        $district->name  = $request->name;
        $district->divisions_id  = $request->divisions_id;
       

        $district->save();
        return redirect()->route('district.manage');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $district = District::find($id);
        if(!is_null($district)){
            $district->delete();
        }
        return redirect()->route('district.manage');
    }
}