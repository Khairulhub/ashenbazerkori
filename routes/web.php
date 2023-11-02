<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Admincontroller;
use App\Http\Controllers\Backend\Brandcontroller;

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
}
);