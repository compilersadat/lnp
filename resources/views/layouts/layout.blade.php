<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LateNightPizza</title>
    <link rel="icon" href="svg/logo.png" type="image/gif" sizes="60x60">
    <link rel="stylesheet " href="{{url('css/style.css')}}">
{{--    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">--}}
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
    <nav class="navbar navbar-expand-lg navbar-dark" style="background: #fff;">
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

                <!-- Links -->
                <ul class="navbar-nav mr-auto ">
                    <li class="nav-item ">
                        <a class="nav-link nav-link-ltr px-3" href="{{url('/')}}">Home

                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-ltr px-3" href="{{url('menu')}}">Menu </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-ltr  px-3" href="{{url('ourhistory')}}">Our Story</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-ltr  px-3" href="{{url('contactus')}}">Contact Us</a>
                    </li>
                    <li class="nav-item d-none d-md-block">
                        <a class="nav-link px-3">
                            <input type="search " class="px-3" placeholder="Search Pizza"><i class="fa fa-search ml-2 py-2 px-2 white-text" style="background: #FF1E56;font-size: 15px;"></i>
                        </a>
                    </li>

                </ul>
                <!-- Links -->
                <ul class="navbar-nav ml-auto pr-5 ">
                    @if(!Auth::guard('web')->user())
                    <li class="nav-item px-3">
                        <a class="nav-link  btn-shadow btn-color btn btn-sm px-5 font-weight-bold" href="{{url('login')}}" >Sign In</a>
                    </li>
                    @endif
                    @if(Auth::guard('web')->user())
                    <li class="nav-item px-3">
                        <a class="nav-link" href="{{route('home')}}">Welcome {{Auth::user()->name}}</a>
                    </li>
                    @endif
                    <li class="nav-link social_card px-3 d-none d-md-block">
                        <i class="fa fa-facebook  black-text "></i>
                    </li>
                    <li class="nav-link social_card px-3 d-none d-md-block">
                        <i class="fa fa-instagram  black-text"></i>
                    </li>
                    <li class="nav-link social_card px-3 d-none d-md-block">
                        <i class="fa fa-twitter  black-text"></i>
                    </li>
                </ul>


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
<section class="footer">
    <div class="container pt-5 pb-2">
        <div class="row ">
            <div class="col-md-8 ml-auto white-text text-center">
                <h1 class="h1 h1-responsive pt-4  white-text font-weight-bold ">Feeling in love? Purchase Orgafe !</h1>
                <p class="m-0 p-0">
                    561 Markham Road,  Scarborough, ON MH12A3.
                </p>
                <P class="">
                    Sun-Thu:11AM - 3AM <br>Fri-Sat:11AM - 4AM
                </P>
            </div>
        </div>
        <div class="text-center  pt-5 mt-5">
            <ul class="list-inline white-text font-weight-bold">
                <li class="list-inline-item px-2">Home</li>
                <li class="list-inline-item px-2">Menu</li>
                <li class="list-inline-item px-2">Our Story</li>
                <li class="list-inline-item px-2">Terms of service</li>
                <li class="list-inline-item px-2">Privacy Policy</li>
                <li class="list-inline-item px-2">Contact Us</li>
            </ul>
            <p class="white-text">©2003-2020 Late Night Pizza, Inc. All right reserved.</p>
        </div>
    </div>
</section>

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
