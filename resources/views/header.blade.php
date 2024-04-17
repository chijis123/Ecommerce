
<?php
use App\Http\Controllers\productcontroller;
use Illuminate\Support\Facades\Auth;
$total = 0;
if(Session::has('user')){
$total = productcontroller::cartitem();
}



?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">E-Comm</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ">
    
      <li class="nav-item">
        <a class="nav-link" href="/product">Home </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link " href="myorders">Orders</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="/search">
      <input class="form-control mr-sm-2" name="query" type="search" placeholder="Search" aria-label="Search" value="{{ isset($query) ? $query : '' }}">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" ">Search</button>
    </form>
    
    <!-- Example split danger button -->
    <div class="navbar-nav ml-auto">
  <div class="row">
  <div class="col-md-auto">
      <ul class="nav ml-auto" >
        <li class="nav-item">
          <a class="nav-link" href="/cartlist"><i class="bi bi-cart-check-fill"></i>({{$total}})</a>
        </li>
        
        @if(!Session::has('user'))
        <li class="nav-item ">
          
          <a class="nav-link" href="/register">Register</a>
        @endif
        
        </li>
      </ul>
    </div>
    <div class="col-md-auto ">
      @if(Session::has('user'))
      <div class="btn-group">
        <b  class="btn btn-warning">{{Session::get('user')['name']}}</b>
        <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="/logout">Logout</a>
        </div>
      </div>
      @endif
    </div>
  </div>
</div>

    
  </div>
</nav>