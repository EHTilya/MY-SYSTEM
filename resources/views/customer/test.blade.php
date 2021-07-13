@extends('customer/master')
@section('content')
  @foreach ($post as $post)  
<div class="col-md-8 blog-posts">
				<div class="row">
					<div class="col-md-12">
						<div class="post-blog">
							<div class="blog-image">
                <img src="{{$post['image']}}" class="trending-image2"							</div> <!-- /.blog-image -->
							<div class="blog-content">
								<span class="meta-date"><a href="#">24 February 2084</a></span>
								<span class="meta-author"><a href="#blog-author">Candy Sharp</a></span>
								<h3>{{$post['title']}}</h3>
							<p>{{$post['body']}}</p>
                
							</div> <!-- /.blog-content -->
						</div> <!-- /.post-blog -->
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
    </div>
@endforeach
<nav>
  <section>
    <nav>
      <ul>
        <li><a href="#">London</a></li>
        <li><a href="#">Paris</a></li>
        <li><a href="#">Tokyo</a></li>
      </ul>
    </nav>
    
    <article>
      <h1>London</h1>
      <p>London is the capital city of England. It is the most populous city in the  United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
      <p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>
    </article>
  </section>
  
</nav>

@endsection


