@extends('customer/master')
@section('content')

    <div class="container custom-order3">
        <div class="cl-sm-10">
            <table class="table">
                <tbody>
                  <tr>
                    <td><b>Amount</b></td>
                    <td>Tsh {{$total}}</td>
                  </tr>
                  <tr>
                    <td><b>Tax</b></td>
                    <td>Tsh 0</td>
                  </tr>
                  <tr>
                    <td><b>Delivery</b></td>
                    <td>Tsh 2000</td>
                  </tr>
                  <tr>
                    <td><b>Total Amount</b></td>
                    <td>Tsh {{$total+2000}}</td>
                  </tr>
                </tbody>
              </table>
        </div>
        <div>
            <form action="/orderplace" method="POST">
                @csrf
                <div class="form-group">
                  <input type="text" name="address" class="form-control" placeholder="enter your Address"><br>
                  <span style="color: red">@error('address'){{$message}} @enderror</span>

                </div>
                <div class="form-group">
                    <textarea name="description" id="1" cols="60" rows="5" placeholder="Any Order description"></textarea>
                </div>  
                <div class="form-group">
                  <input type="number" name="phone" class="form-control" placeholder="enter phone number"><br>
                </div>
                <span style="color: red">@error('phone'){{$message}} @enderror</span>

                <div class="form-group">
                  <label for="pwd">Control Number</label><br>
                  <input  type="radio" name="payment" checked >
                   <span id="demo" ></span>
                   <script>
                    document.getElementById('demo').innerHTML= random(574155645, 999454545)
                   function random(min, max){
                     var step1= max -min + 1;
                     var step2 = Math.random() * step1;
                     var result =Math.floor(step2) + min;
                     return result;
                    }
                    </script>
                </div> 
                <p>Namna ya Kufanya Malipo</p>
                <div class="panel-group" id="accordion">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                        M-Pesa</a>
                      </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse in">
                      <div class="panel-body">
                        <p>1.Piga *150*00#</p>
                        <p>2.Chagua namba(4) "Lipa kwa M-Pesa"</p>
                        <p>3.Chagua (5) "Malipo ya serikali"</p>
                        <p>4.Ingiza namba ya kumbukumbu ya Malipo (Control Number)</p>
                        <p>5.Ingiza kiasi cha pesa unachotakiwa kulipa</p>
                        <p>6.Ingiza namba ya siri kuhakiki</p>
                        <p>7.Thibitisha kwa kuchagua (1)</p>

                        .</div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                        Tigo pesa</a>
                      </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p>1.Piga *150*01#</p>
                        <p>2.Chagua namba(4) "Lipa Bili"</p>
                        <p>3.Chagua (5) "Malipo ya serikali"</p>
                        <p>4.Ingiza namba ya kumbukumbu ya Malipo (Control Number)</p>
                        <p>5.Ingiza kiasi cha pesa unachotakiwa kulipa</p>
                        <p>6.Ingiza namba ya siri kuhakiki</p>
                        </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                        Airtel Money</a>
                      </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p>1.Piga *150*60#</p>
                        <p>2.Chagua namba(4) "Lipa Bili"</p>
                        <p>3.Chagua (5) "Malipo ya serikali"</p>
                        <p>4.Chagua namba 1 "Weka namba ya Kumbukumbu"</p>
                        <p>5.Ingiza namba ya kumbukumbu ya malipo (control number)</p>
                        <p>6.Ingiza kiasi cha pesa</p>
                        <p>6.Weka namba ya siri</p>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                        T-Pesa</a>
                      </h4>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p>1. Piga *150*71#</p>
                        <p> 2. Chagua namba (5) “Lipia Bili”</p>
                         <p>3. Chagua (3) “Malipo ya Serikali” </p>
                         <p>4. Ingiza kumbukumbu namba (control number)</p>
                         <p>5. Ingiza kiasi</p>
                         <p>6. Ingiza namba ya siri</p>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
                        Halo Pesa</a>
                      </h4>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p>1. Piga *150*88#</p>
                        <p> 2. Chagua namba (5) “Lipia Bili”</p>
                         <p>3. Chagua (5) “Malipo ya Serikali” </p>
                         <p>4. Weka namba ya kumbukumbu ya malipo (control number))</p>
                         <p>5. Ingiza kiasi cha pesa</p>
                         <p>6. Weka namba ya siri </p>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
                        Kwa njia ya kuweka Fedha Benki (Direct Bank Deposit).
                        </a>
                      </h4>
                    </div>
                    <div id="collapse6" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p>Pia Malipo yanaweza kufanyika kwa kuweka fedha katika benki zilizojiunga na GePG, mfano: NMB / 
                          CRDB / TPB/ NBC/ PBZ/ DTB/ EXIM/ TIB/ STANBIC, DCB na BoT kwa kupitia matawi ya benki, 
                          mawakala wa Benki na njia nyingine za malipo zitolewazo na Benki. Tumia Namba ya kumbukumbu 
                          ya Malipo (Control Number) uliyopewa unapofanya Malipo</p>
                    </div>
                  </div>
                </div>
                <br>    
                <button type="submit" class="btn btn-success">Order Now</button>
              </form>
            
        </div>
    </div>
      
     
@endsection
