@php 
$count=0;
while($count<3)
{

@endphp
<h1><?php echo $headings;?></h1>
@php
$count++;
}
@endphp



@endphp
@if( isset($listing))
    @foreach ($listing as $list)
    <h1>{{$list['title']}}</h1>
    <p>{{$list['description']}}</p>
    @endforeach
@endif

@if(isset($singularListing))
    <h1>{{$singularListing['id']}}</h1>
    <h1>{{$singularListing['title']}}</h1>
    <p>{{$singularListing['description']}}</p>


@endif
<?php
    
/*@endphp@if(count($listing)==0)
<p>No listings found</p>
@endif
*/
?>