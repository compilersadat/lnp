<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LateNightPizza</title>
    <link rel="icon" href="svg/logo.png" type="image/gif" sizes="60x60">
    <link rel="stylesheet " href="{{url('css/style.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
{{--    <link href="https://fonts.googleapis.com/css?family=Trade+Winds&display=swap" rel="stylesheet">--}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet " href="{{url('css/bootstrap.css')}}">
    <link rel="stylesheet " href="{{url('css/mdb.css')}}">
    <link rel="stylesheet " href="{{url('css/slick.css')}}">
    <link rel="stylesheet " href="{{url('css/slick-theme.css')}}">

<style>

    .slider {
        width: 100%;
        padding: 100px auto;
    }

    .slick-slide {
        margin: 0px 20px;
    }



    .slick-prev:before,
    .slick-next:before {
        color: black;
    }


    .slick-slide {
        transition: all ease-in-out .3s;
        opacity: ;
    }
    .navbar .dropdown-menu a:hover {
    color:#000!important;
    }


</style>
</head>
<body>
{{--<section class="py-1" style="background: #002E50;">--}}
{{--    <div class="container-fluid ">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-6 pb-0 mb-0">--}}

{{--            </div>--}}
{{--            <div class="col-md-6  pb-0 mb-0 text-right">--}}
{{--                <ul class="list-inline pb-0 mb-0">--}}
{{--                    <li class="list-inline-item social_card px-2">--}}
{{--                        <i class="fa fa-facebook black-text "></i>--}}
{{--                    </li>--}}
{{--                    <li class="list-inline-item social_card px-2">--}}
{{--                        <i class="fa fa-instagram  black-text"></i>--}}
{{--                    </li>--}}
{{--                    <li class="list-inline-item social_card px-2">--}}
{{--                        <i class="fa fa-twitter   black-text"></i>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}

{{--</section>--}}
<section>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top  " style="background: #fff;">
        <!-- Navbar brand -->
        <div class="container-fluid">
            <a class="navbar-brand  pr-3"  href="{{url('/')}}"><img src="{{asset('svg/logo.png')}}" width="80" height="80"></a>
            <!--            <a href="" class="black-text">-->
            <!--                Canada-->
            <!--                <br>-->
            <!--                +1987 6597 135-->
            <!--            </a>-->

            <!-- Collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation" style="background: #002E50;">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="basicExampleNav">

              
                 <ul class="navbar-nav ml-auto  ">
                 <li class="nav-item px-3 pt-2" style="font-size:14px;color:#002E50;">
                     <a class="nav-link "><i class="fa fa-phone"></i> Call us now<br>
                     <b style="font-size:10px;" class="m-0 p-0">&ensp;&ensp; 416 431 0300 , 416 288 1616<br>
                      </b>
                     </a>
                     </li>
                      <!-- Dropdown -->
			      <li class="nav-item dropdown pt-2 px-3 mt-1" style="font-size:14px;color:#002E50;">
			        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
			          aria-haspopup="true" aria-expanded="false">My Account</a>
			        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
			         @if(!Auth::guard('web')->user())
			          <a class="dropdown-item" href="{{url('login')}}" >
			          Login
			          </a>
			          @endif
			           @if(Auth::guard('web')->user())
			           <a class="dropdown-item" href="{{route('home')}}">My Profile</a>
			            @endif
			            <a class="dropdown-item" href="{{route('register')}}">Create Account</a>
			        </div>
			      </li>
                   
                    <li class="nav-item px-3 pt-1">
                        <a class="nav-link btn-floating  mx-1" style="background:red;padding-top:12px;font-size:18px;color:#fff!important;box-shadow:none;" href="{{route('cart')}}">
              <i class="fa fa-cart-plus"></i><sup style="color:#fff;margin-left:-3px;"> 
                {{ count((array) session('cart')) }}</sup></a>
                    </li>
                    
                    
                    
                    </ul>
                <!-- Links -->
                <!--<ul class="navbar-nav ml-auto pr-5 ">-->
                <!--    @if(!Auth::guard('web')->user())-->
                <!--    <li class="nav-item px-3">-->
                <!--        <a class="nav-link  btn-shadow btn-color btn btn-sm px-5 font-weight-bold" href="{{url('login')}}" >Sign In</a>-->
                <!--    </li>-->
                <!--    @endif-->
                <!--    @if(Auth::guard('web')->user())-->
                <!--    <li class="nav-item px-3">-->
                <!--        <a class="nav-link" href="{{route('home')}}">Welcome {{Auth::user()->name}}</a>-->
                <!--    </li>-->
                <!--    @endif-->
                <!--    <li class="nav-link social_card px-3 d-none d-md-block">-->
                <!--        <i class="fa fa-facebook  black-text "></i>-->
                <!--    </li>-->
                <!--    <li class="nav-link social_card px-3 d-none d-md-block">-->
                <!--        <i class="fa fa-instagram  black-text"></i>-->
                <!--    </li>-->
                <!--    <li class="nav-link social_card px-3 d-none d-md-block">-->
                <!--        <i class="fa fa-twitter  black-text"></i>-->
                <!--    </li>-->
                <!--</ul>-->


            </div>
        </div>
        <!-- Collapsible content -->
    </nav>
    <!--/.Navbar-->
</section>
<section>
    @yield('content')
</section>
<!-- Footer -->
<!-- Footer -->
<footer class="page-footer font-small  pt-4" style="background:#002E50;">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Content -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4"><a href="{{url('/')}}">Late Night Pizza</a></h5>
        <ul class="list-unstyled">
          <li>
            <a href="{{route('menu')}}">Menu</a>
          </li>
          <li>
            <a href="#!">Our Story</a>
          </li>
          
          <li>
            <a href="{{route('contact')}}">Contact Us</a>
          </li>
<li>
            <a href="#!">Careers</a>
          </li>
          <li>
            <a href="#!">Terms of service</a>
          </li>
           <li>
            <a href="#!">Privacy Policy</a>
          </li>
        </ul>


      </div>

     
      <!-- Grid column -->
    

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Address 1</h5>

        <p class="m-0 p-0">
                                <i class="fa fa-map-marker"></i>  561 Markham Road,  Scarborough, ON M1H 2A3.
                                    <br>
                                    <i class="fa fa-phone"></i> 416 431 0300
                                </p>
      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Address 2</h5>

         <p class=" p-0 m-0">
                                    <i class="fa fa-map-marker"></i> 2655 Lawrence ave East,  Scarborough, ON M1P SA3
                                    .<br>
                                   <i class="fa fa-phone"></i>  416 288 1616    
                                   </p>

      </div>
      <!-- Grid column -->
       <hr class="clearfix w-100 d-md-none">
<div  class="col-md-3">
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Follow Us</h5>

<!-- Social buttons -->
  <ul class="list-unstyled list-inline ">
    <li class="list-inline-item text-center">
      <a class="btn-floating btn-fb mx-1 " style="background:#3b5999!important;padding-top:10px;">
        <i class="fa fa-facebook-f" > </i>
      </a>
    </li>
    <li class="list-inline-item text-center">
      <a class="btn-floating btn-tw mx-1" style="padding-top:10px;">
        <i class="fa fa-twitter"> </i>
      </a>
    </li>
    <li class="list-inline-item text-center">
      <a class="btn-floating btn-gplus mx-1" style="background: #3f729b!important;padding-top:10px;">
        <i class="fa fa-instagram"> </i>
      </a>
    </li>
  </ul>
  <!-- Social buttons -->

</div>


    </div>
    <!-- Grid row -->


  </div>
  <!-- Footer Links -->


  <hr>

  
  <!-- Copyright -->
  <div class="footer-copyright text-center pb-3 ">©2003-2020 Late Night Pizza, Inc. All right reserved.
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

</body>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="{{url('js/slick.js')}}"></script>
<script type="text/javascript">
    $(document).on('ready', function() {
        $(".vertical-center-4").slick({
            dots: false,
            arrows:true,
            vertical: false,
            autoplay:true,
            centerMode: true,
            slidesToShow: 4,
            slidesToScroll: 2,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        dots: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        dots: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }
            ]
        });
        $(".vertical-center-1").slick({
            dots: false,
            arrows:false,
            vertical: false,
            autoplay:true,
            centerMode: true,
            slidesToShow: 2,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        dots: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        dots: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }
            ]
        });
    });
</script>

<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/mdb.js')}}"></script>
</html>
