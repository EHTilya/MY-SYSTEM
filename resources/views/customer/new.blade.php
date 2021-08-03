
@extends('customer/master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- Latest compiled and minified CSS -->
<!-- https://xstore.8theme.com/demos/hosting/-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,700&subset=latin-ext" rel="stylesheet">
<link rel="stylesheet" href="css/product.css">
<link href='https://fonts.googleapis.com/css?family=Exo:400,900' rel='stylesheet' type='text/css'>

</head>

<body>
  
  <div class="custom-product">
    @if (session('login'))
    <p style="text-align: center;" class="alert alert-success">
      {{ session('login')}}
    </p>     
    @endif
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
                  <p>Siku: {{$item['day']}}</p>

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
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
            
            <div class="row" id="slider-text">
              <div class="col-md-6" >
                <h2 class="text-center">Online Tailoring Management System</h2>
              </div>
            </div>
                          <div class="row">
                <div class="col-md-4">
                  <div class="thumbnail">
                    <a href="">
                      <img src="/images/freedelivery.jpg" alt="Lights" style="width:100%">
                      <div class="caption">
                        <p>Tunamfikishia Nguo Mteja wetu Eneo lolote alipo</p>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="thumbnail">
                    <a href="">
                      <img src="/images/lowcost.png" alt="Nature" style="width:100%">
                      <div class="caption">
                        <p>Huduma zetu ni Nafuu pamoja na Ushonaji bora wa Nguo</p>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="thumbnail">
                    <a href="">
                      <img src="/images/fabrics.png" alt="Fjords" style="width:100%">
                      <div class="caption">
                        <p>Aina mbalimbali za Vitambaa</p>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            
  
          </div>
  
        </div>
      </div>
    </article>
    
      
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
  <section>
    <article>
      <h1>Mission</h1>
      <p>To ensure quality vocational skills by providing, regulating, coordinating, promoting, and financing vocational education and training for national socio- economic development.”</p>
    </article>
  </section>
  
<!--Item slider text-->
<div class="container">
  <div class="row" id="slider-text">
    <div class="col-md-6" >
      <h2 class="text-center">Mitindo ya Kisasa zaidi</h2>
    </div>
  </div>
</div>

<!-- Item slider-->
<div class="container-fluid">

  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="carousel carousel-showmanymoveone slide" id="itemslider">
        <div class="carousel-inner">

          <div class="item active">6
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="detail/6"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQf6IY339vISMLroMDn7lQUFHsthBU47_U7ZQ&usqp=CAU" class="img-responsive center-block"></a>
              <h4 class="text-center">Suruali</h4>
              <h5 class="text-center">Tsh 10,000 </h5>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="detail/21"><img src="images/women trouser3_.jpg" class="img-responsive center-block"></a>
              <h4 class="text-center">Suruali</h4>
              <h5 class="text-center">Tsh 18,000</h5>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="detail/20"><img src="images/women trouser2.jpg" class="img-responsive center-block"></a>
              <span class="badge">10%</span>
              <h4 class="text-center">Suruali</h4>
              <h5 class="text-center">Tsh 22,000</h5>
              <h6 class="text-center">Tsh 12,000</h6>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="detail/15"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSv3CwD2uW7ROewKOiVhGZE4lOc3dOMDWhs0Q&usqp=CAU" class="img-responsive center-block"></a>
              <h4 class="text-center">Shati Mikono mifupi</h4>
              <h5 class="text-center">Tsh 12,000</h5>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="detail/11"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTFV0l1uscfVRNuugkGQch7m5eGMnmU31JOwg&usqp=CAU" class="img-responsive center-block"></a>
              <h4 class="text-center">Sketi</h4>
              <h5 class="text-center">Tsh 13,000</h5>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="detail/38"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT_yRTPZTVH2ZK9XnaVnc4WWBGhUZSCe33icQ&usqp=CAU" class="img-responsive center-block"></a>
              <h4 class="text-center">Kaptula</h4>
              <h5 class="text-center">Tsh 100,00 </h5>
            </div>
          </div>

        </div>

        <div id="slider-control">
        <a class="left carousel-control" href="#itemslider" data-slide="prev"><img src="https://cdn0.iconfinder.com/data/icons/website-kit-2/512/icon_402-512.png" alt="Left" class="img-responsive"></a>
        <a class="right carousel-control" href="#itemslider" data-slide="next"><img src="http://pixsector.com/cache/81183b13/avcc910c4ee5888b858fe.png" alt="Right" class="img-responsive"></a>
      </div>
      </div>
    </div>
  </div>
</div>
</article>
</section>
<script>
	$(document).ready(function(){

$('#itemslider').carousel({ interval: 3000 });

$('.carousel-showmanymoveone .item').each(function(){
var itemToClone = $(this);

for (var i=1;i<6;i++) {
itemToClone = itemToClone.next();

if (!itemToClone.length) {
itemToClone = $(this).siblings(':first');
}

itemToClone.children(':first-child').clone()
.addClass("cloneditem-"+(i))
.appendTo($(this));
}
});
});

</script>
<!-- Item slider end-->
<br/><br/>

</body>
</html>
    
  
  
  
  
  @endsection
  
  