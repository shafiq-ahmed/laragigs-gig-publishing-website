@extends('layout')

@section('content')
    

@if(isset($singularListing))
    
    <h1>{{$singularListing['id']}}</h1>
    <h2>{{$singularListing['title']}}</h2>
    <p>{{$singularListing['description']}}</p>
        
    
@else
<h1>There are no listings to show</h1>
@endif
@endsection('content')