@extends('customer/master')
@section('content')
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog</title>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/blog.css">
</head>
    
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
{{View::make('customer/footer')}}

</body>

</html>    
@endsection
