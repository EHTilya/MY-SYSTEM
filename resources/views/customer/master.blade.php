<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online Tailor</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!--<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
-->
<!-- Stylesheets -->
<link rel="stylesheet" href="bootstrap/bootstrap.css">
<link rel="stylesheet" href="css/misc.css">
<link rel="stylesheet" href="css/blue-scheme.css">
</head>
    
    
<body data-spy="scroll" data-target="#myScrollspy" data-offset="15">
        {{View::make('customer/header')}}
    @yield('content')
    {{View::make('customer/footer')}}
</body>
<style>

    * {
  box-sizing: border-box;
}
    .custom-login{
        height: 500px;
        padding-top: 50px;
    }
    .custom-register{
        height: 600px;
        padding-top: 10px;
    }
    .custom-product{
        height: 400px;
    }
    .custom-product2{
        height: 300px;
    }
    .custom-product3{
        height: 1000px;
    }
    
    img.slider-img{
        height: 400px !important;
    }
    .slider-text{
        background-color: #35443585 !important;
    }
    .trending-item{
        float: left;
        width: 20%;
    }
    .trending-image{
        height: 100px;
    }
    .trending-image2{
        height: 300px;
        width: 100%;
    }
    .trending-wrapper{
        margin: 30px;
    }
    .detail-img{
        height: 200px !important;
    }
    .detail-img2{
        height: 400px !important;
    }
    .search-box{
        width: 200px !important;
    }
    .cart-list-devider{
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px;

    }
    .custom-order{
        padding-top: 0px;
    }
    .order-button{
        padding-bottom:10px; 
    }
    .category-image{
        height: 80px;
    }
    .modal{
        margin-top: 30px;
    }
    .right{
        
        float: right;
    }
    .left{
        
        float: left;
    }
    .image{
        height: 100%;
    }
    .center{
        margin: auto;
        width: 30%;
        padding: 10px;
    }
    .center2{
        margin: auto;
        padding: 10%;
        padding-left: 20%;
    }

    body {
    position: relative;
  }
  section {
  display: -webkit-flex;
  display: flex;
}

/* Style the navigation menu */
nav {
  -webkit-flex: 1;
  -ms-flex: 1;
  flex: 1;
  background: #ccc;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

/* Style the content */
article {
  -webkit-flex: 3;
  -ms-flex: 3;
  flex: 3;
  background-color: #f1f1f1;
  padding: 10px;
}

/* Style the footer */
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the menu and the content (inside the section) sit on top of each other instead of next to each other */
@media (max-width: 600px) {
  section {
    -webkit-flex-direction: column;
    flex-direction: column;
  }
}

.dropdown-submenu {
    position: relative;
}

.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: -1px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
    border-radius: 0 6px 6px 6px;
}

.dropdown-submenu:hover>.dropdown-menu {
    display: block;
}

.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #ccc;
    margin-top: 5px;
    margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
    border-left-color: #fff;
}

.dropdown-submenu.pull-left {
    float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 10px;
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    border-radius: 6px 0 6px 6px;
}

.image-grid-cover {
    width: 100%;
    min-height: 100px;
    background-size: cover;
    position: relative;
    margin-bottom: 30px;
    text-shadow: rgba(0,0,0,.8) 0 1px 0;
    border-radius: 4px;
}
.image-grid-clickbox{
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    display: block;
    width: 100%;
    z-index: 20;
    background: rgba(0,0,0,.45);
}
.cover-wrapper {
    font-size: 20px;
    text-align: center;
    display: block;
    color: #fff;
    text-shadow: rgba(0,0,0,.8) 0 1px 0;
    z-index: 21;
    position: relative;
    top: 10px;
}

.image-grid-cover2 {
    width: 100%;
    height: 400px;
    background-size: cover;
    position: relative;
    margin-bottom: 30px;
    text-shadow: rgba(0,0,0,.8) 0 1px 0;
    border-radius: 4px;
}
.image-grid-clickbox2 {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    display: block;
    width: 100%;
    height: 100%;
    z-index: 20;
    background: rgba(0,0,0,.45);
}
.cover-wrapper2 {
    font-size: 20px;
    text-align: center;
    display: block;
    color: #fff;
    text-shadow: rgba(0,0,0,.8) 0 1px 0;
    z-index: 21;
    position: relative;
    top: 200px;
}
a, a:focus, a:hover {
    text-decoration: none;
    outline: 0;
}
.modal-header, h4, .close {
    background-color: #5cb85c;
    color:white !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-footer {
    background-color: #f9f9f9;
  }
.footer{
    position: fixed;
    height: 100px;
    bottom: 0;
    width: 100%;
}
</style>
 
</html>