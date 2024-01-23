<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WorkController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/',[PageController::class,'main'])->name('furniture.main');
Route::prefix('/furniture')->name('furniture.')->group(function(){
    Route::get('/about',[PageController::class,'about'])->name('about');
    Route::get('/design',[PageController::class,'design'])->name('design');
    Route::get('/shop',[PageController::class,'shop'])->name('shop');
    Route::get('/contact',[PageController::class,'contact'])->name('contact');


});
Route::prefix('/admin')->name('admin.')->group(function(){
    Route::get('/dashboard',function(){return view('admin.layouts.main');})->name('dashboard');
    Route::resource('/work',WorkController::class);
    Route::resource('/about',AboutController::class);
    Route::resource('/contact',ContactController::class)->only('index','show','destroy','store');
});
