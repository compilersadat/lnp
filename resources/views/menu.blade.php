@extends('layouts.layout')
@section('content')
<section class="menu-banner" style="background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('svg/one-cheese-pizza-2741457.jpg') ;background-size:cover ;height: 330px;">
    <div class=" pt-5 container web-color">
        <div class="row justify-content-center mt-3">
            <div class="col-md-8">
                <h1 class="h1 h1-responsive text-center white-text pt-5 pizza">
                    Our Menu
                </h1>
                <p class="text-center white-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi atque cupiditate deleniti est expedita laborum maxime omnis rerum sapiente tempora. Debitis eaque fugit odio qui sint? Corporis eveniet illo illum.
                </p>
            </div>
        </div>

    </div>
</section>
<section class="mt-5 ">
    <div class="container mt- pt-5">
        <h3 class="pizza pb-0 mb-0">
            <u>Special Pizza</u>
        </h3>
        <div class="row ">
            <div class="col-md-4 mt-2 ">
                <hr>
                <div class="row m-0 p-0 ">
                    <div class="col-md-4 m-0 p-0">

                        <img src="{{asset('svg/resturant/imageedit_11_5349370466.png')}}" class="img-fluid " >
                    </div>
                    <div class="col-md-8 web-color pt-2">
                        <h6 class=" pb-0 mb-0 h6 h6-responsive pizza font-weight-bold pt-2">CANADIAN EH!</h6>
                        <p class="p-0 m-0" style="font-size: 12px;">
                            MUshrooms.Olive Oil, Salami/Pepperoni
                        </p>
                    </div>
                </div>


                <!--                <div class=" pt-2 d-flex justify-content-around font-weight-bold" style="font-size: 12px;">-->
                <!--                    <div class=" ">-->
                <!--                      S-->
                <!--                    </div>-->
                <!--                    <div>M</div>-->
                <!--                    <div>L</div>-->
                <!--                    <div>XL</div>-->
                <!--                    <div>P</div>-->
                <!--                </div>-->
                <!--                <div class="d-flex justify-content-around" style="font-size: 12px;">-->
                <!--                    <div>-->
                <!--                        $9.99-->
                <!--                    </div>-->
                <!--                    <div>$11.99</div>-->
                <!--                    <div>$13.99</div>-->
                <!--                    <div>$15.99</div>-->
                <!--                    <div>$19.99</div>-->
                <!--                </div>-->
                <div class="d-flex  pt-3 web-color" >
                    <div class="">
                        <select class="browser-default font-weight-bold custom-select    py-0 my-0" style="border-radius:2px;border:solid 1px #002E50;height: 25px!important;font-size: 12px;" >
                            <option selected>Select Size </option>
                            <option value="1">S  &nbsp; $9.99</option>
                            <option value="2">M &nbsp; $11.99</option>
                            <option value="3">L &nbsp; $13.99</option>
                            <option value="3">XL &nbsp; $15.99</option>
                            <option value="3">P &nbsp; $19.99</option>
                        </select>
                    </div>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <div>
                        <a href="{{url('cart')}}" class="badge py-2 px-4" style="color: #002E50!important;box-shadow: none;border:solid 1px #002E50;font-size: 10px;">Order Now</a>
                    </div>
                </div>
                <hr>

            </div>
            <div class="col-md-4 mt-2 ">
                <hr>
                <div class="row m-0 p-0 ">
                    <div class="col-md-4 m-0 p-0">

                        <img src="{{asset('svg/resturant/imageedit_9_2732721459.png')}}" class="img-fluid " >
                    </div>
                    <div class="col-md-8 web-color pt-2">
                        <h6 class=" pb-0 mb-0 h6 h6-responsive pizza font-weight-bold pt-2">MEAT HUNGER</h6>
                        <p class="p-0 m-0" style="font-size: 12px;">
                            chicken, Salami/Pepperoni, Ground Beef
                        </p>
                    </div>
                </div>


                <!--                <div class=" pt-2 d-flex justify-content-around font-weight-bold" style="font-size: 12px;">-->
                <!--                    <div class=" ">-->
                <!--                      S-->
                <!--                    </div>-->
                <!--                    <div>M</div>-->
                <!--                    <div>L</div>-->
                <!--                    <div>XL</div>-->
                <!--                    <div>P</div>-->
                <!--                </div>-->
                <!--                <div class="d-flex justify-content-around" style="font-size: 12px;">-->
                <!--                    <div>-->
                <!--                        $9.99-->
                <!--                    </div>-->
                <!--                    <div>$11.99</div>-->
                <!--                    <div>$13.99</div>-->
                <!--                    <div>$15.99</div>-->
                <!--                    <div>$19.99</div>-->
                <!--                </div>-->
                <div class="d-flex  pt-3 web-color" >
                    <div class="">
                        <select class="browser-default font-weight-bold custom-select    py-0 my-0" style="border-radius:2px;border:solid 1px #002E50;height: 25px!important;font-size: 12px;" >
                            <option selected>Select Size </option>
                            <option value="1">S  &nbsp; $11.24</option>
                            <option value="2">M &nbsp; $13.48</option>
                            <option value="3">L &nbsp; $15.74</option>
                            <option value="3">XL &nbsp; $17.98</option>
                            <option value="3">P &nbsp; $122.24</option>
                        </select>
                    </div>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <div>
                        <a href="" class="badge py-2 px-4" style="color: #002E50!important;box-shadow: none;border:solid 1px #002E50;font-size: 10px;">Order Now</a>
                    </div>
                </div>
                <hr>

            </div>
            <div class="col-md-4 mt-2 ">
                <hr>
                <div class="row m-0 p-0 ">
                    <div class="col-md-4 m-0 p-0">

                        <img src="{{asset('svg/resturant/imageedit_10_7762698007.png')}}" class="img-fluid " >
                    </div>
                    <div class="col-md-8 web-color pt-2">
                        <h6 class=" pb-0 mb-0 h6 h6-responsive pizza font-weight-bold pt-2">SWEET & SPICY</h6>
                        <p class="p-0 m-0" style="font-size: 12px;">
                            Hot Banana Peppers, Ground Beef, Pineapple, Green Peppers.
                        </p>
                    </div>
                </div>

                <div class="d-flex  pt-3 web-color" >
                    <div class="">
                        <select class="browser-default font-weight-bold custom-select    py-0 my-0" style="border-radius:2px;border:solid 1px #002E50;height: 25px!important;font-size: 12px;" >
                            <option selected>Select Size </option>
                            <option value="1">S  &nbsp; $9.99</option>
                            <option value="2">M &nbsp; $11.99</option>
                            <option value="3">L &nbsp; $13.99</option>
                            <option value="3">XL &nbsp; $15.99</option>
                            <option value="3">P &nbsp; $19.99</option>
                        </select>
                    </div>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <div>
                        <a href="" class="badge py-2 px-4" style="color: #002E50!important;box-shadow: none;border:solid 1px #002E50;font-size: 10px;">Order Now</a>
                    </div>
                </div>
                <hr>

            </div>

        </div>
    </div>
</section>
<section class="">
    <div class="container py-5 my-3">
        <h3 class="pizza pb-0 mb-0">
            <u>LNP Special</u>
        </h3>
        <div class="row ">
            <div class="col-md-4 mt-2 ">
                <hr>
                <div class="row m-0 p-0 ">
                    <div class="col-md-4 m-0 p-0">

                        <img src="{{asset('svg/resturant/imageedit_13_9118909170.png')}}" class="img-fluid " >
                    </div>
                    <div class="col-md-8 web-color pt-2">
                        <h6 class=" pb-0 mb-0 h6 h6-responsive pizza font-weight-bold pt-2">Smoked Lime Special</h6>
                        <p class="p-0 m-0" style="font-size: 12px;">
                            Smoked Lime Chicken, Red Onion , Pineapple,Hot Banana Peppers.
                        </p>
                    </div>
                </div>


                <!--                <div class=" pt-2 d-flex justify-content-around font-weight-bold" style="font-size: 12px;">-->
                <!--                    <div class=" ">-->
                <!--                      S-->
                <!--                    </div>-->
                <!--                    <div>M</div>-->
                <!--                    <div>L</div>-->
                <!--                    <div>XL</div>-->
                <!--                    <div>P</div>-->
                <!--                </div>-->
                <!--                <div class="d-flex justify-content-around" style="font-size: 12px;">-->
                <!--                    <div>-->
                <!--                        $9.99-->
                <!--                    </div>-->
                <!--                    <div>$11.99</div>-->
                <!--                    <div>$13.99</div>-->
                <!--                    <div>$15.99</div>-->
                <!--                    <div>$19.99</div>-->
                <!--                </div>-->
                <div class="d-flex  pt-3 web-color" >
                    <div class="">
                        <select class="browser-default font-weight-bold custom-select    py-0 my-0" style="border-radius:2px;border:solid 1px #002E50;height: 25px!important;font-size: 12px;" >
                            <option selected>Select Size </option>
                            <option value="1">S  &nbsp; $9.99</option>
                            <option value="2">M &nbsp; $11.99</option>
                            <option value="3">L &nbsp; $13.99</option>
                            <option value="3">XL &nbsp; $15.99</option>
                            <option value="3">P &nbsp; $19.99</option>
                        </select>
                    </div>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <div>
                        <a href="" class="badge py-2 px-4" style="color: #002E50!important;box-shadow: none;border:solid 1px #002E50;font-size: 10px;">Order Now</a>
                    </div>
                </div>
                <hr>

            </div>
        </div>
    </div>
</section>
@endsection
