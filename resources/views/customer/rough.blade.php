<div class="container">
    <h2>Modal Login Example</h2>
    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-default btn-lg" id="myBtn">Login</button>
  
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
  
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Login</h4>
          </div>
          <div class="modal-body">
            <form role="form">
              <div class="form-group">
                <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
                <input type="text" class="form-control" id="usrname" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                <input type="text" class="form-control" id="psw" placeholder="Enter password">
              </div>
              <div class="checkbox">
                <label><input type="checkbox" value="" checked>Remember me</label>
              </div>
              <button type="submit" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
            <p>Not a member? <a href="#">Sign Up</a></p>
            <p>Forgot <a href="#">Password?</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>


<!--Vipimo-->
  <div class="container">
    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-default btn-lg" id="myBtn" data-target="#myModal">Login</button>
  
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
  
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span>Submit</h4>
          </div>
          <div class="modal-body">
            <form role="form">
              <div class="form-group">
                <label for="usrname"><span class="glyphicon glyphicon-user"></span>Tumbo/kiuno</label>
                <input type="text" name="tumbo/kiuno" class="form-control" id="usrname" placeholder="kipimo cha Tumbo/kiuno">
              </div>
              <div class="form-group">
                <label for="psw"><span class="glyphicon glyphicon-eye-open"></span>Hipsi </label>
                <input type="text" name="hipsi" class="form-control" id="psw" placeholder="kipimo cha Hipsi">
              </div>
              <div class="form-group">
                <label for="psw"><span class="glyphicon glyphicon-eye-open"></span>Paja</label>
                <input type="text" name="paja" class="form-control" id="psw" placeholder="kipimo cha Paja">
              </div>
              <div class="form-group">
                <label for="psw"><span class="glyphicon glyphicon-eye-open"></span>Goti </label>
                <input type="text" name="goti" class="form-control" id="psw" placeholder="kipimo cha Goti">
              </div>
              <div class="form-group">
                <label for="psw"><span class="glyphicon glyphicon-eye-open"></span>Upana wa Chini </label>
                <input type="text" name="Upana_chini" class="form-control" id="psw" placeholder="kipimo cha Upana wa Chini">
              </div>
              <div class="form-group">
                <label for="psw"><span class="glyphicon glyphicon-eye-open"></span>Fly</label>
                <input type="text" name="fly" class="form-control" id="psw" placeholder="kipimo cha Fly">
              </div>
              <div class="checkbox">
                <label><input type="checkbox" value="" checked>Remember me</label>
              </div>
              <button type="submit" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Add to Cart</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
            <p>Maelezo ya namna ya vipimo? <a href="#">Msaada</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<div class="trending-wrapper right">
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg " data-toggle="modal" data-target="#myModal">Open Women Designs</button>
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">


        
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <a href="/project/myproject/public/skirt" class="">
            <img class="category-image"src="{{asset('images/skirt.png')}}" alt="">
          </a>
          <b>Sketi</b>
        </div>
        <div class="modal-body">
        <a href="/project/myproject/public/w_trouse" class="">
            <img class="category-image"src="{{asset('images/w_trouse.jpg')}}" alt="">
        </a>
        <b>Suruali</b>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  

  


  <!--Vipimo-->
  <div class="container">
    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-default btn-lg" id="myBtn" data-target="#myModal2">Vipimo</button>
  
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
  
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span>Submit</h4>
          </div>
          <div class="modal-body">
            <form action="/project/myproject/public/addToCart" method="POST"role="form">
              @csrf
              <div class="form-group">
                <input type="hidden" name="product_id" value="{{$products['id']}}">
              </div>
                <div class="form-group">
                <label for="usrname"><span class="glyphicon glyphicon-user"></span>Tumbo/kiuno</label>
                <input type="text" name="tumbo/kiuno" class="form-control" id="usrname" placeholder="kipimo cha Tumbo/kiuno">
              </div>
              <div class="form-group">
                <label for="psw"><span class="glyphicon glyphicon-eye-open"></span>Hipsi </label>
                <input type="text" name="hipsi" class="form-control" id="psw" placeholder="kipimo cha Hipsi">
              </div>
              <div class="form-group">
                <label for="psw"><span class="glyphicon glyphicon-eye-open"></span>Paja</label>
                <input type="text" name="paja" class="form-control" id="psw" placeholder="kipimo cha Paja">
              </div>
              <div class="form-group">
                <label for="psw"><span class="glyphicon glyphicon-eye-open"></span>Goti </label>
                <input type="text" name="goti" class="form-control" id="psw" placeholder="kipimo cha Goti">
              </div>
              <div class="form-group">
                <label for="psw"><span class="glyphicon glyphicon-eye-open"></span>Upana wa Chini </label>
                <input type="text" name="Upana_chini" class="form-control" id="psw" placeholder="kipimo cha Upana wa Chini">
              </div>
              <div class="form-group">
                <label for="psw"><span class="glyphicon glyphicon-eye-open"></span>Fly</label>
                <input type="text" name="fly" class="form-control" id="psw" placeholder="kipimo cha Fly">
              </div>
              <div class="checkbox">
                <label><input type="checkbox" value="" checked>Remember me</label>
              </div>
              <button type="submit" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Add to Cart</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
            <button class="btn btn-success">Buy Now</button>
            <p>Maelezo ya namna ya vipimo? <a href="#">Msaada</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
       
    
</div>
</div>



function detail($id)
{
    $cat = 0;
    $var = DB::table('products')
          ->where('id', '=', $id)
          ->where('category_id', '=', 1)
          ->get();

    if($var)
    {
        $cat = 1;
        return view('detail', compact('var','cat'));
    }
    elseif 
    ($var = DB::table('products')
    ->where('id', '=', $id)
    ->where('category_id', '=', 2)
    ->get())
    {
        $cat = 2;

        return view('detail', compact('var','cat'));
    }
    elseif 
    ($var = DB::table('products')
    ->where('id', '=', $id)
    ->where('category_id', '=', 3)
    ->get())
    {
        $cat = 3;

        return view('detail', compact('var','cat'));
    }
    elseif 
    ($var = DB::table('products')
    ->where('id', '=', $id)
    ->where('category_id', '=', 4)
    ->get())
    {
        $cat = 4;

        return view('detail', compact('var','cat'));
    }
    elseif 
    ($var = DB::table('products')
    ->where('id', '=', $id)
    ->where('category_id', '=', 5)
    ->get())
    {
        $cat = 5;

        return view('detail', compact('var','cat'));
    }
    elseif 
    ($var = DB::table('products')
    ->where('id', '=', $id)
    ->where('category_id', '=', 6)
    ->get())
    {
        $cat = 6;

        return view('detail', compact('var','cat'));
    }
    else

    $cat = 7;
        $data = Product::where('id',$id);

        return view('detail', compact('data','cat'));
    
}


<div class="form-group">
  <label for="sel1">Select list:</label>
  <select class="form-control" id="sel1" name="">
    @foreach ($res as $res)
    <option value="{{$res['name']}}">
      <img class="detail-img" src="{{asset($res['gallery'])}}" alt="">
    </option>   
    @endforeach
  </select>
</div>


<div class="container">
  <h2>Simple Collapsible</h2>
  <p>Click on the button to toggle between showing and hiding content.</p>
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Simple collapsible</button>
  <div id="demo" class="collapse">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  </div>


  @extends('master')
@section('content')
<div class="custom-product">
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
      <img  class="trending-image" src="{{$item['gallery']}}" alt="Chania">
              </a>
              <div class="carousel-caption slider-text">
                <h3>{{$item['name']}}</h3>
                <p>{{$item['description']}}</p>
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
<div class="trending-wrapper">
  <h3>Trending Products</h3>
  @foreach ($products as $item)
  <div class="trending-item">
      <a href="detail/{{$item['id']}}">
      <img  class="trending-image" src="{{$item['gallery']}}" alt="Chania">
      </a>
      <div class="">
        <h3>{{$item['name']}}</h3>
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

<div class="trending-wrapper left">
        <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-info btn-lg " data-toggle="modal" data-target="#myModal1">Open Men Designs</button>
      
        <!-- Modal -->
        <div class="modal fade" id="myModal1" role="dialog">
          <div class="modal-dialog modal-sm">
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <a href="/l_shirt" class="">
                  <img class="category-image"src="{{asset('images/long.png')}}" alt="">
                </a>
                <b>Shati la mikono mirefu</b>
              </div>
              <div class="modal-body">
              <a href="/m_trouse" class="">
                  <img class="category-image"src="{{asset('images/m_trouse.jpg')}}" alt="">
              </a>
              <b>Suruali</b>
              </div>
              <div class="modal-body">
                <a href="s_shirt" class="">
                    <img class="category-image"src="{{asset('images/short.jpg')}}" alt="">
                </a>
                <b>Shati la mikono mifupi</b>
                </div>
                <div class="modal-body">
                  <a href="/short" class="">
                      <img class="category-image"src="{{asset('images/pant.jpg')}}" alt=""> 
                  </a>
                  <b>kaptula</b>
                  </div>
      
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
            
          </div>
        </div>

      
</div>
<div class="trending-wrapper right">
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg " data-toggle="modal" data-target="#myModal">Open Women Designs</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <a href="/skirt" class="">
            <img class="category-image"src="{{asset('images/skirt.png')}}" alt="">
          </a>
          <b>Sketi</b>
        </div>
        <div class="modal-body">
        <a href="/w_trouse" class="">
            <img class="category-image"src="{{asset('images/w_trouse.jpg')}}" alt="">
        </a>
        <b>Suruali</b>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  




@endsection


<label for="select1">
  Singular select:
</label>
<select id="select1" name="select1">
  <option value="">&nbsp;</option>
  <option value="1" data-subtitle="The first option" data-left="images/ingi.png" data-right="1" selected>One</option>
  <option value="2" data-subtitle="The second option" data-left="images/runa.png" data-right="2">Two</option>
  <option value="3" data-subtitle="The third option" data-left="images/jogvan.png" data-right="3">Three</option>
  <option value="4" data-left="images/noimage.png" data-right="4">Four</option>
  <option value="5" data-left="images/noimage.png" data-right="5">Five</option>
  <option value="6">Six</option>
  <option value="7">Seven</option>
  <option value="8">Eight</option>
  <option value="9">Nine</option>
  <option value="10">Ten</option>
  <option value="11">Eleven</option>
  <option value="12">Twelve</option>
  <option value="13">Thirteen</option>
  <option value="14">Fourteen</option>
  <option value="15">Fifteen</option>
  <option value="16">Sixteen</option>
  <option value="17">Seventeen</option>
  <option value="18">Eighteen</option>
  <option value="19">Nineteen</option>
  <option value="20">Twenty</option>
  <option value="21">Twenty-one</option>
  <option value="22">Twenty-two</option>
  <option value="23">Twenty-three</option>
  <option value="24">Twenty-four</option>
  <option value="25">Twenty-five</option>
  <option value="26">Twenty-six</option>
  <option value="27">Twenty-seven</option>
  <option value="28">Twenty-eight</option>
  <option value="29">Twenty-nine</option>
  <option value="30">Thirty</option>
</select>
<input value="activate" id="activate_selectator1" type="button">
<script type="text/javascript">
  $(function () {
    var $activate_selectator = $('#activate_selectator1');
    $activate_selectator.click(function () {
      var $select = $('#select1');
      if ($select.data('selectator') === undefined) {
        $select.selectator({
          labels: {
            search: 'Search here...'
          },
          useDimmer: true,
          searchFields: 'value text subtitle right'
        });
        $activate_selectator.val('destroy');
      } else {
        $select.selectator('destroy');
        $activate_selectator.val('activate');
      }
    });
    $activate_selectator.trigger('click');
  });
</script>
</section>

<body>
  <p>1.Piga *150*01#</p>
                        <p>2.Chagua namba(4) "Lipa Bili"</p>
                        <p>3.Chagua (5) "Malipo ya serikali"</p>
                        <p>4.Ingiza namba ya kumbukumbu ya Malipo (Control Number)</p>
                        <p>5.Ingiza kiasi cha pesa unachotakiwa kulipa</p>
                        <p>6.Ingiza namba ya siri kuhakiki</p>
                        </div>  
                      </div>
                        <div>
                          <button data-toggle="collapse" data-target="#demo">Airtel Money</button>
                          <div id="demo" class="collapse">
                          <p>1.Piga *150*01#</p>
                          <p>2.Chagua namba(4) "Lipa Bili"</p>
                          <p>3.Chagua (5) "Malipo ya serikali"</p>
                          <p>4.Ingiza namba ya kumbukumbu ya Malipo (Control Number)</p>
                          <p>5.Ingiza kiasi cha pesa unachotakiwa kulipa</p>
                          <p>6.Ingiza namba ya siri kuhakiki</p>
                          </div>
                        </div>
                          <div>
                            <button data-toggle="collapse" data-target="#demo">Mpesa</button>
      
                        <div id="demo" class="collapse">
                        <p>1.Piga *150*01#</p>
                        <p>2.Chagua namba(4) "Lipa Bili"</p>
                        <p>3.Chagua (5) "Malipo ya serikali"</p>
                        <p>4.Ingiza namba ya kumbukumbu ya Malipo (Control Number)</p>
                        <p>5.Ingiza kiasi cha pesa unachotakiwa kulipa</p>
                        <p>6.Ingiza namba ya siri kuhakiki</p>
                        </div>
                        
</body>