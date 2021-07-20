@extends('customer/master')
@section('content')
<div class="container custom-login">
    <div class="row justify-content-center">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="/login" method="POST" >
                @csrf
                
                <div class="form-group">
                  <label for="exampleInputEmail1"><b>Email address</b> </label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  <span style="color: red">@error('email'){{$message}} @enderror</span>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1"><b>Password</b></label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  <span style="color: red">@error('password'){{$message}} @enderror</span>
                  
                </div>
                
                <button type="submit" class="btn btn-primary">Login</button>
              </form>  

        </div>
        
    </div>
</div>    
@endsection


