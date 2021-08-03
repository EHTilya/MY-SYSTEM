@extends('customer/master')
@section('content')
<div class="custom-product3">
    <div class="col-sm-10">  
        <div class="trending-wrapper">
            <h1>Oda yako</h1>
            @foreach ($order as $item)
            <div class=" row searched-item cart-list-devider">
                <div class="col-sm-3">
                        <img  class="trending-image" src="{{$item->gallery}}" alt="Chania">
                </div>
                <div class="col-sm-4">
                    <div class="">
                    <h2>{{$item->name}}</h2>
                    <h5> <strong>Taarifa ya Utumaji:</strong>{{$item->order_status}}</h5>
                    <h5> <strong>Anuani ya Mteja:</strong>{{$item->address}}</h5>
                    <h5> <strong>Maelezo ya Oda:</strong>{{$item->description}}</h5>
                    <h5> <strong>Namba ya Simu:</strong>{{$item->phone}}</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>
@endsection