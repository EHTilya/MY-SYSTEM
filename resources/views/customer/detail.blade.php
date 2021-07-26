
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
        <h3>Siku:{{$data['day']}}</h3>
        <br><br>
    
    </div>
<div class="custom-product3 ">
    <div class="center" >
      <a   href="#demo" class="btn btn-info" data-toggle="collapse">Weka Vipimo</a>
  <div id="demo" class="collapse">
    @if ($cat == 1)
                  
                  <!-- category 1-->
                  <form action="/addToCart" method="POST" role="form">
                    @csrf
                    <div class="form-row">
                      <div class="col">
                        <input type="hidden" name="product_id" value="{{$data['id']}}">
                      </div>
                        <div class="form-group col-md-6">
                        <input type="text" name="urefu" class="form-control"  placeholder="Urefu wa shati" required>
  
                      </div>
                      <div class="form-group col-md-6">
                        <input type="text" name="bega" class="form-control" id="psw" placeholder="Bega"required>
                      </div>
                      <div class="form-group col-md-6">
                        <input type="text" name="kifua" class="form-control" id="psw" placeholder="Kifua" required>
                      </div>
                      <div class="form-group col-md-6">
                        <input type="text" name="tumbo_kiuno" class="form-control" id="psw" placeholder="Tumbo au kiuno" required>
                      </div>
                      <div class="form-group col-md-6">
                        <input type="text" name="hipsi" class="form-control" id="psw" placeholder="Hipsi" required>
                      </div>
                      <div class="form-group col-md-6">
                        <input type="text" name="urefu_mkono" class="form-control" id="psw" placeholder="Urefu wa mkono" required>
                      </div>
                      <div class="form-group col-md-6">
                        <input type="text" name="upana_mkono" class="form-control" id="psw" placeholder="Upana wa mkono" required>
                      </div>  
                      
                    </div>
                    <div class="form-group col-md-6">
                      <input type="hidden" name="goti" value=0 class="form-control" id="psw" placeholder="Kifua">
                      <input type="hidden" name="fly" value=0 class="form-control" id="psw" placeholder="Kifua">
                      <input type="hidden" name="kiuno" value=0 class="form-control" id="psw" placeholder="Kifua">
                      <input type="hidden" name="upana_chini" value=0 class="form-control" id="psw" placeholder="Kifua">
                      <input type="hidden" name="paja" value=0 class="form-control" id="psw" placeholder="Kifua">
                      <input type="hidden" name="half" value=0 class="form-control" id="psw" placeholder="Kifua">    
                    </div>       
                         
                    <div class="form-group col-md-6">
                      <select name="kitambaa" id="id_select2_example" style="width: 70%;" required>
                        @foreach ($res as $res)
                        <option  value="{{$res->name}}" data-img_src="{{asset($res->gallery)}}">{{$res->name}}</option>                              
                        @endforeach
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
                      <div class="form-group col-md-6">
                      <input type="text" name="urefu" class="form-control"  placeholder="Urefu wa shati" required>

                    </div>
                    <div class="form-group col-md-6">
                      <input type="text" name="bega" class="form-control" id="psw" placeholder="Bega" required>
                    </div>
                    <div class="form-group col-md-6">
                      <input type="text" name="kifua" class="form-control" id="psw" placeholder="Kifua" required>
                    </div>
                    <div class="form-group col-md-6">
                      <input type="text" name="tumbo_kiuno" class="form-control" id="psw" placeholder="Tumbo au kiuno" required>
                    </div>
                    <div class="form-group col-md-6">
                      <input type="text" name="hipsi" class="form-control" id="psw" placeholder="Hipsi" required>
                    </div>
                    <div class="form-group col-md-6">
                      <input type="text" name="urefu_mkono" class="form-control" id="psw" placeholder="Urefu wa mkono" required>
                    </div>
                    <div class="form-group col-md-6 ">
                      <input type="text" name="upana_mkono" class="form-control" id="psw" placeholder="Upana wa mkono" required>
                    </div>  
                    <div class="form-group col-md-6">
                      <input type="hidden" name="goti" value=0 class="form-control" id="psw" placeholder="Kifua">
                      <input type="hidden" name="fly" value=0 class="form-control" id="psw" placeholder="Kifua">
                      <input type="hidden" name="kiuno" value=0 class="form-control" id="psw" placeholder="Kifua">
                      <input type="hidden" name="upana_chini" value=0 class="form-control" id="psw" placeholder="Kifua">
                      <input type="hidden" name="paja" value=0 class="form-control" id="psw" placeholder="Kifua">
                      <input type="hidden" name="half" value=0 class="form-control" id="psw" placeholder="Kifua">    
                    </div>       
                         
                    <div class="form-group col-md-6">
                      <select name="kitambaa" id="id_select2_example" style="width: 70%;" required>
                        @foreach ($res as $res)
                        <option  value="{{$res->name}}" data-img_src="{{asset($res->gallery)}}">{{$res->name}}</option>                              
                        @endforeach
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
                      <div class="form-group col-md-6">
                      <input type="text" name="urefu" class="form-control" id="usrname" placeholder="Urefu wa Suruali" required>
                    </div>
                    <div class="form-group col-md-6">
                      <input type="text" name="kiuno" class="form-control" id="psw" placeholder="Kiuno" required>
                    </div>
                    <div class="form-group col-md-6">
                      <input type="text" name="paja" class="form-control" id="psw" placeholder="Paja" required>
                    </div>
                    <div class="form-group col-md-6">
                      <input type="text" name="upana_chini" class="form-control" id="psw" placeholder="Upana wa Chini" required>
                    </div>
                    <div class="form-group col-md-6">
                      <input type="text" name="fly" class="form-control" id="psw" placeholder="Fleys au Zipu" required>
                    </div>
                    <div class="form-group col-md-6">
                      <input type="hidden" name="bega" value=0 class="form-control" id="psw" placeholder="Kifua">
                        <input type="hidden" name="kifua" value=0 class="form-control" id="psw" placeholder="Kifua">
                        <input type="hidden" name="tumbo_kiuno" value=0 class="form-control" id="psw" placeholder="Kifua">
                        <input type="hidden" name="hipsi" value=0 class="form-control" id="psw" placeholder="Kifua">
                        <input type="hidden" name="urefu_mkono" value=0 class="form-control" id="psw" placeholder="Kifua">
                        <input type="hidden" name="goti" value=0 class="form-control" id="psw" placeholder="Kifua">
                        <input type="hidden" name="upana_mkono" value=0 class="form-control" id="psw" placeholder="Kifua">                        
                        <input type="hidden" name="half" value=0 class="form-control" id="psw" placeholder="Kifua">
                      </div>       
                    <div class="form-group col-md-6">
                      <select name="kitambaa" id="id_select2_example" style="width: 70%;" required>
                        @foreach ($res as $res)
                        <option  value="{{$res->name}}" data-img_src="{{asset($res->gallery)}}">{{$res->name}}</option>                              
                        @endforeach
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
                      <div class="form-group col-md-6">
                      <input type="text" name="urefu" class="form-control" id="usrname" placeholder="Urefu wa Suruali" required>
                    </div>
                    <div class="form-group col-md-6">
                      <input type="text" name="kiuno" class="form-control" id="psw" placeholder="Kiuno" required>
                    </div>
                    <div class="form-group col-md-6">
                      <input type="text" name="paja" class="form-control" id="psw" placeholder="Paja" required>
                    </div>
                    <div class="form-group col-md-6">
                      <input type="text" name="upana_chini" class="form-control" id="psw" placeholder="Upana wa Chini" required>
                    </div>
                    <div class="form-group col-md-6">
                      <input type="text" name="fly" class="form-control" id="psw" placeholder="Fleys au Zipu" required>
                    </div>
                    <div class="form-group col-md-6">
                      <input type="hidden" name="bega" value=0 class="form-control" id="psw" placeholder="Kifua">
                        <input type="hidden" name="kifua" value=0 class="form-control" id="psw" placeholder="Kifua">
                        <input type="hidden" name="tumbo_kiuno" value=0 class="form-control" id="psw" placeholder="Kifua">
                        <input type="hidden" name="hipsi" value=0 class="form-control" id="psw" placeholder="Kifua">
                        <input type="hidden" name="urefu_mkono" value=0 class="form-control" id="psw" placeholder="Kifua">
                        <input type="hidden" name="goti" value=0 class="form-control" id="psw" placeholder="Kifua">
                        <input type="hidden" name="upana_mkono" value=0 class="form-control" id="psw" placeholder="Kifua">                        
                        <input type="hidden" name="half" value=0 class="form-control" id="psw" placeholder="Kifua">
                      </div>       
                    <div class="form-group col-md-6">
                      <select name="kitambaa" id="id_select2_example" style="width: 70%;" required>
                        @foreach ($res as $res)
                        <option  value="{{$res->name}}" data-img_src="{{asset($res->gallery)}}">{{$res->name}}</option>                              
                        @endforeach
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
                      <div class="form-group col-md-6">
                      <input type="text" name="urefu" class="form-control" id="usrname" placeholder="Urefu wa Suruali" required>
                    </div>
                    <div class="form-group col-md-6">
                      <input type="text" name="kiuno" class="form-control" id="psw" placeholder="Kiuno" required>
                    </div>
                    <div class="form-group col-md-6">
                      <input type="text" name="paja" class="form-control" id="psw" placeholder="Paja" required>
                    </div>
                    <div class="form-group col-md-6">
                      <input type="text" name="upana_chini" class="form-control" id="psw" placeholder="Upana wa Chini" required>
                    </div>
                    <div class="form-group col-md-6">
                      <input type="text" name="fly" class="form-control" id="psw" placeholder="Fleys au Zipu" required>
                    </div>
                    <div class="form-group col-md-6">
                      <input type="hidden" name="bega" value=0 class="form-control" id="psw" placeholder="Kifua">
                        <input type="hidden" name="kifua" value=0 class="form-control" id="psw" placeholder="Kifua">
                        <input type="hidden" name="tumbo_kiuno" value=0 class="form-control" id="psw" placeholder="Kifua">
                        <input type="hidden" name="hipsi" value=0 class="form-control" id="psw" placeholder="Kifua">
                        <input type="hidden" name="urefu_mkono" value=0 class="form-control" id="psw" placeholder="Kifua">
                        <input type="hidden" name="goti" value=0 class="form-control" id="psw" placeholder="Kifua">
                        <input type="hidden" name="upana_mkono" value=0 class="form-control" id="psw" placeholder="Kifua">                        
                        <input type="hidden" name="half" value=0 class="form-control" id="psw" placeholder="Kifua">
                      </div>       
                    <div class="form-group col-md-6">
                      <select name="kitambaa" id="id_select2_example" style="width: 70%;" required>
                        @foreach ($res as $res)
                        <option  value="{{$res->name}}" data-img_src="{{asset($res->gallery)}}">{{$res->name}}</option>                              
                        @endforeach
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
                      <div class="form-group col-md-6">
                      <input type="text" name="tumbo_kiuno" class="form-control" id="usrname" placeholder="Kiuno" required>
                    </div>
                    <div class="form-group col-md-6">
                      <input type="text" name="hipsi" class="form-control" id="psw" placeholder="Hipsi" required>
                    </div>
                    <div class="form-group col-md-6">
                      <input type="text" name="urefu" class="form-control" id="psw" placeholder="Urefu" required>
                    </div>
                    <div class="form-group col-md-6">
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
                    
                    <div class="form-group col-md-6">
                      <select name="kitambaa" id="id_select2_example" style="width: 70%;" required>
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
                      <div class="form-group col-md-6">
                      <input type="text" name="tumbo_kiuno" class="form-control" id="usrname" placeholder="kipimo cha Tumbo/kiuno" required>
                    </div>
                    <div class="form-group col-md-6">
                      <input type="text" name="hipsi" class="form-control" id="psw" placeholder="kipimo cha Hipsi" required>
                    </div>
                    <div class="form-group col-md-6">
                      <input type="text" name="paja" class="form-control" id="psw" placeholder="kipimo cha Paja" required>
                    </div>
                    <div class="form-group col-md-6">
                      <input type="text" name="goti" class="form-control" id="psw" placeholder="kipimo cha Goti" required>
                    </div>
                    <div class="form-group col-md-6">
                      <input type="text" name="upana_chini" class="form-control" id="psw" placeholder="kipimo cha Upana wa Chini" required>
                    </div>
                    <div class="form-group col-md-6">
                      <input type="text" name="fly" class="form-control" id="psw" placeholder="kipimo cha Fly" required>
                    </div>       
                    <div class="form-group col-md-6">
                      <select name="kitambaa" id="id_select2_example" style="width: 70%;" required>
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
{{View::make('customer/footer')}}

  @endsection
