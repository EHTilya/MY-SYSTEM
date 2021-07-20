@extends('customer/master')
@section('content')
<div class="custom-product2">
 <div class="trending-wrapper">
    <h3>Trending Design</h3>
    @foreach ($dress as $item)
    <div class="trending-item">
        <a href="/detail/{{$item->id}}">
        <img  class="trending-image" src="{{$item->gallery}}" alt="Chania">
        </a>
        <div class="">
          <h3>{{$item->name}}</h3>
          <p>{{$item->category_id}}</p>
          <p>{{$item->day}}</p>
        </div>
      </div>
      
    @endforeach
  </div>
</div>
<div>
  <section>
   <article>
     <h1>London</h1>
     <p>London is the capital city of England. It is the most populous city in the  United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
     <p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>
   </article>

   <article>
     <h1>London</h1>
     <p>London is the capital city of England. It is the most populous city in the  United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
     <p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>
   </article>
 </section>
 

@endsection
