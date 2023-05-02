@extends('layout')

@section('content')
@include('partials._hero')
@include('partials._search')
<div class="bg-gray-50 border border-gray-200 rounded p-6">
    


@if(isset($listings))
    @foreach ($listings as $listing)
    <x-listing-card :listing="$listing"/>
    <br>
    @endforeach
@endif
</div>
@endsection('content')