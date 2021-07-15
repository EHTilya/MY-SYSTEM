@extends('customer/master')
@section('content')
   
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<style>
.video {
    min-width: 100%;
    max-height: 720px;
    overflow: hidden;    position: relative;
    text-align: center;

}
.video img {
    min-width: 100%;
    min-height: 100%;

}
.video .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    color: #fff;
    padding-top: 80px;
     background-color: rgba(0, 32, 60, 0.44);
}
.video .overlay h2 {
  text-transform: uppercase;
  font-size: 35px
}
.video .overlay p {
    color: #cccccc !important;
}
.video .overlay .social {
    margin-top: 40px;
    
}
.video .overlay .social i {
    width: 55px;
    height: 55px;
    border-radius: 50%;
    border: 1px solid #cccccc;
    line-height: 55px;
    font-size: 25px;
    transition: .5s ease;
    margin-right: 5px;
}
.video .overlay .social i:last-child {
    margin-right: 0;
}
.video .overlay .social i:hover {
    border-color: #0b8ffe;
    cursor: pointer;
    box-shadow: 0 0 20px #0b8ffe;
    transform: scale(1.2)
}
.video .overlay form {
    width: 80%;
    margin: 60px auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    
}
.video .overlay form input {
    height: 40px;
    background-color: transparent;
    padding: 5px 0px;
    border: 0;
    border-bottom: 1px solid #ccc;
    margin-bottom: 30px;
  color: #fff;
}
.video .overlay form textarea {
    background-color: transparent;
    padding: 5px 0px;
    border: 0;
    border-bottom: 1px solid #ccc;
    margin-bottom: 30px;
    height: 40px;
    width: 100%;
  color: #fff;
}
.video .overlay form input:focus,.video .overlay form textarea:focus {
    border-bottom-color: #0b8ffe;
    box-shadow: 0px 0px 20px rgba(11, 143, 254, 0.42);
}
.video .overlay form input::-webkit-input-placeholder,
.video .overlay form textarea::-webkit-input-placeholder {
    color: #e8e8e8;
    text-transform: capitalize;
}
.video .overlay form [name="name"],
.video .overlay form [name="email"],
.video .overlay form [name="phone"] {
    width: 31%;
}
.video .overlay form [name="website"],
.video .overlay form [name="subject"] {
    width: 48%;
    margin-bottom: 80px;
}
.video .overlay form button {
    background-color: transparent;
    padding: 10px 0;
    width: 100%;
    border: 1px solid #ccc;
    color: #fff;
    text-transform: uppercase;
    transition: 1s ease;
    overflow: hidden;
}
.video .overlay form button:hover {
    color: #0b8ffe;
    border-color: #0b8ffe;
    box-shadow: 0 0 20px #0b8ffe;
  cursor: pointer
}
.video .overlay form button:hover div {
   /* transform: rotate(-422deg) scale(1.5, 1.5) translate(50%, 50px);*/
    transform: scale(2) translateX(200px);
    transition: 1s ease-in-out;
    color: transparent;
}
/* ----------- start media query for video & contact ----*/
@media only screen and (max-width: 575px) {
    .video .overlay {
        padding-top: 40px;
    }
    .video .overlay .social {
        margin-top: 30px;        
        
    }
    .video .overlay .social i {
        width: 40px;
        height: 40px;
        font-size: 20px;
        line-height: 40px;
    }
    .video .overlay form {
        width: 90%;
        margin: 40px auto 0;
        flex-direction: column;
        align-items: center;
    }
    .video .overlay form input {
        width: 95% !important;
        margin-bottom: 15px !important;
    }
    .video .overlay form textarea {
        width: 95%;
        margin-top: 15px;
    }
    .video .overlay form button {
        width: 95%;
    }
}
@media (min-width: 576px) and (max-width: 991px) {
    
    .video .overlay form {
        width: 90%;
        margin: 60px auto 0;
    }
    .video .overlay form [name="name"],
    .video .overlay form [name="email"] {
        width: 48%;
    }
    .video .overlay form [name="phone"],
    .video .overlay form [name="website"] {
        width: 48%;
        margin-bottom: 30px;
    }
    .video .overlay form [name="subject"] {
        width: 100%;
    }
    
}

</style>
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
</body>
</html>
@endsection





















