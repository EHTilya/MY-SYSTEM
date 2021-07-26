<?php

use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
  $total= ProductController::cartItem();
}
?>

<nav class="navbar navbar-inverse "">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="/home">VETA Tailor</a>
      </div>
      
      @if (Session::has('user'))
      <ul class="nav navbar-nav">
        <!--Wanaume-->
        <li class="dropdown">
          <a id="dLabel" role="button" data-toggle="dropdown"  data-target="#" href="/page.html">
              Wanaume<span class="caret"></span>
          </a>
          <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
            <li class="dropdown-submenu">
              <a tabindex="-1" href="#">Suruali</a>
              <ul class="dropdown-menu">
                <li><a href="/m_trouse2">Mchoro</a></li>
                <li><a href="/m_trouse">Sample</a></li>
              </ul>
            </li>
            <li class="divider"></li>
            <li class="dropdown-submenu">
              <a tabindex="-1" href="#">Shati Mikono Mirefu</a>
              <ul class="dropdown-menu">
                <li><a href="/l_shirt2">Mchoro</a></li>
                <li><a href="l_shirt">Sample</a></li>
              </ul>
            </li>
            <li class="divider"></li>
            <li class="dropdown-submenu">
              <a tabindex="-1" href="#">Shati Mikono mifupi</a>
              <ul class="dropdown-menu">
                <li><a href="/s_shirt">Mchoro</a></li>
                <li><a href="/s_shirt2">Sample</a></li>
              </ul>
            </li>
            <li class="divider"></li>
            <li class="dropdown-submenu">
              <a tabindex="-1" href="#">Kaptula</a>
              <ul class="dropdown-menu">
                <li><a href="/short2">Mchoro</a></li>
                <li><a href="/short">Sample</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <!--Wanawake-->
        <li class="dropdown">
          <a id="dLabel" role="button" data-toggle="dropdown"  data-target="#" href="/page.html">
            Wanawake <span class="caret"></span>
          </a>
          <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
            <li class="dropdown-submenu">
              <a tabindex="-1" href="#">Sketi</a>
              <ul class="dropdown-menu">
                <li><a href="/skirt2">Mchoro</a></li>
                <li><a href="/skirt">Sample</a></li>
              </ul>
            </li>
            <li class="divider"></li>
            <li class="dropdown-submenu">
              <a tabindex="-1" href="#">Suruali</a>
              <ul class="dropdown-menu">
                <li><a href="/w_trouse2">Mchoro</a></li>
                <li><a href="/w_trouse">Sample</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="myorders">Orders</a></li>
        <li class="dropdown">
          <a id="dLabel" role="button" data-toggle="dropdown"  data-target="#" href="/page.html">
            Other <span class="caret"></span>
          </a>
          <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
            <li class="dropdown">
              <a tabindex="-1" href="/vitambaa">Vitambaa</a>
            </li>
            <li class="divider"></li>
            <li class="dropdown">
              <a tabindex="-1" href="/contact">Mawasiliano</a>
            </li>
            <li class="divider"></li>
            <li class="dropdown">
              <a tabindex="-1" href="/blog">Blog</a>
            </li>
            <li class="divider"></li>
            <li class="dropdown">
              <a tabindex="-1" href="/about">About Us</a>
            </li>
          </ul>
        </li>
        
      </ul> 
      @endif
      <form class="navbar-form navbar-left" action="search">
        <div class="form-group">
          <input type="text" name="query" class="form-control search-box" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        @if (Session::has('user'))
        <li><a href="/cartlist"><span class="glyphicon glyphicon-shopping-cart"></span> cart({{$total}})</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}} <span>{{Session::get('user')['lname']}}</span>
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="logout">Logout</a></li>
        </ul>
      </li>
      @else
      <li><a href="/login">Login</a></li> 
      <li><a href="/register">Register</a></li>          
         
      @endif
        
    </ul>
    </div>
  </nav>