@extends('master')
@section('content')

<div class="trending-wrapper">
  <div class="container">
    <div class="text-center">
      <h3>Searching Products</h3>
    </div>
  </div>

  <div class="row justify-content-center"> <!-- Center the entire row -->
    @foreach($data as $item)
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="trending-item d-flex flex-column align-items-center"> <!-- Center the items -->
      <a href="detail/{{$item['id']}}">
      <img class="trending-image" src="{{$item['gallery']}}">
        <div class="text-left">
          <h5><b>Name :</b> {{$item['name']}}</h5>
          <h5><b>Name :</b> {{$item['description']}}</h5>
          <h5><b>Category :</b> {{$item['category']}}</h5>
          <h5><b>Price :</b>{{$item['price']}}</h5>
        </div>
      </a> 
      </div>
    </div>
    @endforeach
  </div>
</div>

@endsection
