


<!-- css


-->
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
    .responsive_menu {
  padding: 20px;
  background-color: rgba(49, 55, 58, 0.98);
  display: none;
  position: relative;
  z-index: 9999;
}
.main-nav ul, .main_menu, .main_menu li ul, #filters, .pages, .project-single .meta-post, .archive-wrapper .archive-list, .categories ul, .thumbs, .footer-menu {
  list-style: none;
  padding: 0;
  margin: 0;
}

.main_menu li {
  border-bottom: 1px solid #485156;
  padding: 10px 0;
}
.main_menu li:first-child {
  padding-top: 0;
}
.main_menu li:last-child {
  border-bottom: none;
  padding-bottom: 0;
}
.main_menu li a {
  font-size: 14px;
  font-family: "Raleway", sans-serif;
  color: #bfbfbf;
  font-weight: 500;
}
.main_menu li ul li {
  margin-left: 20px;
}
.main_menu li ul li:first-child {
  border-top: 1px solid #485156;
  padding-top: 8px;
  margin-top: 10px;
}
.main_menu li ul li:before {
  content: '-';
  color: gray;
  margin-right: 10px;
}

  </style>
</head>
<body>
  <div class="responsive_menu">
    <ul class="main_menu">
        <li><a href="index.html">Home</a></li>
        <li><a href="#">Portfolio</a>
          <ul>
            <li><a href="portfolio.html">Portfolio Grid</a></li>
            <li><a href="project-image.html">Project Image</a></li>
            <li><a href="project-slideshow.html">Project Slideshow</a></li>
          </ul>
        </li>
        <li><a href="#">Blog</a>
    <ul>
      <li><a href="blog.html">Blog Standard</a></li>
      <li><a href="blog-single.html">Blog Single</a></li>
                <li><a href="#">visit templatemo</a></li>
    </ul>
        </li>
        <li><a href="archives.html">Archives</a></li>
        <li><a href="contact.html">Contact</a></li>
    </ul> <!-- /.main_menu -->
  </div> <!-- /.responsive_menu -->
  
</body>
</html>

@endsection
