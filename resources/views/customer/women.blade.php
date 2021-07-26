@extends('customer/master')
@section('content')
<div class="custom-product2">
 <div class="trending-wrapper">
    <h3>Trending Design</h3>
    @foreach ($women as $item)
    <div class="trending-item">
        <a href="/detail/{{$item->id}}">
        <img  class="trending-image" src="{{$item->gallery}}" alt="Chania">
        </a>
        <div class="">
          <h3>{{$item->name}}</h3>
          <h3>{{$item->category_id}}</h3>

        </div>
      </div>
      
    @endforeach
  </div>
</div>
<div>
  

 

@endsection
