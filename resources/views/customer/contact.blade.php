@extends('customer/master')
@section('content')
   
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="css/contact.css">
</head>

<body>
  <html lang="en">
    <head>
        <meta charset="utf-8">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">  


    </head>


<div class="video">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTROOa0s27epxjM21I8WcuiB85o5-S2x2Hglw&usqp=CAU" alt="logo"/>
            <div class="overlay">
                <div class="container">
                    <h2>contact me</h2>
                    <p class="h2-bottom">Lorem Ipsum Is Simply Dummy Text Of The Printing And Typesetting.</p>
                    <div class="social">
                        <i class="fa fa-facebook"></i>
                        <i class="fa fa-twitter"></i>
                        <i class="fa fa-instagram"></i>
                        <i class="fa fa-linkedin"></i>
                        <i class="fa fa-pinterest"></i>
                    </div>
                    <form action="/feedback" method="POST">
                        @csrf
                        <input type="text" name="name" placeholder=" your name">
                        <input type="email" name="email" placeholder="your email">
                        <input type="tel" name="phone" placeholder="your phone">
                        <input type="text" name="location" placeholder="your location">
                        <input type="text" name="subject" placeholder="subject">
                        <textarea name="comment" placeholder="your message"></textarea>
                        <button><div>send
                            <i class="fa fa-arrow-right"></i></div>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
{{View::make('customer/footer')}}

</body>
</html>
@endsection





















