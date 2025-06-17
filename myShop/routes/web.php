<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\ContectController;
use App\Http\Controllers\ServicsController;
use App\Http\Controllers\PriceController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[DashboardController::class,'index'])->name('dashboard');
Route::get('story',[StoryController::class,'index'])->name('story');
Route::get('contect',[ContectController::class,'index'])->name('contect');
Route::get('service',[ServicsController::class,'index'])->name('service');
Route::get('price',[PriceController::class,'index'])->name('price');
Route::post('contactform',[ContectController::class,'storeContact'])->name('contactform');
