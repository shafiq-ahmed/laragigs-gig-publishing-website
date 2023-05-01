@if(isset($listings))
    @foreach ($listings as $listing)
        <a href="/{{$listing['id']}}"><?php echo $listing['title']?></a>
        <br>
    @endforeach
@endif