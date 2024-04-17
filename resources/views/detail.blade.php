@extends('master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$data['gallery']}}" >
        </div>
        <div class="col-sm-6">
        <a href="{{route('product')}}">Go Back</a>
        <h2><b>Name:</b> {{$data['name']}}</h2>
        <h3><b>Price:</b> {{$data['price']}}</h3>
        <h4><b>Description:</b> {{$data['description']}}</h4>
        <h4><b>Category:</b> {{$data['category']}}</h4>
        <br><br>
        <form action="/add_to_cart" method="post">
            @csrf
            <input type="hidden" name="product_id" value="{{$data['id']}}">
            <button class="btn btn-primary">Add to Cart</button>
        </form>
        <br><br>
        <a class="btn btn-success" href="{{url('ordernow')}}">Buy NOw</a> 
</div>
    </div>
</div>


@endsection
