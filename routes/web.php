<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\Listings;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//show all listings
Route::get('/listings', [ListingController::class, 'index']);
//show listings form
Route::get('/listings/create',[ListingController::class,'create'])->middleware('auth');
//store listings data
Route::post('/listings', [ListingController::class,'store'])->middleware('auth');
//show manage listings page
Route::get('/listings/manage',[ListingController::class,'manage']);
//show single listing
Route::get('/listings/{listing}',[ListingController::class, 'show']);



//show edit form
Route::get('/listings/{listing}/edit', [ListingController::class,'edit'])->middleware('auth');
//update listing
Route::put('listings/{listing}',[ListingController::class,'update'])->middleware('auth');
//Delete listing
Route::delete('/listings/{listing}',[ListingController::class,'destroy'])->middleware('auth');
//->middleware('auth');

//show register form
Route::get('/register',[UserController::class,'create'])->middleware('guest');
//create new user
Route::post('/users/create',[UserController::class,'store']);

//Log user out
Route::post('/logout',[UserController::class,'logout'])->middleware('auth');

//Show login form
Route::get('/login',[UserController::class,'login'])->name('login')->middleware('guest');
//Login user
Route::post('/users/authenticate',[UserController::class,'authenticate']);

Route::get('/hello/{name}',function($name){
    ddd($name);
    return response('<h1>Hello World, I am '.$name.'</h1>')
    ->header('foo','bar');
});
