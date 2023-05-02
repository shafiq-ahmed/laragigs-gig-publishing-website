<?php

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

Route::get('/listings', function () {
    return view('listings',[
        'headings'=>'Latest listings',
        'listings'=>Listings::all()
        ]
    );
});

Route::get('/listings/{id}',function($id){
    return view('listing',[
        'singularListing'=> Listings::find($id),
        'headings'=>'Latest listings'
    ]);
});

Route::get('/hello/{name}',function($name){
    ddd($name);
    return response('<h1>Hello World, I am '.$name.'</h1>')
    ->header('foo','bar');
});
