<x-layout>
    @include('partials._hero')
    @include('partials._search')

        


    @if(isset($listings))
        @foreach ($listings as $listing)
        <x-listing-card :listing="$listing"/>
        <br>
        @endforeach
    @endif

</x-layout>

