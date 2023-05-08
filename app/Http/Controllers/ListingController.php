<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listings;

class ListingController extends Controller
{
    //get and show all listings
    public function index(){
        return view('listings.index',[
            'listings'=>Listings::all()
        ]);
    }

    //show single listing
    public function show(Listings $listing){
        return view('listings.show',[
            'listing'=>$listing
        ]);
    }
}
