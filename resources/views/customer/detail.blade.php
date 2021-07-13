
@extends('customer/master')
@section('content')
<div class="container">
<div class="row">
    <div class="col-sm-6">
        <img class="detail-img" src="{{asset($data['gallery'])}}" alt="">
    </div>
    <div class="col-sm-6">
        <a href="/home">Go Back</a>
        <h2>{{$data['name']}}</h2>
        <h3>Price:{{$data['price']}}</h3>
        <h3>Details:{{$data['description']}}</h3>
        <h3>Category:{{$data['category_id']}}</h3>
        <br><br>
    </div>
<div class="custom-product3 ">
    <div class="center" >
      <a   href="#demo" class="btn btn-info" data-toggle="collapse">Weka Vipimo</a>
  <div id="demo" class="collapse">
    @if ($cat == 1)
                  <h2>No 1</h2>
                  <!-- category 1-->
                  <form action="/addToCart" method="POST" role="form">
                    @csrf
                    <div class="form-group">
                      <input type="hidden" name="product_id" value="{{$data['id']}}">
                    </div>
                      <div class="form-group">
                      <input type="text" name="urefu" class="form-control"  placeholder="Urefu wa shati">
                      <span style="color: red">@error('urefu'){{$message}} @enderror</span>

                    </div>
                    <div class="form-group">
                      <input type="text" name="bega" class="form-control" id="psw" placeholder="Bega">
                      <span style="color: red">@error('bega'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                      <input type="text" name="kifua" class="form-control" id="psw" placeholder="Kifua">
                      <span style="color: red">@error('kifua'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                      <input type="text" name="tumbo_kiuno" class="form-control" id="psw" placeholder="Tumbo au kiuno">
                      <span style="color: red">@error('tumbo_kiuno'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                      <input type="text" name="hipsi" class="form-control" id="psw" placeholder="Hipsi">
                      <span style="color: red">@error('hipsi'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                      <input type="text" name="urefu_mkono" class="form-control" id="psw" placeholder="Urefu wa mkono">
                      <span style="color: red">@error('urefu_mkono'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                      <input type="text" name="upana_mkono" class="form-control" id="psw" placeholder="Upana wa mkono">
                      <span style="color: red">@error('upana_mkono'){{$message}} @enderror</span>
                    </div>  
                    <div class="form-group">
                      <input type="hidden" name="goti" value=0 class="form-control" id="psw" placeholder="Kifua">
                      <input type="hidden" name="fly" value=0 class="form-control" id="psw" placeholder="Kifua">
                      <input type="hidden" name="kiuno" value=0 class="form-control" id="psw" placeholder="Kifua">
                      <input type="hidden" name="upana_chini" value=0 class="form-control" id="psw" placeholder="Kifua">
                      <input type="hidden" name="paja" value=0 class="form-control" id="psw" placeholder="Kifua">
                      <input type="hidden" name="half" value=0 class="form-control" id="psw" placeholder="Kifua">    
                    </div>       
                         
                    <div class="form-group">
                      <select name="kitambaa" id="id_select2_example" style="width: 70%;">
                        @foreach ($res as $res)
                        <option  value="{{$res->name}}" data-img_src="{{asset($res->gallery)}}">{{$res->name}}</option>                              
                        @endforeach
                        <span style="color: red">@error('kitambaa'){{$message}} @enderror</span>
                      </select>                      
                  </div>
              
                  
                      <button type="submit" class="btn btn-default btn-success btn-block"><span ></span> Add to Cart</button>
                    </form>
                    
                  @elseif ($cat == 2)
                  
                  <!-- category 2-->
                  <form action="/addToCart" method="POST" role="form">
                    @csrf
                    <div class="form-group">
                      <input type="hidden" name="product_id" value="{{$data['id']}}">
                    </div>
                      <div class="form-group">
                      <input type="text" name="urefu" class="form-control"  placeholder="Urefu wa shati">
                      <span style="color: red">@error('urefu'){{$message}} @enderror</span>

                    </div>
                    <div class="form-group">
                      <input type="text" name="bega" class="form-control" id="psw" placeholder="Bega">
                      <span style="color: red">@error('bega'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                      <input type="text" name="kifua" class="form-control" id="psw" placeholder="Kifua">
                      <span style="color: red">@error('kifua'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                      <input type="text" name="tumbo_kiuno" class="form-control" id="psw" placeholder="Tumbo au kiuno">
                      <span style="color: red">@error('tumbo_kiuno'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                      <input type="text" name="hipsi" class="form-control" id="psw" placeholder="Hipsi">
                      <span style="color: red">@error('hipsi'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                      <input type="text" name="urefu_mkono" class="form-control" id="psw" placeholder="Urefu wa mkono">
                      <span style="color: red">@error('urefu_mkono'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                      <input type="text" name="upana_mkono" class="form-control" id="psw" placeholder="Upana wa mkono">
                      <span style="color: red">@error('upana_mkono'){{$message}} @enderror</span>
                    </div>  
                    <div class="form-group">
                      <input type="hidden" name="goti" value=0 class="form-control" id="psw" placeholder="Kifua">
                      <input type="hidden" name="fly" value=0 class="form-control" id="psw" placeholder="Kifua">
                      <input type="hidden" name="kiuno" value=0 class="form-control" id="psw" placeholder="Kifua">
                      <input type="hidden" name="upana_chini" value=0 class="form-control" id="psw" placeholder="Kifua">
                      <input type="hidden" name="paja" value=0 class="form-control" id="psw" placeholder="Kifua">
                      <input type="hidden" name="half" value=0 class="form-control" id="psw" placeholder="Kifua">    
                    </div>       
                         
                    <div class="form-group">
                      <select name="kitambaa" id="id_select2_example" style="width: 70%;">
                        @foreach ($res as $res)
                        <option  value="{{$res->name}}" data-img_src="{{asset($res->gallery)}}">{{$res->name}}</option>                              
                        @endforeach
                        <span style="color: red">@error('kitambaa'){{$message}} @enderror</span>
                      </select>                      
                  </div>
              
                      <button type="submit" class="btn btn-default btn-success btn-block"><span ></span> Add to Cart</button>
                    </form>
                  
                  @elseif ($cat == 3)

                  <!-- category 3-->
                  <form action="/addToCart" method="POST" role="form">
                    @csrf
                    <div class="form-group">
                      <input type="hidden" name="product_id" value="{{$data['id']}}">
                    </div>
                      <div class="form-group">
                      <input type="text" name="urefu" class="form-control" id="usrname" placeholder="Urefu wa Suruali">
                      <span style="color: red">@error('urefu'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                      <input type="text" name="kiuno" class="form-control" id="psw" placeholder="Kiuno">
                      <span style="color: red">@error('kiuno'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                      <input type="text" name="paja" class="form-control" id="psw" placeholder="Paja">
                      <span style="color: red">@error('paja'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                      <input type="text" name="upana_chini" class="form-control" id="psw" placeholder="Upana wa Chini">
                      <span style="color: red">@error('upana_chini'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                      <input type="text" name="fly" class="form-control" id="psw" placeholder="Fleys au Zipu">
                      <span style="color: red">@error('fly'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="bega" value=0 class="form-control" id="psw" placeholder="Kifua">
                        <input type="hidden" name="kifua" value=0 class="form-control" id="psw" placeholder="Kifua">
                        <input type="hidden" name="tumbo_kiuno" value=0 class="form-control" id="psw" placeholder="Kifua">
                        <input type="hidden" name="hipsi" value=0 class="form-control" id="psw" placeholder="Kifua">
                        <input type="hidden" name="urefu_mkono" value=0 class="form-control" id="psw" placeholder="Kifua">
                        <input type="hidden" name="goti" value=0 class="form-control" id="psw" placeholder="Kifua">
                        <input type="hidden" name="upana_mkono" value=0 class="form-control" id="psw" placeholder="Kifua">                        
                        <input type="hidden" name="half" value=0 class="form-control" id="psw" placeholder="Kifua">
                      </div>       
                    <div class="form-group">
                      <select name="kitambaa" id="id_select2_example" style="width: 70%;">
                        @foreach ($res as $res)
                        <option  value="{{$res->name}}" data-img_src="{{asset($res->gallery)}}">{{$res->name}}</option>                              
                        @endforeach
                        <span style="color: red">@error('kitambaa'){{$message}} @enderror</span>
                      </select>                      
                  </div>
                             
                      <button type="submit" class="btn btn-default btn-success btn-block"><span ></span> Add to Cart</button>
                    </form>

                @elseif ($cat == 4)
                
                  <!-- category 4-->
                  <form action="/addToCart" method="POST" role="form">
                    @csrf
                    <div class="form-group">
                      <input type="hidden" name="product_id" value="{{$data['id']}}">
                    </div>
                      <div class="form-group">
                      <input type="text" name="urefu" class="form-control" id="usrname" placeholder="Urefu wa Suruali">
                      <span style="color: red">@error('urefu'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                      <input type="text" name="kiuno" class="form-control" id="psw" placeholder="Kiuno">
                      <span style="color: red">@error('kiuno'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                      <input type="text" name="paja" class="form-control" id="psw" placeholder="Paja">
                      <span style="color: red">@error('paja'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                      <input type="text" name="upana_chini" class="form-control" id="psw" placeholder="Upana wa Chini">
                      <span style="color: red">@error('upana_chini'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                      <input type="text" name="fly" class="form-control" id="psw" placeholder="Fleys au Zipu">
                      <span style="color: red">@error('fly'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="bega" value=0 class="form-control" id="psw" placeholder="Kifua">
                        <input type="hidden" name="kifua" value=0 class="form-control" id="psw" placeholder="Kifua">
                        <input type="hidden" name="tumbo_kiuno" value=0 class="form-control" id="psw" placeholder="Kifua">
                        <input type="hidden" name="hipsi" value=0 class="form-control" id="psw" placeholder="Kifua">
                        <input type="hidden" name="urefu_mkono" value=0 class="form-control" id="psw" placeholder="Kifua">
                        <input type="hidden" name="goti" value=0 class="form-control" id="psw" placeholder="Kifua">
                        <input type="hidden" name="upana_mkono" value=0 class="form-control" id="psw" placeholder="Kifua">                        
                        <input type="hidden" name="half" value=0 class="form-control" id="psw" placeholder="Kifua">
                      </div>       
                    <div class="form-group">
                      <select name="kitambaa" id="id_select2_example" style="width: 70%;">
                        @foreach ($res as $res)
                        <option  value="{{$res->name}}" data-img_src="{{asset($res->gallery)}}">{{$res->name}}</option>                              
                        @endforeach
                        <span style="color: red">@error('kitambaa'){{$message}} @enderror</span>
                      </select>                      
                  </div>
                      <button type="submit" class="btn btn-default btn-success btn-block"><span ></span> Add to Cart</button>
                    </form>

                  @elseif ($cat == 5)
                
                  <!-- category 5-->
                  <form action="/addToCart" method="POST" role="form">
                    @csrf
                    <div class="form-group">
                      <input type="hidden" name="product_id" value="{{$data['id']}}">
                    </div>
                      <div class="form-group">
                      <input type="text" name="urefu" class="form-control" id="usrname" placeholder="Urefu wa Suruali">
                      <span style="color: red">@error('urefu'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                      <input type="text" name="kiuno" class="form-control" id="psw" placeholder="Kiuno">
                      <span style="color: red">@error('kiuno'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                      <input type="text" name="paja" class="form-control" id="psw" placeholder="Paja">
                      <span style="color: red">@error('paja'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                      <input type="text" name="upana_chini" class="form-control" id="psw" placeholder="Upana wa Chini">
                      <span style="color: red">@error('upana_chini'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                      <input type="text" name="fly" class="form-control" id="psw" placeholder="Fleys au Zipu">
                      <span style="color: red">@error('fly'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="bega" value=0 class="form-control" id="psw" placeholder="Kifua">
                        <input type="hidden" name="kifua" value=0 class="form-control" id="psw" placeholder="Kifua">
                        <input type="hidden" name="tumbo_kiuno" value=0 class="form-control" id="psw" placeholder="Kifua">
                        <input type="hidden" name="hipsi" value=0 class="form-control" id="psw" placeholder="Kifua">
                        <input type="hidden" name="urefu_mkono" value=0 class="form-control" id="psw" placeholder="Kifua">
                        <input type="hidden" name="goti" value=0 class="form-control" id="psw" placeholder="Kifua">
                        <input type="hidden" name="upana_mkono" value=0 class="form-control" id="psw" placeholder="Kifua">                        
                        <input type="hidden" name="half" value=0 class="form-control" id="psw" placeholder="Kifua">
                      </div>       
                    <div class="form-group">
                      <select name="kitambaa" id="id_select2_example" style="width: 70%;">
                        @foreach ($res as $res)
                        <option  value="{{$res->name}}" data-img_src="{{asset($res->gallery)}}">{{$res->name}}</option>                              
                        @endforeach
                        <span style="color: red">@error('kitambaa'){{$message}} @enderror</span>
                      </select>                      
                  </div>
                            
                      <button type="submit" class="btn btn-default btn-success btn-block"><span ></span> Add to Cart</button>
                    </form>

                  @elseif ($cat == 6)          

                  <!-- category 6-->
                  <form action="/addToCart" method="POST" role="form">
                    @csrf
                    <div class="form-group">
                      <input type="hidden" name="product_id" value="{{$data['id']}}">
                    </div>
                      <div class="form-group">
                      <input type="text" name="tumbo_kiuno" class="form-control" id="usrname" placeholder="Kiuno">
                      <span style="color: red">@error('tumbo_kiuno'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                      <input type="text" name="hipsi" class="form-control" id="psw" placeholder="Hipsi">
                      <span style="color: red">@error('hipsi'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                      <input type="text" name="urefu" class="form-control" id="psw" placeholder="Urefu">
                      <span style="color: red">@error('urefu'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="bega" value=0 class="form-control" id="psw" placeholder="Kifua">
                      <input type="hidden" name="kifua" value=0 class="form-control" id="psw" placeholder="Kifua">
                      <input type="hidden" name="tumbo" value=0 class="form-control" id="psw" placeholder="Kifua">
                      <input type="hidden" name="hipsi" value=0 class="form-control" id="psw" placeholder="Kifua">
                      <input type="hidden" name="urefu_mkono" value=0 class="form-control" id="psw" placeholder="Kifua">
                      <input type="hidden" name="half" value=0 class="form-control" id="psw" placeholder="Kifua">
                      <input type="hidden" name="paja" value=0 class="form-control" id="psw" placeholder="Kifua">
                      <input type="hidden" name="upana_chini" value=0 class="form-control" id="psw" placeholder="Kifua">
                      <input type="hidden" name="fly" value=0 class="form-control" id="psw" placeholder="Kifua">
                      <input type="hidden" name="half" value=0 class="form-control" id="psw" placeholder="Kifua">
                      <input type="hidden" name="upana_mkono" value=0 class="form-control" id="psw" placeholder="Kifua">
                      <input type="hidden" name="kiuno" value=0 class="form-control" id="psw" placeholder="Kifua">
                      <input type="hidden" name="goti" value=0 class="form-control" id="psw" placeholder="Kifua">

                    </div>
                    
                    <div class="form-group">
                      <select name="kitambaa" id="id_select2_example" style="width: 70%;">
                        @foreach ($res as $res)
                        <option  value="{{$res->name}}" data-img_src="{{asset($res->gallery)}}">{{$res->name}}</option>                              
                        @endforeach
                      </select>                      
                  </div>
                         
                      <button type="submit" class="btn btn-default btn-success btn-block"><span ></span> Add to Cart</button>
                    </form>

               
                  @else
                  
                  <form action="/addToCart" method="POST" role="form">
                    @csrf
                    <div class="form-group">
                      <input type="hidden" name="product_id" value="{{$data['id']}}">
                    </div>
                      <div class="form-group">
                      <input type="text" name="tumbo_kiuno" class="form-control" id="usrname" placeholder="kipimo cha Tumbo/kiuno">
                    </div>
                    <div class="form-group">
                      <input type="text" name="hipsi" class="form-control" id="psw" placeholder="kipimo cha Hipsi">
                    </div>
                    <div class="form-group">
                      <input type="text" name="paja" class="form-control" id="psw" placeholder="kipimo cha Paja">
                    </div>
                    <div class="form-group">
                      <input type="text" name="goti" class="form-control" id="psw" placeholder="kipimo cha Goti">
                    </div>
                    <div class="form-group">
                      <input type="text" name="upana_chini" class="form-control" id="psw" placeholder="kipimo cha Upana wa Chini">
                    </div>
                    <div class="form-group">
                      <input type="text" name="fly" class="form-control" id="psw" placeholder="kipimo cha Fly">
                    </div>       
                    <div class="form-group">
                      <select name="kitambaa" id="id_select2_example" style="width: 70%;">
                        @foreach ($res as $res)
                        <option  value="{{$res->name}}" data-img_src="{{asset($res->gallery)}}">{{$res->name}}</option>                              
                        @endforeach
                      </select>                      
                  </div>
                           
                      <button type="submit" class="btn btn-default btn-success "><span ></span> Add to Cart</button>
                    </form>
                    
            @endif
            <!-- scripts -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.js"></script>
            <script type="text/javascript">
            function custom_template(obj){
              var data = $(obj.element).data();
              var text = $(obj.element).text();
              if(data && data['img_src']){
                img_src = data['img_src'];
                template = $("<div><img src=\"" + img_src + "\" style=\"width:100%;height:70px;\"/><p style=\"font-weight: 700;font-size:14pt;text-align:center;\">" + text + "</p></div>");
                return template;
     }
    }
    var options = {
    'templateSelection': custom_template,
    'templateResult': custom_template,
  }
  $('#id_select2_example').select2(options);            
  $('.select2-container--default .select2-selection--single').css({'height':'95px'});
  </script>
  </div>
               
  </div>       
</div>

  @endsection
