@extends('layout')

@section('content')
<div class="bg-gray-50 border border-gray-200 rounded p-6">
    


@if(isset($listings))
    @foreach ($listings as $listing)
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src="images/acme.png"
            alt=""
        />
        <div>
            <h3 class="text-2xl">
                <a href="show.html">{{$listing['title']}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">Acme Corp</div>
            <ul class="flex">
                <li
                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                >
                    <a href="#">Laravel</a>
                </li>
                <li
                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                >
                    <a href="#">API</a>
                </li>
                <li
                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                >
                    <a href="#">Backend</a>
                </li>
                <li
                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                >
                    <a href="#">Vue</a>
                </li>
            </ul>
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> Boston,
                MA
            </div>
        </div>
    </div>
    @endforeach
@endif
</div>
@endsection('content')