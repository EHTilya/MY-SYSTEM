
@extends('customer/master')
@section('content')
  <div class="custom-product">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
      
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            @foreach ($products as $item)
            <div class="item {{$item['id']==1?'active':''}}">
                <a href="detail/{{$item['id']}}">
        <img  class="slider-img" src="{{$item['gallery']}}" alt="Chania">
                </a>
                <div class="carousel-caption slider-text">
                  <h3>{{$item['name']}}</h3>
                  <p>{{$item['description']}}</p>
                </div>
              </div>
            @endforeach
        </div>
      
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
  </div>
        

  <section>
    <article>
      <h1>Vision</h1>
      <p>“Tanzania with sufficient and competent artisans.”</p>
    </article>

    <article>
      <h1>Mission</h1>
      <p>To ensure quality vocational skills by providing, regulating, coordinating, promoting, and financing vocational education and training for national socio- economic development.”</p>
    </article>
  </section>
  <div class="center2">
    <div class="row">
    
      <div class="container">
              <div class="col-12 col-sm-6 col-md-4 image-grid-item">
                  <div style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWEe2a15QlXOrWLQCtBiQdc45m452N_UIlcg&usqp=CAU');" class="image-grid-cover2">
                      <a  class="image-grid-clickbox2"></a>
                      <a href="/men" class="cover-wrapper2">Men</a>
                  </div>
              </div>
  
              <div class="col-12 col-sm-6 col-md-4 image-grid-item">
                <div style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCoYjLIQ4zYiEwddZDN9QDO9yVHdF1zNDV9NxjZmEBHLDsEE4nM3XX5TLLHqXmOuDDwaw&usqp=CAU');" class="image-grid-cover2">
                    <a  class="image-grid-clickbox2"></a>
                    <a href="/women" class="cover-wrapper2">Women</a>
                </div>
            </div>
              
          </div>
  </div>
  </div>
  
  
      
    
  
  
  
  
  @endsection
  