@extends('customer/master')
@section('content')
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog</title>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet"/>

</head>
    
<style>
.blog-hero {
    width:100%;
    height:0;
    padding-bottom:30%;
    background:url('https://images.unsplash.com/photo-1450101215322-bf5cd27642fc?crop=entropy&fit=crop&fm=jpg&h=1000&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=1925') 20% 70% no-repeat ;
    background-size: cover;
    position: relative;
}

  $mid-grey:#555353;
$charcoal:#373737;
$font-weight:500;
$font-size:14px;
$font-paragraph:"Source Sans Pro";
$font-heading:"Roboto";

body {

	font:$font-weight $font-size $font-paragraph;
	color:$mid-grey;
}

//HEADINGS
h1, h2, h3, h4 {
	color:$charcoal;
}

h1 {
	font-size:2em;
	font-weight:700;
	display:flex;
	justify-content:flex-start;
	align-items:center;
	margin:30px 0;
}

h2 {
	font-size:1.8em;
	font-weight:700;
}

h3 {
	font-size:1.6em;
	font-weight:700;
}

h4 {
	font-size:1.4em;
}

a {
	text-decoration:none;
}



p {
    line-height:1.9em;
    margin:2em 0;
    font-size:1em;
    font-weight: 500;
}

.blog-post {
    width:80%;
    max-width:1100px;
    background:white;
    margin:20px auto 0;   
    border:1px solid #f4f4f4;
    box-shadow:0 0 25px rgba(0,0,0,.05);
}



summary {
    margin-top:20px;
    display:inline-block;
}
summary h3 {
    width:100%;
    font-size:2.5em;
    color:#555;
    font-weight: 500;
}

summary .blog-date {
    width:100%;
    font-size:15px;
    padding-left:2px ;
    color:#909090;
}
article {
    
    padding-bottom:50px;
    
}
.blog-content {
    width:55%;
    margin:auto;
}

.blog-img {
    width:60%;
    height: 0;
    margin:50px auto 60px;
    padding-bottom:35%;
    background-size:cover;
    position:relative;
}

.blog-img-caption {
    position:absolute;
    bottom:-30px;
    font-size:.9em;
    color:#888;
    left:4%;
}

b {
    font-weight:bold;
}

@media (min-width:601px) and (max-width:1000px){
    .blog-post {
        width:90%;
    }
    .blog-content {
        width:75%;
    }
  
    .blog-hero {
        padding-bottom:35%;
    }
}




@media (max-width:600px){
    .blog-post {
        font-size:.9em;
        width:90%;
    }
    .blog-content {
        width:80%;
    }
    .blog-img {
        width:90%;
        padding-bottom: 50%;
    }
    .blog-hero {
        padding-bottom:60%;
    }
}

</style>
<body>
  @foreach ($post as $post)
<div class="blog-post">
		<article>
			
			<div class="blog-content">
				<summary>
					<h3>{{$post['title']}}</h3>
					<div class="blog-date">23 Dec 2016</div>
				</summary>
			</div>
			<div  style="background:url('{{$post['image']}}') center center;;" class="blog-img">
        <div><img src="" alt=""></div>
				<div class="blog-img-caption"><b>Pictured</b> Some Cool Skyline</div>
			</div>
			<div class="blog-content">
        <p>{{$post['body']}}</p>
				
      </div>	
	</article>
</div>
@endforeach
</body>

</html>    
@endsection
