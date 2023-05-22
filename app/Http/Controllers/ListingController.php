<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listings;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    //get and show all listings
    public function index()
    {
        //dd(request('tag'));
        return view('listings.index',[
            'listings'=>Listings::latest()->filter(request(['tag','search']))->get()
        ]);
    }

    //show single listing
    public function show(Listings $listing)
    {
        return view('listings.show',[
            'listing'=>$listing
        ]);
    }

    //show create form
    public function create()
    {
        
        return view('listings.create');
    }

    //store data from form
    public function store(Request $request)
    {
        $formFields= $request->validate([
            'company'=>['required',Rule::unique('listings','company') ],
            'title'=>'required',
            'location'=>'required',
            'email'=>['required','email'],
            'website'=>'required',
            'tags'=>'required'
        ]);
        //return view('listings.create');
        return redirect('/listings');
    }
}
