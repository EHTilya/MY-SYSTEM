@extends('customer/master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/about.css">

  
</head>
<body>
<div class="about">
  <h1 class="hh1">
    ABOUT US
    <br>
    <img src="https://image.ibb.co/nk616F/Layer_1_copy_21.png" width="47" height="11" align="center">
    </h1>
    <article>
      <p class="pp">
      ONLINE TAILORING MANAGEMENT SYSTEM ni mfumo unaomilikiwa na VETA katika kurahisisha utoaji 
      wa huduma ya ushonaji wa Nguo mbalimbali kwa wateja wake kwa njia nyepesi na bora ambapo mteja ataweza
      kusajili taarifa zake  zitakzomwezesha kupata huduma hii kikamilifu ikiwemo kuchagua 
      mitindo ya nguo, kutuma vipimo,  VETA Control number kwa ajili ya malipo na kuweka oda itakayofanyiwa kazi kwa siku kadhaa 
      kutegemea na aina ya mtindo aliyochagua Mteja   
      </p>
    </article>
    
</div>
{{View::make('customer/footer')}}

</body>
</html>
    
@endsection