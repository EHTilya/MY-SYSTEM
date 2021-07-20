@extends('customer/master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    @import url('https://fonts.googleapis.com/css?family=Exo+2:700');
  * {
    margin: 0 auto;
    padding: 0;
  }
  
  body {
    background: url("https://image.ibb.co/mJ9tLa/image.png");
    background-color: #212121;
    background-blend-mode: overlay;
    background-position: center;
    background-size: cover;
    text-align: center;
  }
  
  hh1 {
    color: whitesmoke;
    font-family: 'Exo 2', sans-serif;
    font-size: 46px;
    font-weight: 900;
    text-transform: uppercase;
  }
  
  pp {
    max-width: 700px;
    min-height: 200px;
    padding: 0;
    color: whitesmoke;
    font-family: OpenSans;
    font-size: 14px;
    font-weight: 300;
    line-height: 22px;
  }
  
  .square {
    height: 60px;
    width: 60px;
    border: 1px dashed white;
    margin: 0 0 0 55px;
    /*   padding: 1px; resize squares */
    background-color: rgba(255, 255, 255, 0.2);
    display: inline-block;
    transform: rotateZ(44deg);
  }
  
  .square:hover {
    background-color: rgba(27, 182, 239, 0.2);
    transition: ease 0.2s;
    cursor: pointer;
  }
  
  .square .icons {
    position: absolute;
    transform: rotateZ(-44deg);
    margin: 20px 0 0px 21px;
  }
  
  .fa-facebook,
  .fa-twitter,
  .fa-dribbbler,
  .fa-youtube,
  .fa-dribbble {
    width: 11px;
    height: 22px;
    color: white;
    font-family: FontAwesome;
    font-size: 23px;
    font-weight: 400;
    text-transform: uppercase;
  }
  
  .square:hover .fa-facebook {
    color: rgba(59, 89, 152, 1)
  }
  
  .square:hover .fa-twitter {
    color: rgba(27, 182, 239, 1)
  }
  
  .square:hover .fa-dribbble {
    color: rgba(199, 59, 111, 1)
  }
  
  .square:hover .fa-youtube {
    color: rgba(229, 45, 39, 1)
  }
  .logo{
     margin: 1em;
     position: fixed;
     bottom: -72px;
     z-index: 99999999999;
     right: 0;
  }
  svg{
  
   
  
  }
  .pen{
    fill:black;
   animation:rotateInDownLeft 3s forwards;
  }
  .all{
    animation:rotateOut 3s forwards;
  }
  @keyframes rotateInDownLeft {
    from {
      transform-origin: left bottom;
      transform: rotate3d(0,0,0, 0deg);
      opacity: 1;
    }
  
    to {
      -webkit-transform-origin: left bottom;
      transform-origin: left bottom;
   transform: ;
   transform:translateX(850px) translateY(-83px) rotate3d(0,0,1, -60deg);
      opacity: 1;
    }
  }
  @keyframes rotateOut {
    from {
      -webkit-transform-origin: center;
      transform-origin: center;
      opacity: 1;
    }
  
    to {
      -webkit-transform-origin: center;
      transform-origin: center;
      -webkit-transform: rotate3d(0, 0, 1, 90deg);
      transform: rotate3d(0, 0, 1, 90deg);
      opacity: 1;
    }
  }
  </style>
  
</head>
<body>
<div class="about">
  <h1 class="hh1">
    ABOUT US
    <br>
    <img src="https://image.ibb.co/nk616F/Layer_1_copy_21.png" width="47" height="11" align="center">
    </h1>
    <article>
      <p class="pp">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
        survived not only five centuries, but also the leap into electronic typesetting, remaining. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when
        an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining .
      </p>
    </article>
    
</div>
</body>
</html>
    
@endsection