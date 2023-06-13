<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listings;
use Illuminate\Contracts\Session\Session;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    //get and show all listings
    public function index()
    {
        //dd(request('tag'));
        return view('listings.index',[
            'listings'=>Listings::latest()->filter(request(['tag','search']))->paginate(3)
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
            'description'=>'required',
            'tags'=>'required'
        ]);
        //return view('listings.create');
        Listings::create($formFields);
        return redirect('/listings')->with('message','Listing created successfully!');
    }




    //Practice

    public function create2()
    {
        return view('listings.create2');
    }

    public function store2(Request $request)
    {
        $formFields=$request->validate([
            'title'=>'required',
            'email'=>['required','email',Rule::unique('listings','email')],
            'company'=>'required',
            'website'=>'required',
            'tags'=>'required',
            'description'=>'required',
            'location'=>'required',
        ]);

        Listings::create($formFields);

        return redirect('/listings');
        
    }
}
