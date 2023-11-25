<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Admincontroller;
use App\Http\Controllers\Backend\Brandcontroller;
use App\Http\Controllers\Frontend\homeController;
use App\Http\Controllers\Backend\Districontroller;
use App\Http\Controllers\Backend\Slidercontroller;
use App\Http\Controllers\Backend\Productcontroller;
use App\Http\Controllers\Backend\Categorycontroller;
use App\Http\Controllers\Backend\Divisioncontroller;

/*
|--------------------------------------------------------------------------
| Frontend Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[homeController::class,'index']);
// Route::get('/home',[homeController::class,'create']);




/*
|--------------------------------------------------------------------------
| Backend Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::group(['prefix'=>'admin'],function(){
    Route::get('/dashbord',[Admincontroller::class, 'index'])->name('dashbord');


    //create bands route 

    Route::group(['prefix'=>'brand'],function(){
        Route::get('/manage',[Brandcontroller::class, 'index'])->name('brand.manage');
        Route::get('/create',[Brandcontroller::class, 'create'])->name('brand.create');
        Route::post('/store',[Brandcontroller::class, 'store'])->name('brand.store');
        Route::get('/edit/{id}',[Brandcontroller::class, 'edit'])->name('brand.edit');
        Route::post('/update/{id}',[Brandcontroller::class, 'update'])->name('brand.update');
        Route::get('/delete/{id}',[Brandcontroller::class, 'destroy'])->name('brand.delete');
    });

    //create category route
    
    Route::group(['prefix'=>'category'],function(){
        Route::get('/manage',[Categorycontroller::class, 'index'])->name('category.manage');
        Route::get('create',[Categorycontroller::class, 'create'])->name('category.create');
        Route::post('/store',[Categorycontroller::class, 'store'])->name('category.store');
        Route::get('/edit/{id}',[Categorycontroller::class, 'edit'])->name('category.edit');
        Route::post('/update/{id}',[Categorycontroller::class, 'update'])->name('category.update');
        Route::get('/delete/{id}',[Categorycontroller::class, 'destroy'])->name('category.delete');
        
    });

    
    //create products route
    
    Route::group(['prefix'=>'product'],function(){
        Route::get('/manage',[Productcontroller::class, 'index'])->name('product.manage');
        Route::get('create',[Productcontroller::class, 'create'])->name('product.create');
        Route::post('/store',[Productcontroller::class, 'store'])->name('product.store');
        Route::get('/edit/{id}',[Productcontroller::class, 'edit'])->name('product.edit');
        Route::post('/update/{id}',[Productcontroller::class, 'update'])->name('product.update');
        Route::get('/delete/{id}',[Productcontroller::class, 'destroy'])->name('product.delete');
        
    });

      //create Division route 

      Route::group(['prefix'=>'division'],function(){
        Route::get('/manage',[Divisioncontroller::class, 'index'])->name('division.manage');
        Route::get('/create',[Divisioncontroller::class, 'create'])->name('division.create');
        Route::post('/store',[Divisioncontroller::class, 'store'])->name('division.store');
        Route::get('/edit/{id}',[Divisioncontroller::class, 'edit'])->name('division.edit');
        Route::post('/update/{id}',[Divisioncontroller::class, 'update'])->name('division.update');
        Route::get('/delete/{id}',[Divisioncontroller::class, 'destroy'])->name('division.delete');
    });

      //create District route 

      Route::group(['prefix'=>'district'],function(){
        Route::get('/manage',[Districontroller::class, 'index'])->name('district.manage');
        Route::get('/create',[Districontroller::class, 'create'])->name('district.create');
        Route::post('/store',[Districontroller::class, 'store'])->name('district.store');
        Route::get('/edit/{id}',[Districontroller::class, 'edit'])->name('district.edit');
        Route::post('/update/{id}',[Districontroller::class, 'update'])->name('district.update');
        Route::get('/delete/{id}',[Districontroller::class, 'destroy'])->name('district.delete');
    });

      //create slider route 

      Route::group(['prefix'=>'slider'],function(){
        Route::get('/manage',[Slidercontroller::class, 'index'])->name('slider.manage');
        Route::get('/create',[Slidercontroller::class, 'create'])->name('slider.create');
        Route::post('/store',[Slidercontroller::class, 'store'])->name('slider.store');
        Route::get('/edit/{id}',[Slidercontroller::class, 'edit'])->name('slider.edit');
        Route::post('/update/{id}',[Slidercontroller::class, 'update'])->name('slider.update');
        Route::get('/delete/{id}',[Slidercontroller::class, 'destroy'])->name('slider.delete');
    });
}
);