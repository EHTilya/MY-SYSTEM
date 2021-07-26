@extends('customer/master')
@section('content')
<div class="row">
    
    <div class="container">
        @foreach ($vit as $item)
            <div class="col-12 col-sm-6 col-md-4 image-grid-item">
                <div style="background-image: url({{$item->gallery}});" class="image-grid-cover">
                    <a  class="image-grid-clickbox"></a>
                    <a  class="cover-wrapper">{{$item->name}}</a>
                </div>
            </div>
            @endforeach
        </div>
</div>
{{View::make('customer/footer')}}

@endsection

<!------ Include the above in your HEAD tag ---------->

