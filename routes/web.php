<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Admincontroller;
use App\Http\Controllers\Backend\Brandcontroller;
use App\Http\Controllers\Backend\Categorycontroller;

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
}
);