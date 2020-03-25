@extends('layouts.layout')
@section('content')
    <!--Carousel Wrapper-->
    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-1z" data-slide-to="1"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <!--First slide-->
            <div class="carousel-item  py-3 active" style="background:#002E50;">
                <div class="slider-spacing">
                    <div class="row px-5">
                        <div class="col-md-5  col-sm-4">
                            <img class="img-fluid img" src="{{asset('svg/slider1.png')}}"
                                 alt="First slide">
                        </div>
                        <div class="col-md-7  col-sm-8 px-4 pt-5 " >
                            <h1 class="h1 h1-responsive  text-uppercase slider-text  font-weight-bold" style="color: #fff;text-shadow: 2px 2px 2px  #bababa;">Want Somthing <br>Real & Juicy</h1>
                            <p class="text-justify  d-none d-md-block" style="color: #eeeeee;  ">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex molestias neque quaerat quia! Beatae iste quam quos. A ab aliquid, deleniti dolorum.
                            </p>
                            <div class="mt-2">
                                <a href="" class="btn px-5 btn-color font-weight-bold mb-5" >
                                    Order Now
                                </a>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
            <div class="carousel-item  py-3 " style="background:#002E50;">
                <div class="slider-spacing">
                    <div class="row px-5">
                        <div class="col-md-7 px-4 pt-5 " >
                            <h1 class="h1 h1-responsive pt-4  text-uppercase slider-text font-weight-bold" style="color: #fff;text-shadow: 2px 2px 2px  #bababa;">Want Somthing <br>Real & Juicy</h1>
                            <p class="text-justify  d-none d-md-block" style="color: #eeeeee;  ">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex molestias neque quaerat quia! Beatae iste quam quos. A ab aliquid, deleniti dolorum.
                            </p>
                            <div class="mt-2">
                                <a href="" class="btn px-5 btn-color font-weight-bold " >
                                    Order Now
                                </a>
                            </div>

                        </div>
                        <div class="col-md-5 ">
                            <img class="img-fluid img slider-img" src="{{asset('svg/slider1.png')}}"
                                 alt="First slide">
                        </div>

                    </div>
                </div>


            </div>

            <!--            <div class="py-5 ">-->
            <!--                <div class="row py-5">-->
            <!--                    <div class="col-md-6 text-center ">-->
            <!--                        <img class="img-fluid img" src="img/1582821354-delivery-deal.png"-->
            <!--                             alt="First slide">-->
            <!--                    </div>-->
            <!--                    <div class="col-md-5 px-4" >-->
            <!--                        <p class="pt-5 white-text" >-->
            <!--                            Lorem ipsum dolor sit amet, consectetur adipisici-->
            <!--                        </p>-->
            <!--                        <h1 class="h1 h1-responsive white-text  text-uppercase font_head font-weight-bold">Free Crazy Bread</h1>-->
            <!--                        <p class="text-justify white-text">-->
            <!--                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex molestias neque quaerat quia! Beatae iste quam quos. A ab aliquid, deleniti dolorum.-->
            <!--                        </p>-->
            <!--                        <a href="" class="btn px-5 btn-customs">-->
            <!--                            Order Now-->
            <!--                        </a>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->


            <!--        </div>-->

        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->
    <div class="container my-5">
        <section class="vertical-center-4 slider ">
            <div>
                <div class="mb-3">
                    <!-- Card -->
                    <div class=" card_style bg-color">
                        <!-- Card content -->

                        <div class="card-body ">
                            <div class="">
                                <img src="{{asset('svg/resturant/imageedit_11_5349370466.png')}}" class="img-fluid">

                            </div>

                            <!-- Title -->
                            <div class=" pt-2 text-center">
                                <h6 class="font-weight-bold web-color h6 h6-responsive  pizza" >LNP SPECIALS    </h6>

                            </div>


                        </div>

                    </div>

                    <!-- Card -->
                </div>

            </div>
            <div>

                <div class="">
                    <!-- Card -->
                    <div class=" card_style bg-color">
                        <!-- Card content -->

                        <div class="card-body ">
                            <div class="">
                                <img src="{{asset('svg/resturant/imageedit_10_7762698007.png')}}" class="img-fluid">

                            </div>

                            <!-- Title -->
                            <div class=" pt-2 text-center">
                                <h6 class="font-weight-bold web-color h6 h6-responsive  pizza" >MIX & MATCH    </h6>

                            </div>


                        </div>

                    </div>

                    <!-- Card -->
                </div>
            </div>
            <div>
                <div class="">
                    <!-- Card -->
                    <div class=" card_style bg-color">
                        <!-- Card content -->

                        <div class="card-body ">
                            <div class="">
                                <img src="{{asset('svg/resturant/cat2.png')}}" class="img-fluid">

                            </div>

                            <!-- Title -->
                            <div class=" pt-2 text-center">
                                <h6 class="font-weight-bold web-color h6 h6-responsive  pizza" >TOPPINGS    </h6>

                            </div>


                        </div>

                    </div>

                    <!-- Card -->
                </div>
            </div>
            <div>
                <div class="">
                    <!-- Card -->
                    <div class=" card_style bg-color">
                        <!-- Card content -->

                        <div class="card-body ">
                            <div class="">
                                <img src="{{asset('svg/resturant/imageedit_9_2732721459.png')}}" class="img-fluid">

                            </div>

                            <!-- Title -->
                            <div class=" pt-2 text-center">
                                <h6 class="font-weight-bold web-color h6 h6-responsive  pizza" >SPECIAL PIZZA</h6>

                            </div>


                        </div>

                    </div>

                    <!-- Card -->
                </div>
            </div>
            <div>
                <div class="">
                    <!-- Card -->
                    <div class=" card_style bg-color">
                        <!-- Card content -->

                        <div class="card-body ">
                            <div class="">
                                <img src="{{asset('svg/resturant/imageedit_11_5349370466.png')}}" class="img-fluid">

                            </div>

                            <!-- Title -->
                            <div class=" pt-2 text-center">
                                <h6 class="font-weight-bold web-color h6 h6-responsive  pizza" >SINGLE PIZZA
                                </h6>

                            </div>


                        </div>

                    </div>

                    <!-- Card -->
                </div>
            </div>

        </section>

    </div>

    {{--<section class="my-5 py-5">--}}
    {{--    <div class="container">--}}
    {{--        <div class="row m-0 p-0" >--}}
    {{--            <div class="col-md-3 mt-2">--}}
    {{--                <!-- Card -->--}}
    {{--                <div class=" card_style bg-color">--}}
    {{--                    <!-- Card content -->--}}

    {{--                    <div class="card-body ">--}}
    {{--                        <div class="">--}}
    {{--                            <img src="{{asset('svg/resturant/imageedit_11_5349370466.png')}}" class="img-fluid">--}}

    {{--                        </div>--}}

    {{--                        <!-- Title -->--}}
    {{--                        <div class=" pt-2 text-center">--}}
    {{--                            <h6 class="font-weight-bold web-color h6 h6-responsive  pizza" >LNP SPECIALS    </h6>--}}

    {{--                        </div>--}}


    {{--                    </div>--}}

    {{--                </div>--}}

    {{--                <!-- Card -->--}}
    {{--            </div>--}}
    {{--            <div class="col-md-3 mt-2">--}}
    {{--                <!-- Card -->--}}
    {{--                <div class=" card_style bg-color">--}}
    {{--                    <!-- Card content -->--}}

    {{--                    <div class="card-body ">--}}
    {{--                        <div class="">--}}
    {{--                            <img src="{{asset('svg/resturant/imageedit_10_7762698007.png')}}" class="img-fluid">--}}

    {{--                        </div>--}}

    {{--                        <!-- Title -->--}}
    {{--                        <div class=" pt-2 text-center">--}}
    {{--                            <h6 class="font-weight-bold web-color h6 h6-responsive  pizza" >MIX & MATCH    </h6>--}}

    {{--                        </div>--}}


    {{--                    </div>--}}

    {{--                </div>--}}

    {{--                <!-- Card -->--}}
    {{--            </div>--}}
    {{--            <div class="col-md-3 mt-2">--}}
    {{--                <!-- Card -->--}}
    {{--                <div class=" card_style bg-color">--}}
    {{--                    <!-- Card content -->--}}

    {{--                    <div class="card-body ">--}}
    {{--                        <div class="">--}}
    {{--                            <img src="{{asset('svg/resturant/cat2.png')}}" class="img-fluid">--}}

    {{--                        </div>--}}

    {{--                        <!-- Title -->--}}
    {{--                        <div class=" pt-2 text-center">--}}
    {{--                            <h6 class="font-weight-bold web-color h6 h6-responsive  pizza" >TOPPINGS    </h6>--}}

    {{--                        </div>--}}


    {{--                    </div>--}}

    {{--                </div>--}}

    {{--                <!-- Card -->--}}
    {{--            </div>--}}
    {{--            <div class="col-md-3 mt-2">--}}
    {{--                <!-- Card -->--}}
    {{--                <div class=" card_style bg-color">--}}
    {{--                    <!-- Card content -->--}}

    {{--                    <div class="card-body ">--}}
    {{--                        <div class="">--}}
    {{--                            <img src="{{asset('svg/resturant/imageedit_9_2732721459.png')}}" class="img-fluid">--}}

    {{--                        </div>--}}

    {{--                        <!-- Title -->--}}
    {{--                        <div class=" pt-2 text-center">--}}
    {{--                            <h6 class="font-weight-bold web-color h6 h6-responsive  pizza" >SPECIAL PIZZA</h6>--}}

    {{--                        </div>--}}


    {{--                    </div>--}}

    {{--                </div>--}}

    {{--                <!-- Card -->--}}
    {{--            </div>--}}
    {{--            <div class="col-md-3 mt-2">--}}
    {{--                <!-- Card -->--}}
    {{--                <div class=" card_style bg-color">--}}
    {{--                    <!-- Card content -->--}}

    {{--                    <div class="card-body ">--}}
    {{--                        <div class="">--}}
    {{--                            <img src="{{asset('svg/resturant/imageedit_11_5349370466.png')}}" class="img-fluid">--}}

    {{--                        </div>--}}

    {{--                        <!-- Title -->--}}
    {{--                        <div class=" pt-2 text-center">--}}
    {{--                            <h6 class="font-weight-bold web-color h6 h6-responsive  pizza" >SINGLE PIZZA--}}
    {{--                            </h6>--}}

    {{--                        </div>--}}


    {{--                    </div>--}}

    {{--                </div>--}}

    {{--                <!-- Card -->--}}
    {{--            </div>--}}


    {{--        </div>--}}
    {{--    </div>--}}
    {{--</section>--}}
    {{--<section class="menu py-5 my-5" >--}}
    {{--<div class="container">--}}
    {{--    <h2 class="h2 h2-responsive text-center pizza">DAILY SPECIAL</h2>--}}
    {{--    <p class="text-center">Everyday Is Special  </p>--}}
    {{--    <section class="vertical-center-1 slider">--}}

    {{--        <div>--}}
    {{--            <div class=" mt-2 ">--}}

    {{--                <!-- Card -->--}}
    {{--                <div class="card  ">--}}
    {{--                    <div class="ribbon"><span>Free</span></div>--}}

    {{--                    <div class="row m-0 p-0">--}}
    {{--                        <div class="col-md-5 col-5 m-0 p-0">--}}
    {{--                            <div class="view  my-3 overlay ">--}}
    {{--                                <img class=""  style="width: 100%;"   src="{{asset('svg/resturant/imageedit_5_8013164942.png')}}"--}}
    {{--                                     alt="Card image cap">--}}
    {{--                                <a href="#!">--}}
    {{--                                    <div class="mask rgba-white-slight"></div>--}}
    {{--                                </a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-7 col-7 m-0 p-0">--}}
    {{--                            <div class="card-body m-0 py-3">--}}

    {{--                                <!-- Title -->--}}
    {{--                                <h5 class="h5 h5-responsive m-0 py-2 font-weight-bold ">MONDAY <b class="red-text small">Pizza feast</b> </h5>--}}
    {{--                                <p style="font-size: 13px;" class="p-0 m-0">--}}
    {{--                                    Small Pizza--}}
    {{--                                    <br>With XL Pizza--}}
    {{--                                </p>--}}
    {{--                                <p class="p-0 m-0" style="font-size: 13px;">--}}
    {{--                                    $15.99 <strike>$20.00</strike>--}}
    {{--                                </p>--}}
    {{--                                <!-- Text -->--}}


    {{--                                <!-- Button -->--}}
    {{--                                <a href="{{url('cart')}}" class="btn btn-inside btn-sm font-weight-bold web-color mt-2" style="color: #002E50!important;" >Add To Cart</a>--}}

    {{--                            </div>--}}

    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <!-- Card image -->--}}


    {{--                    <!-- Card content -->--}}

    {{--                </div>--}}
    {{--                <!-- Card -->--}}
    {{--            </div>--}}

    {{--        </div>--}}
    {{--        <div>--}}
    {{--            <div class=" mt-2 ">--}}

    {{--                <!-- Card -->--}}
    {{--                <div class="card  ">--}}
    {{--                    <div class="ribbon"><span>Buy 1 Get 1</span></div>--}}

    {{--                    <div class="row m-0 p-0">--}}
    {{--                        <div class="col-md-5 col-5 m-0 p-0">--}}
    {{--                            <div class="view  my-3 overlay ">--}}
    {{--                                <img class=""  style="width: 100%;"   src="{{asset('svg/resturant/slider1.png')}}"--}}
    {{--                                     alt="Card image cap">--}}
    {{--                                <a href="#!">--}}
    {{--                                    <div class="mask rgba-white-slight"></div>--}}
    {{--                                </a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-7 col-7 m-0 p-0">--}}
    {{--                            <div class="card-body m-0 py-3">--}}

    {{--                                <!-- Title -->--}}
    {{--                                <h5 class="h5 h5-responsive m-0 py-2 font-weight-bold ">TUESDAY <b class="small red-text font-weight-bold">Pizza Day</b> </h5>--}}
    {{--                                <p style="font-size: 13px;" class="p-0 m-0">--}}
    {{--                                    Large Pizza,3 Toppings,1 Dipping Sauce--}}
    {{--                                </p>--}}
    {{--                                <p class="p-0 m-0" style="font-size: 13px;">--}}
    {{--                                    $15.99  <strike>$20.66</strike>--}}
    {{--                                </p>--}}
    {{--                                <!-- Text -->--}}


    {{--                                <!-- Button -->--}}
    {{--                                <a href="#" class="btn btn-inside btn-sm font-weight-bold web-color mt-2" style="color: #002E50!important;" >Add To Cart</a>--}}

    {{--                            </div>--}}

    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <!-- Card image -->--}}


    {{--                    <!-- Card content -->--}}

    {{--                </div>--}}
    {{--                <!-- Card -->--}}
    {{--            </div>--}}

    {{--        </div>--}}
    {{--        <div>--}}
    {{--            <div class=" mt-2 ">--}}

    {{--                <!-- Card -->--}}
    {{--                <div class="card  ">--}}

    {{--                    <div class="row m-0 p-0">--}}
    {{--                        <div class="col-md-5 col-5 m-0 p-0">--}}
    {{--                            <div class="view  my-3 overlay ">--}}
    {{--                                <img class=""  style="width: 100%;"   src="{{asset('svg/resturant/imageedit_11_5349370466.png')}}"--}}
    {{--                                     alt="Card image cap">--}}
    {{--                                <a href="#!">--}}
    {{--                                    <div class="mask rgba-white-slight"></div>--}}
    {{--                                </a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-7 col-7 m-0 p-0">--}}
    {{--                            <div class="card-body m-0 py-3">--}}

    {{--                                <!-- Title -->--}}
    {{--                                <h5 class="h5 h5-responsive m-0 py-2 font-weight-bold ">WEDNESDAY <b class="small red-text font-weight-bold">Pay Less</b> </h5>--}}
    {{--                                <p style="font-size: 13px;" class="p-0 m-0">--}}
    {{--                                    Large Pizza,3 Toppings,1 Dipping Sauce--}}
    {{--                                </p>--}}
    {{--                                <p class="p-0 m-0" style="font-size: 13px;">--}}
    {{--                                    $15.99 <strike>$20.00</strike>--}}
    {{--                                </p>--}}
    {{--                                <!-- Text -->--}}



    {{--                                <!-- Button -->--}}
    {{--                                <a href="#" class="btn btn-inside btn-sm font-weight-bold web-color mt-2" style="color: #002E50!important;" >Add To Cart</a>--}}

    {{--                            </div>--}}

    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <!-- Card image -->--}}


    {{--                    <!-- Card content -->--}}

    {{--                </div>--}}
    {{--                <!-- Card -->--}}
    {{--            </div>--}}

    {{--        </div>--}}
    {{--        <div>--}}
    {{--            <div class=" mt-2 ">--}}

    {{--                <!-- Card -->--}}
    {{--                <div class="card  ">--}}

    {{--                    <div class="row m-0 p-0">--}}
    {{--                        <div class="col-md-5 col-5 m-0 p-0">--}}
    {{--                            <div class="view  my-3 overlay ">--}}
    {{--                                <img class=""  style="width: 100%;"   src="{{asset('svg/resturant/sat.png')}}"--}}
    {{--                                     alt="Card image cap">--}}
    {{--                                <a href="#!">--}}
    {{--                                    <div class="mask rgba-white-slight"></div>--}}
    {{--                                </a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-7 col-7 m-0 p-0">--}}
    {{--                            <div class="card-body m-0 py-3">--}}

    {{--                                <!-- Title -->--}}
    {{--                                <h5 class="h5 h5-responsive m-0 py-2 font-weight-bold ">THURSDAY <b class="small font-weight-bold red-text">Shawarma Day</b> </h5>--}}
    {{--                                <p style="font-size: 13px;" class="p-0 m-0">--}}
    {{--                                    2 Shawarma Wraps ,<br> 2 POPS--}}
    {{--                                </p>--}}
    {{--                                <p class="p-0 m-0" style="font-size: 13px;">--}}
    {{--                                    $15.99 <strike>$19.00</strike>--}}
    {{--                                </p>--}}
    {{--                                <!-- Text -->--}}



    {{--                                <!-- Button -->--}}
    {{--                                <a href="#" class="btn btn-inside btn-sm font-weight-bold web-color mt-2" style="color: #002E50!important;" >Add To Cart</a>--}}

    {{--                            </div>--}}

    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <!-- Card image -->--}}


    {{--                    <!-- Card content -->--}}

    {{--                </div>--}}
    {{--                <!-- Card -->--}}
    {{--            </div>--}}

    {{--        </div>--}}
    {{--        <div>--}}
    {{--            <div class=" mt-2 ">--}}

    {{--                <!-- Card -->--}}
    {{--                <div class="card  ">--}}

    {{--                    <div class="row m-0 p-0">--}}
    {{--                        <div class="col-md-5 col-5 m-0 p-0">--}}
    {{--                            <div class="view  my-3 overlay ">--}}
    {{--                                <img class=""  style="width: 100%;"   src="{{asset('svg/resturant/sat.png')}}"--}}
    {{--                                     alt="Card image cap">--}}
    {{--                                <a href="#!">--}}
    {{--                                    <div class="mask rgba-white-slight"></div>--}}
    {{--                                </a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-7 col-7 m-0 p-0">--}}
    {{--                            <div class="card-body m-0 py-3">--}}

    {{--                                <!-- Title -->--}}
    {{--                                <h5 class="h5 h5-responsive m-0 py-2 font-weight-bold ">FRYDAY <b class="small font-weight-bold red-text">Pay Less</b> </h5>--}}
    {{--                                <p style="font-size: 13px;" class="p-0 m-0">--}}
    {{--                                    Large Pizza,3 Toppings,1 Dipping Sauce--}}
    {{--                                </p>--}}
    {{--                                <p class="p-0 m-0" style="font-size: 13px;">--}}
    {{--                                    $15.99 <strike>$20.00</strike>--}}
    {{--                                </p>--}}
    {{--                                <!-- Text -->--}}


    {{--                                <!-- Button -->--}}
    {{--                                <a href="#" class="btn btn-inside btn-sm font-weight-bold web-color mt-2" style="color: #002E50!important;" >Add To Cart</a>--}}

    {{--                            </div>--}}

    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <!-- Card image -->--}}


    {{--                    <!-- Card content -->--}}

    {{--                </div>--}}
    {{--                <!-- Card -->--}}
    {{--            </div>--}}

    {{--        </div>--}}
    {{--        <div>--}}
    {{--            <div class=" mt-2 ">--}}

    {{--                <!-- Card -->--}}
    {{--                <div class="card  ">--}}

    {{--                    <div class="row m-0 p-0">--}}
    {{--                        <div class="col-md-5 col-5 m-0 p-0">--}}
    {{--                            <div class="view  my-3 overlay ">--}}
    {{--                                <img class=""  style="width: 100%;"   src="{{asset('svg/resturant/sat.png')}}"--}}
    {{--                                     alt="Card image cap">--}}
    {{--                                <a href="#!">--}}
    {{--                                    <div class="mask rgba-white-slight"></div>--}}
    {{--                                </a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-7 col-7 m-0 p-0">--}}
    {{--                            <div class="card-body m-0 py-3">--}}

    {{--                                <!-- Title -->--}}
    {{--                                <!-- Title -->--}}
    {{--                                <h5 class="h5 h5-responsive m-0 py-2 font-weight-bold ">SATURDAY <b class="small font-weight-bold red-text">Big Big Party</b> </h5>--}}
    {{--                                <p style="font-size: 13px;" class="p-0 m-0">--}}
    {{--                                    2x Party Size Pizza, 4 Toppings on each--}}
    {{--                                </p>--}}
    {{--                                <p class="p-0 m-0" style="font-size: 13px;">--}}
    {{--                                    $15.99 <strike>$20.00</strike>--}}
    {{--                                </p>--}}
    {{--                                <!-- Text -->--}}



    {{--                                <!-- Button -->--}}
    {{--                                <a href="#" class="btn btn-inside btn-sm font-weight-bold web-color mt-2" style="color: #002E50!important;" >Add To Cart</a>--}}

    {{--                            </div>--}}

    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <!-- Card image -->--}}


    {{--                    <!-- Card content -->--}}

    {{--                </div>--}}
    {{--                <!-- Card -->--}}
    {{--            </div>--}}

    {{--        </div>--}}
    {{--        <div>--}}
    {{--            <div class=" mt-2 ">--}}

    {{--                <!-- Card -->--}}
    {{--                <div class="card  ">--}}

    {{--                    <div class="row m-0 p-0">--}}
    {{--                        <div class="col-md-5 col-5 m-0 p-0">--}}
    {{--                            <div class="view  my-3 overlay ">--}}
    {{--                                <img class=""  style="width: 100%;"   src="{{asset('svg/resturant/slider1.png')}}"--}}
    {{--                                     alt="Card image cap">--}}
    {{--                                <a href="#!">--}}
    {{--                                    <div class="mask rgba-white-slight"></div>--}}
    {{--                                </a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-7 col-7 m-0 p-0">--}}
    {{--                            <div class="card-body m-0 py-3">--}}

    {{--                                <!-- Title -->--}}
    {{--                                <h5 class="h5 h5-responsive m-0 py-2 font-weight-bold ">SUNDAY <b class="small red-text font-weight-bold">Wings Day</b> </h5>--}}
    {{--                                <p style="font-size: 13px;" class="p-0 m-0">--}}
    {{--                                    20 Pcs Wings  Sauces:<br>BBQ,Hot,Mild--}}
    {{--                                </p>--}}
    {{--                                <p class="p-0 m-0" style="font-size: 13px;">--}}
    {{--                                    $15.99 <strike>$20.00</strike>--}}
    {{--                                </p>--}}
    {{--                                <!-- Text -->--}}


    {{--                                <!-- Button -->--}}
    {{--                                <a href="#" class="btn  btn-inside btn-sm font-weight-bold web-color mt-2" style="color: #002E50!important;" >Add To Cart</a>--}}

    {{--                            </div>--}}

    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <!-- Card image -->--}}


    {{--                    <!-- Card content -->--}}

    {{--                </div>--}}
    {{--                <!-- Card -->--}}
    {{--            </div>--}}
    {{--        </div>--}}

    {{--    </section>--}}

    {{--</div>--}}
    {{--</section>--}}

    <section class="menu py-5 my-5">
        <div class="container  ">
            <h1 class="h1 h1-responsive text-center white-text font-weight-bold" style="color: #fff;text-shadow: 2px 2px 2px  #bababa;">DAILY SPECIAL</h1>
            <p class="text-center white-text">Everyday Is Special  </p>
            <div class="row py-3">
                <div class="col-md-4 mt-2 ">

                    <!-- Card -->
                    <div class="card  ">
                        <div class="ribbon"><span>Free</span></div>

                        <div class="row m-0 p-0">
                            <div class="col-md-5 col-5 m-0 p-0">
                                <div class="view pt-3 mt-3 overlay ">
                                    <img class=""  style="width: 100%;"   src="{{asset('svg/resturant/imageedit_5_8013164942.png')}}"
                                         alt="Card image cap">
                                    <a href="#!">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-7 col-7 m-0 p-0">
                                <div class="card-body m-0 py-3">

                                    <!-- Title -->
                                    <h5 class="h5 h5-responsive m-0 py-2 font-weight-bold ">MONDAY <b class="red-text small">Pizza feast</b> </h5>
                                    <p style="font-size: 13px;" class="p-0 m-0">
                                        Small Pizza
                                        <br>With XL Pizza
                                    </p>
                                    <p class="p-0 m-0" style="font-size: 13px;">
                                        $15.99 <strike>$20.00</strike>
                                    </p>
                                    <!-- Text -->


                                    <!-- Button -->
                                    <a href="{{url('cart')}}" class="btn btn-inside btn-sm font-weight-bold web-color mt-2" style="color: #002E50!important;" >Add To Cart</a>

                                </div>

                            </div>
                        </div>
                        <!-- Card image -->


                        <!-- Card content -->

                    </div>
                    <!-- Card -->
                </div>
                <div class="col-md-4 mt-2 ">

                    <!-- Card -->
                    <div class="card  ">
                        <div class="ribbon"><span>Buy 1 Get 1</span></div>

                        <div class="row m-0 p-0">
                            <div class="col-md-5 col-5 m-0 p-0">
                                <div class="view pt-3 mt-3 overlay ">
                                    <img class=""  style="width: 100%;"   src="{{asset('svg/resturant/slider1.png')}}"
                                         alt="Card image cap">
                                    <a href="#!">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-7 col-7 m-0 p-0">
                                <div class="card-body m-0 py-3">

                                    <!-- Title -->
                                    <h5 class="h5 h5-responsive m-0 py-2 font-weight-bold ">TUESDAY <b class="small red-text font-weight-bold">Pizza Day</b> </h5>
                                    <p style="font-size: 13px;" class="p-0 m-0">
                                        Large Pizza,3 Toppings,1 Dipping Sauce
                                    </p>
                                    <p class="p-0 m-0" style="font-size: 13px;">
                                        $15.99  <strike>$20.66</strike>
                                    </p>
                                    <!-- Text -->


                                    <!-- Button -->
                                    <a href="#" class="btn btn-inside btn-sm font-weight-bold web-color mt-2" style="color: #002E50!important;" >Add To Cart</a>

                                </div>

                            </div>
                        </div>
                        <!-- Card image -->


                        <!-- Card content -->

                    </div>
                    <!-- Card -->
                </div>
                <div class="col-md-4 mt-2 ">

                    <!-- Card -->
                    <div class="card  ">

                        <div class="row m-0 p-0">
                            <div class="col-md-5 col-5 m-0 p-0">
                                <div class="view pt-3 mt-3 overlay ">
                                    <img class=""  style="width: 100%;"   src="{{asset('svg/resturant/imageedit_11_5349370466.png')}}"
                                         alt="Card image cap">
                                    <a href="#!">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-7 col-7 m-0 p-0">
                                <div class="card-body m-0 py-3">

                                    <!-- Title -->
                                    <h5 class="h5 h5-responsive m-0 py-2 font-weight-bold ">WEDNESDAY <b class="small red-text font-weight-bold">Pay Less</b> </h5>
                                    <p style="font-size: 13px;" class="p-0 m-0">
                                        Large Pizza,3 Toppings,1 Dipping Sauce
                                    </p>
                                    <p class="p-0 m-0" style="font-size: 13px;">
                                        $15.99 <strike>$20.00</strike>
                                    </p>
                                    <!-- Text -->



                                    <!-- Button -->
                                    <a href="#" class="btn btn-inside btn-sm font-weight-bold web-color mt-2" style="color: #002E50!important;" >Add To Cart</a>

                                </div>

                            </div>
                        </div>
                        <!-- Card image -->


                        <!-- Card content -->

                    </div>
                    <!-- Card -->
                </div>
                <div class="col-md-4 mt-2 ">

                    <!-- Card -->
                    <div class="card  ">

                        <div class="row m-0 p-0">
                            <div class="col-md-5 col-5 m-0 p-0">
                                <div class="view pt-3 mt-3 overlay ">
                                    <img class=""  style="width: 100%;"   src="{{asset('svg/resturant/sat.png')}}"
                                         alt="Card image cap">
                                    <a href="#!">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-7 col-7 m-0 p-0">
                                <div class="card-body m-0 py-3">

                                    <!-- Title -->
                                    <h5 class="h5 h5-responsive m-0 py-2 font-weight-bold ">THURSDAY <b class="small font-weight-bold red-text">Shawarma Day</b> </h5>
                                    <p style="font-size: 13px;" class="p-0 m-0">
                                        2 Shawarma Wraps ,<br> 2 POPS
                                    </p>
                                    <p class="p-0 m-0" style="font-size: 13px;">
                                        $15.99 <strike>$19.00</strike>
                                    </p>
                                    <!-- Text -->



                                    <!-- Button -->
                                    <a href="#" class="btn btn-inside btn-sm font-weight-bold web-color mt-2" style="color: #002E50!important;" >Add To Cart</a>

                                </div>

                            </div>
                        </div>
                        <!-- Card image -->


                        <!-- Card content -->

                    </div>
                    <!-- Card -->
                </div>
                <div class="col-md-4 mt-2 ">

                    <!-- Card -->
                    <div class="card  ">

                        <div class="row m-0 p-0">
                            <div class="col-md-5 col-5 m-0 p-0">
                                <div class="view pt-3 mt-3 overlay ">
                                    <img class=""  style="width: 100%;"   src="{{asset('svg/resturant/sat.png')}}"
                                         alt="Card image cap">
                                    <a href="#!">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-7 col-7 m-0 p-0">
                                <div class="card-body m-0 py-3">

                                    <!-- Title -->
                                    <h5 class="h5 h5-responsive m-0 py-2 font-weight-bold ">FRYDAY <b class="small font-weight-bold red-text">Pay Less</b> </h5>
                                    <p style="font-size: 13px;" class="p-0 m-0">
                                        Large Pizza,3 Toppings,1 Dipping Sauce
                                    </p>
                                    <p class="p-0 m-0" style="font-size: 13px;">
                                        $15.99 <strike>$20.00</strike>
                                    </p>
                                    <!-- Text -->


                                    <!-- Button -->
                                    <a href="#" class="btn btn-inside btn-sm font-weight-bold web-color mt-2" style="color: #002E50!important;" >Add To Cart</a>

                                </div>

                            </div>
                        </div>
                        <!-- Card image -->


                        <!-- Card content -->

                    </div>
                    <!-- Card -->
                </div>

                <div class="col-md-4 mt-2 ">

                    <!-- Card -->
                    <div class="card  ">

                        <div class="row m-0 p-0">
                            <div class="col-md-5 col-5 m-0 p-0">
                                <div class="view pt-3 mt-3 overlay ">
                                    <img class=""  style="width: 100%;"   src="{{asset('svg/resturant/sat.png')}}"
                                         alt="Card image cap">
                                    <a href="#!">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-7 col-7 m-0 p-0">
                                <div class="card-body m-0 py-3">

                                    <!-- Title -->
                                    <!-- Title -->
                                    <h5 class="h5 h5-responsive m-0 py-2 font-weight-bold ">SATURDAY <b class="small font-weight-bold red-text">Big Big Party</b> </h5>
                                    <p style="font-size: 13px;" class="p-0 m-0">
                                        2x Party Size Pizza, 4 Toppings on each
                                    </p>
                                    <p class="p-0 m-0" style="font-size: 13px;">
                                        $15.99 <strike>$20.00</strike>
                                    </p>
                                    <!-- Text -->



                                    <!-- Button -->
                                    <a href="#" class="btn btn-inside btn-sm font-weight-bold web-color mt-2" style="color: #002E50!important;" >Add To Cart</a>

                                </div>

                            </div>
                        </div>
                        <!-- Card image -->


                        <!-- Card content -->

                    </div>
                    <!-- Card -->
                </div>
                <div class="col-md-4 mt-2 ">

                    <!-- Card -->
                    <div class="card  ">

                        <div class="row m-0 p-0">
                            <div class="col-md-5 col-5 m-0 p-0">
                                <div class="view pt-3 mt-3 overlay ">
                                    <img class=""  style="width: 100%;"   src="{{asset('svg/resturant/slider1.png')}}"
                                         alt="Card image cap">
                                    <a href="#!">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-7 col-7 m-0 p-0">
                                <div class="card-body m-0 py-3">

                                    <!-- Title -->
                                    <h5 class="h5 h5-responsive m-0 py-2 font-weight-bold ">SUNDAY <b class="small red-text font-weight-bold">Wings Day</b> </h5>
                                    <p style="font-size: 13px;" class="p-0 m-0">
                                        20 Pcs Wings  Sauces:<br>BBQ,Hot,Mild
                                    </p>
                                    <p class="p-0 m-0" style="font-size: 13px;">
                                        $15.99 <strike>$20.00</strike>
                                    </p>
                                    <!-- Text -->


                                    <!-- Button -->
                                    <a href="#" class="btn  btn-inside btn-sm font-weight-bold web-color mt-2" style="color: #002E50!important;" >Add To Cart</a>

                                </div>

                            </div>
                        </div>
                        <!-- Card image -->


                        <!-- Card content -->

                    </div>
                    <!-- Card -->
                </div>

            </div>
        </div>

    </section>
    {{--<iframe class="m-0 p-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41288302.6806295!2d-130.11358188775674!3d50.83045994806638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4b0d03d337cc6ad9%3A0x9968b72aa2438fa5!2sCanada!5e0!3m2!1sen!2sin!4v1583748186234!5m2!1sen!2sin"  frameborder="0" s allowfullscreen="" style="width: 100%!important;border: 0;height: 350px;"></iframe>--}}

@endsection
