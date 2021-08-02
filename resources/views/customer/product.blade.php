
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
<link rel="stylesheet" href="css/kitambaa.css">
<link href='https://fonts.googleapis.com/css?family=Exo:400,900' rel='stylesheet' type='text/css'>

</head>

<body>
  
  <div class="custom-product">
    @if (session('login'))
    <p style="text-align: center;" class="alert alert-success">
      {{ session('login')}}
    </p>     
    @endif
    
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

  
  <div class="jumbotron text-center">
    <h1>Company</h1> 
    <p>We specialize in blablabla</p> 
    
  </div>
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
        
  
  <!-- Container (About Section) -->
  <div id="about" class="container-fluid">
    <div class="row">
      <div class="col-sm-8">
        <h2>About Company Page</h2><br>
        <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
      <div class="col-sm-4">
      </div>
    </div>
  </div>
  
  <div class="container-fluid bg-grey">
    <div class="row">
      <div class="col-sm-4">
      </div>
      <div class="col-sm-8">
        <h2>Our Values</h2><br>
        <h4><strong>MISSION:</strong> Our mission lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
        <p><strong>VISION:</strong> Our vision Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
    </div>
  </div>
  
  <!-- Container (Services Section) -->
  <div id="services" class="container-fluid text-center">
    <h2>What our Unique</h2>
    <br>
    <div class="row slideanim">
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-off logo-small"></span>
        <h4>POWER</h4>
        <p>Lorem ipsum dolor sit amet..</p>
      </div>
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-heart logo-small"></span>
        <h4>LOVE</h4>
        <p>Lorem ipsum dolor sit amet..</p>
      </div>
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-lock logo-small"></span>
        <h4>JOB DONE</h4>
        <p>Lorem ipsum dolor sit amet..</p>
      </div>
    </div>
    <br><br>
    <div class="row slideanim">
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-leaf logo-small"></span>
        <h4>GREEN</h4>
        <p>Lorem ipsum dolor sit amet..</p>
      </div>
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-certificate logo-small"></span>
        <h4>CERTIFIED</h4>
        <p>Lorem ipsum dolor sit amet..</p>
      </div>
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-wrench logo-small"></span>
        <h4 style="color:#303030;">HARD WORK</h4>
        <p>Lorem ipsum dolor sit amet..</p>
      </div>
    </div>
  </div>
  
  
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
  <br>
    
  
  <!-- Container (Pricing Section) -->
  
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
  <!-- Container (Contact Section) -->
  <div id="contact" class="container-fluid bg-grey">
    <h2 class="text-center">CONTACT</h2>
    <div class="row">
      <div class="col-sm-5">
        <p>Contact us and we'll get back to you within 24 hours.</p>
        <p><span class="glyphicon glyphicon-map-marker"></span> Chicago, US</p>
        <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
        <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
      </div>
      <div class="col-sm-7 slideanim">
        <div class="row">
          <div class="col-sm-6 form-group">
            <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
          </div>
        </div>
        <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
        <div class="row">
          <div class="col-sm-12 form-group">
            <button class="btn btn-default pull-right" type="submit">Send</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Image of location/map -->
  
  {{View::make('customer/footer')}}

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
  
  <script>
  $(document).ready(function(){
    // Add smooth scrolling to all links in navbar + footer link
    $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();
  
        // Store hash
        var hash = this.hash;
  
        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 900, function(){
     
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
    });
    
    $(window).scroll(function() {
      $(".slideanim").each(function(){
        var pos = $(this).offset().top;
  
        var winTop = $(window).scrollTop();
          if (pos < winTop + 600) {
            $(this).addClass("slide");
          }
      });
    });
  })
  </script>
  
  </body>
  </html>
  
  
  @endsection
  
  