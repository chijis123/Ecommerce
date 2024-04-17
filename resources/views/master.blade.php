<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-comm Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="new-integrity-value" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}

    <!-- jQuery -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha384-K+tz8wNEP7EjGnntX2BGVuRErzQ4+X0Z6Vs7yyOIS6E=" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"  crossorigin="anonymous"></script>

    <!-- Bootstrap 4.0.0 JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"  crossorigin="anonymous"></script>
</body>
<style>  

    .carousel {
        position: relative;
    }
    .carousel::after {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: linear-gradient(to right, transparent, black); /* Adjust gradient colors as needed */
        z-index: -1;
    }
 .custom-login{
        height: 500px;
        padding-top: 100px;
    }
    img.slider-img{
        height: 400px !important;
    }
    .custom-products{
        height: 400px;
    }
    .carousel-inner::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
  background: rgba(211, 211, 211, 0.5); /* Light grey background color with adjusted opacity */
  -webkit-mask-image: linear-gradient(rgba(0,0,0,1), rgba(0,0,0,0) 10%, rgba(0,0,0,0) 90%, rgba(0,0,0,1));
  mask-image: linear-gradient(rgba(0,0,0,1), rgba(0,0,0,0) 10%, rgba(0,0,0,0) 90%, rgba(0,0,0,1));
  -webkit-backdrop-filter: blur(5px); /* Adjust the blur amount as needed */
  backdrop-filter: blur(5px); /* Adjust the blur amount as needed */
}

.carousel-inner::after {
  content: '';
  position: absolute;
  top: 0;
  right: 0;
  width: 100%;
  height: 100%;
  z-index: 0; /* Set a lower z-index to ensure the background image is behind the content */
  background: url('your-image-url.jpg') center/cover no-repeat; /* Your background image */
}
.slider-text{
    /* background-color: #35443585 !important; */
    color: black;
}

.carousel-indicators .active {
    background-color: darkpink; /* Change the color of the active indicator */
  }
  
  .carousel-indicators li {
    background-color: black; /* Change the color of the inactive indicators */
  }
  .carousel-control-prev-icon,
  .carousel-control-next-icon {
    background-color: black; /* Change the color of the control icons */
  }
  .trending-image{
    height: 100px;

  }
  /* .trending-item{
    float: left;
    width: 20px;
  } */
  .trending-wrapper{
    margin: 30px;

  }
  .detail-img{
    height: 200px;
  }
  .cart-list-devider{
    border-bottom:1px solid #ccc;
    margin-bottom: 20px;
    padding-bottom: 20px;
  }



</style>
</html>
