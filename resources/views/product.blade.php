@extends('master')
@section('content')

<div class=" custom-products">
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
  @foreach($products as $item )
     <div class="carousel-item {{$item['id'] == 1? 'active' : ''}}">
        <a href="detail/{{$item['id']}}">
        <img class="slider-img" src="{{$item['gallery']}}" class="d-block w-100" >
        <div class="carousel-caption d-none d-md-block slider-text">
        <h3 style="color: yellow;">{{$item['name']}}</h3>
        <p  style="color: yellow;">{{$item['description']}}</p>
      </div></a>
    </div>
        @endforeach
 
  </div>
  <a class="carousel-control-prev " href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon " aria-hidden="true"></span>
    <span class="sr-only ">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<div class="trending-wrapper">
  <div class="container">
    <div class="text-center">
      <h3>Trending Products</h3>
    </div>
  </div>

  <div class="row justify-content-center"> <!-- Center the entire row -->
    @foreach($products as $item)
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="trending-item d-flex flex-column align-items-center"> <!-- Center the items -->
      <a href="detail/{{$item['id']}}">
      <img class="trending-image" src="{{$item['gallery']}}">
        <div class="text-center">
          <h5>{{$item['name']}}</h5>
        </div>
      </a> 
      </div>
    </div>
    @endforeach
  </div>
</div>

@endsection
