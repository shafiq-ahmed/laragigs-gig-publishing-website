<x-layout>
    @include('partials._hero')
    @include('partials._search')

        


    @if(isset($listings))
        @foreach ($listings as $listing)
        <x-listing-card :listing="$listing"/>
        <br>
        @endforeach
        <div class="mt-6 p-4">
            {{$listings->links()}}
        </div>
    @endif

</x-layout>

