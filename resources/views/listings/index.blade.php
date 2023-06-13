<x-layout>
    @include('partials._hero')
    @include('partials._search')

        


    @if(isset($listings))
        @foreach ($listings as $listing)
        <x-listing-card :listing="$listing"/>
        <br>
        @endforeach
    @endif
    <div class="mt-6 p-4">
        {{$listings->links()}}
    </div>
</x-layout>

