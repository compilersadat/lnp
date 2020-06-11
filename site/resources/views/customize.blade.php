@extends('layouts.layout')
@section('content')
<style>

.btn-radio {
  cursor: pointer;
  display: inline-block;

float: left;
  width: 30%; /* three boxes (use 25% for four, and 50% for two, etc) */
  /* if you want space between the images */  -webkit-user-select: none;
  user-select: none;
}
.btn-radio {
  margin-left: 4px;
}
@media screen and (max-width: 480px) {
  .btn-radio {
    display: block;
    float: none;
  }
  .btn-radio:not(:first-child) {
    margin-left: 0;
    margin-top: 15px;
  }
}
.btn-radio svg {
  fill: none;
  vertical-align: middle;
}
.btn-radio svg circle {
  stroke-width: 2;
  stroke: #C8CCD4;
}
.btn-radio svg path {
  stroke: #008FFF;
}
.btn-radio svg path.inner {
  stroke-width: 6;
  stroke-dasharray: 19;
  stroke-dashoffset: 19;
}
.btn-radio svg path.outer {
  stroke-width: 2;
  stroke-dasharray: 57;
  stroke-dashoffset: 57;
}
.btn-radio input {
  display: none;
}
.btn-radio input:checked + svg path {
  transition: all 0.4s ease;
}
.btn-radio input:checked + svg path.inner {
  stroke-dashoffset: 38;
  transition-delay: 0.3s;
}
.btn-radio input:checked + svg path.outer {
  stroke-dashoffset: 0;
}
.btn-radio span {
  display: inline-block;
  vertical-align: middle;
}

.btn-floating{
width:47px!important;
height:47px!important;
}
ul {
p
ing-inline-start: 0px;
}
.pan-height{
height: 500px;
    overflow-y: scroll;
}
.top-plus{
border:0px;
}
.top-minus{
border:0px;
}
.customize-li label {
background-color:#F4F4F4!important;
    display: block;
border:0px solid #F4F4F4;
border-radius:0px!;
box-shadow:0px 0px 0px 0px;
    position: relative;
    cursor: pointer;
}
:checked+#custom .content-text {
                transform: translate(0px, 0px)!important;
    color:#002E50!important;
}

 input[type="radio"] {
  display: none;
}
input[type="radio"]:not(:disabled) ~ label {
  cursor: pointer;
}
input[type="radio"]:disabled ~ label {
  color: #bcc2bf;
  border-color: #bcc2bf;
  box-shadow: none;
  cursor: not-allowed;
}

label {
  display: block;
  background: white;
  border: 2px solid #002E50;
  border-radius: 7px;
  margin-bottom: 1rem;
  text-align: center;
  box-shadow: 0px 3px 10px -2px rgba(161, 170, 166, 0.5);
  position: relative;
}

input[type="radio"]:checked + label {
  background: #fff;
  color: #002E50;
  /* box-shadow: 0px 0px 20px rgba(0, 46, 80, 0.58); */
}
input[type="radio"]:checked + label::after {
  color: #002E50;
  font-family: FontAwesome;
  border: 2px solid #002E50;
  content: "\f00c";
  font-size: 13px;
  position: absolute;
  top: -11px;
  left: 50%;
  transform: translateX(-50%);
  height: 20px;
  width: 20px;
  line-height: 15px;
  text-align: center;
  border-radius: 50%;
  background: white;
  box-shadow: 0px 2px 5px -2px rgba(0, 0, 0, 0.25);
}
.select-pizza{
    width: 60px;
}
.btn-floating{
    width:30px;
    height: 30px;

}
.md-tabs{
    position: relative;
    z-index: 1;

    margin-bottom: -20px;
border-radius:5rem;
    background-color: #ffffff;
    border-bottom: 1px solid #eae7e7;

}
.nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link{
    background: #002E50!important;
    color: #ffffff!important;
}
.nav-tabs .nav-link {
    border-radius: 0px;

}
.nav-item{
border-radius:5rem;
}
.nav-tabs .nav-link:hover{
border:0px solid #002E50!important;
}


@media only screen and (max-width: 600px) {
.select-pizza{
    width:100%!important;
}

}

.state {
  position: absolute;
  top: 0;
  right: 0;
  opacity: 1e-5;
  pointer-events: none;
}

.label {
  display: inline-flex;
  align-items: center;
  cursor: pointer;
  color: #000;
  font-weight: bold;
}

.text {
  margin-left: 5px;
  font-size: 12px;
  opacity: .6;
  transition: opacity .2s linear, transform .2s ease-out;
}

.indicator {
  position: relative;
  border-radius: 50%;
  height: 20px;
  width: 20px;
  background:#002E50;

  overflow: hidden;
}

.indicator::before,
.indicator::after {
  content: '';
  position: absolute;
  top: 10%;
  left: 10%;
  height: 80%;
  width: 80%;
  border-radius: 50%;
}

.indicator::before {

}

.indicator::after {
  background-color: #ecf0f3;
  box-shadow:
    -4px -2px 4px 0px #fff,
    4px 2px 8px 0px #d1d9e6;
  transform: scale3d(1, 1, 1);
  transition: opacity .25s ease-in-out, transform .25s ease-in-out;
}

.state:checked ~ .label .indicator::after {
  transform: scale3d(.975, .975, 1) translate3d(0, 10%, 0);
  background-color: #d1d9e6;
  opacity: 0;
}

.state:focus ~ .label .text {
  transform: translate3d(8px, 0, 0);
  opacity: 1;
}

.label:hover .text {
  opacity: 1;
}


    </style>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    //hidden inputs
    <input type="hidden" id="total">
    <input type="hidden" id="price">
    <input type="hidden" id="sauce" value="0">
    <input type="hidden" id="dough" value="0">
    <input type="hidden" id="ranch" value="0">
    <input type="hidden" id="sauce_p" value="0">
    <input type="hidden" id="dough_p" value="0">
    <input type="hidden" id="ranch_p" value="0">
    <input type="hidden" id="spi" value="ragular">
    <section style="background: #f4f4f4;" class="pb-5">
        <div class="container-fluide mt-5 pt-5">
            <h2 class="h2 text-center  pt-3 pb-2 h2-responsive font-weight-bold" style="color:#002E50;">
                <span id="title" class="text-uppercase"></span> {{$item->title}}
            </h2>
        <div class="row m-0 py-2">
            <div class="col-md-4 text-center">
                <span class="material-icons">
                <img src="{{asset('svg/back-icon.png')}}" width="20">
                    </span>
<a href="{{url('menus')}}">
                <b class="font-weight-bold" style="font-size:17px;color:#FF3547;">Back To Menu</b></a>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{asset('uploads/menus/'.$item->image)}}" class="img img-fluid " style="width:70%">
            </div>
            <div class="col-md-4 pt-5 mt-3 ">
                <div class="row m-0 p-0 justify-content-start pl-5"  >
                 @foreach(@App\ItemVariable::where('item_id',$item->id)->where('price','!=',Null)->get() as $key=>$size)
                    <div class="col-md-2  m-0  p-0">
                        <div class="select-pizza">
                            <input type="radio" id="control_{{$size->id}}" name="size" value="{{$size->id}}" @if($key==0) checked @endif>
                            <label for="control_{{$size->id}}" class="">
                             <div class="py-2">
                                <p class="mb-0 pb-0 font-weight-bold" style="font-size:12px;">{{$size->value}}</p>
                                <p class="mb-0 pb-0" style="font-size:10px;">${{$size->price}}</p>
                             </div>
                            </label>
                          </div>
                    </div>
                @endforeach



                              <div class="add py-4">
                                <div class="row ">
                                    <div class="col-md-8">
                                        <a type="button" id="" class="btn-floating  text-center mt-1 pt-1 minus" style="background:#FF3547;box-shadow:none;width:30px!important;
    height: 30px!important;"><i class="fa fa-minus  white-text" style="font-size:12px;" aria-hidden="true"></i></a>
                                        <a href="" class=" black-text" style="font-size:25px;">
                                      <b class="font-weight-bold " style="color:#002E50;font-size:25px;" id="qty"> 1</b>
                                            </a>
                                            <a type="button" id="" class="btn-floating text-center pt-1 mt-1 plus" style="background:#FF3547;box-shadow:none;width:30px!important;
    height: 30px!important;"><i class="fa fa-plus  white-text" aria-hidden="true"></i></a>

                                    </div>
                                    <div class="col-md-4 ">
                                        <h3 class="h3-responsive h3 font-weight-bold price_show text-right" style="color:#002E50;" >
                                        </h3>
                                    </div>
                                </div>
                                
                                <div class="add-to-cart  pt-4  m-auto text-center">
                                    <button id="" class="btn btn-md btn-block  py-3 add_to_cart white-text font-weight-bold" style="box-shadow:none;background:#002E50;">
                                        Add To cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
                    <div class="row m-0 p-0 justify-content-center">
                        <div class="col-md-12 py-3  ">
                            <p class="text-center ">
                                {{$item->description}}
                            </p>
                        </div>
                    </div>

        </div>
        </div>
    </section>
    <section style="margin-top:-2rem">
        <div class="container ">
            <ul class="nav nav-tabs md-tabs row justify-content-center"  id="myTabMD" role="tablist">
                <li class="nav-item col-md-4 text-center p-0">
                    <a class="nav-link active px-3 py-4" id="home-tab-md" data-toggle="tab" href="#home-md" role="tab" aria-controls="home-md"
                     aria-selected="true">1.Dough / Dipping Sauces
                    </a>
                </li>
                <li class="nav-item col-md-4 text-center p-0">
                    <a class="nav-link px-3 py-4" id="profile-tab-md" data-toggle="tab" href="#profile-md" role="tab" aria-controls="profile-md"
                            aria-selected="false">2.Toppings</a>
                </li>
                <li class="nav-item col-md-4 text-center p-0" >
                    <a class="nav-link px-3 py-4" id="contact-tab-md" data-toggle="tab" href="#contact-md" role="tab" aria-controls="contact-md"
                    aria-selected="false">3.Special Instructions</a>
                </li>
            </ul>
            <div class="tab-content card py-5 px-0" id="myTabContentMD" style="box-shadow:none;">
                <div class="tab-pane fade show active" id="home-md" role="tabpanel" aria-labelledby="home-tab-md">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                            <div class="row justify-content-center">
                            <div class="col-md-8">
                            <ul class="nav nav-tabs " id="myTab" role="tablist" style="border:none;">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="base_sauce" data-toggle="tab" href="#base" role="tab" aria-controls="base"
                                         aria-selected="true">Dough</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="dipping_sauce" data-toggle="tab" href="#dipping" role="tab" aria-controls="dipping"
                                      aria-selected="false">Dipping Sauces</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" id="ranch_sauce" data-toggle="tab" href="#ranch_tab" role="tab" aria-controls="ranch"
                                                aria-selected="false">Ranch</a>
                                    </li>
                                </ul>
                            </div>
                            </div>

                        <div class="tab-content" id="myTabContent" >
                            <div class="tab-pane fade show active mt-2" id="base" role="tabpanel" aria-labelledby="base_sauce">
                                <div class="row m-0 p-0 pan-height">
                                    @foreach(@App\Sauce::where('type','dough')->get() as $row)
                                    <div class="col-md-4 m-0 p-0 ">
                                                <ul>
                                                    <li class="customize-li mt-3">
                                                        <input type="radio" id="myCheckboxesd{{$row->id}}" value="{{$row->id}}" name="dough"/>
                                                        <label for="myCheckboxesd{{$row->id}}" id="custom_radio" class="text-left py-2">

                                                            <div class="imag-i text-center">
                                                                <img src="{{asset('uploads/sauces/'.$row->image)}}" class=" image" width="150" height="150" />
                                                            </div>
                                                            <div class="content-text text-center py-2">

                                                                <h6 class="select-heading mb-0 pb-0">{{$row->name}}</h6>
                                                                
                                                            </div>
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                            @endforeach

                                        </div>

                            </div>
                            <div class="tab-pane fade" id="dipping" role="tabpanel" aria-labelledby="dipping_sauce">
                                        <div class="row m-0 p-0 pan-height">
                                    @foreach(@App\Sauce::where('type','dipping')->get() as $row)
                                    <div class="col-md-4 m-0 p-0 ">
                                                <ul>
                                                    <li class="customize-li mt-3">
                                                        <input type="radio" id="myCheckboxs{{$row->id}}" value="{{$row->id}}" name="sauce"/>
                                                        <label for="myCheckboxs{{$row->id}}" id="custom_radio" class="text-left py-2">

                                                            <div class="imag-i text-center">
                                                                <img src="{{asset('uploads/sauces/'.$row->image)}}" class=" image" width="150" height="150" />
                                                            </div>
                                                            <div class="content-text text-center py-2">

                                                                <h6 class="select-heading mb-0 pb-0">{{$row->name}}</h6>
                                                                
                                                            </div>
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                            @endforeach

                                        </div>
                            </div>
                            <div class="tab-pane fade" id="ranch_tab" role="tabpanel" aria-labelledby="ranch_sauce">
                                      <div class="row m-0 p-0 pan-height">
                                    @foreach(@App\Sauce::where('type','ranch')->get() as $row)
                                    <div class="col-md-4 m-0 p-0 ">
                                                <ul>
                                                    <li class="customize-li mt-3">
                                                        <input type="radio" id="myCheckboxesr{{$row->id}}" value="{{$row->id}}" name="ranch"/>
                                                        <label for="myCheckboxesr{{$row->id}}" id="custom_radio" class="text-left py-2">

                                                            <div class="imag-i text-center">
                                                                <img src="{{asset('uploads/sauces/'.$row->image)}}" class=" image" width="150" height="150" />
                                                            </div>
                                                            <div class="content-text text-center py-2">

                                                                <h6 class="select-heading mb-0 pb-0">{{$row->name}}</h6>
                                                                
                                                            </div>
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                            @endforeach

                                        </div>
                            </div>
                        </div>
                </div>
                <div class="col-md-4 m-auto">
                    <div>
                        <img src="{{asset('uploads/menus/'.$item->image)}}" class="img img-fluid text-center"> </div>
                    <p class="text-center">
                        {{$item->description}}
                    </p>
                    <hr>
                    <div class="add py-4">
                        <div class="row ">
                            <div class="col-md-7">
                                <a type="button" class="btn-floating  text-center mt-1 pt-1 minus" style="background:#FF3547;box-shadow:none;width:30px!important;
    height: 30px!important;"><i class="fa fa-minus  white-text" style="font-size:12px;" aria-hidden="true"></i></a>
                                <a href="" class=" black-text" style="font-size:25px;">
                              <b class="font-weight-bold " style="color:#002E50;font-size:25px;" id="qty1"> 1</b>
                                    </a>
                                    <a type="button" class="btn-floating text-center pt-1 mt-1 plus" style="background:#FF3547;box-shadow:none;width:30px!important;
    height: 30px!important;"><i class="fa fa-plus  white-text" aria-hidden="true"></i></a>

                            </div>
                            <div class="col-md-5 ">
                                <h3 class="h3-responsive h3 font-weight-bold price_show" style="color:#002E50;">
                                </h1>
                            </div>
                        </div>

                        <div class="add-to-cart  pt-4  mt-1 ">
                            <button id="" class="btn btn-block add_to_cart white-text font-weight-bold" style="box-shadow:none;background:#002E50;">
                                Add To cart
                            </button>
                        </div>
                    </div>
                </div>
                        </div>
</div>
                <div class="tab-pane fade" id="profile-md" role="tabpanel" aria-labelledby="profile-tab-md">
                        <div class="row p-0 m-0">
                        	<div class="col-md-8 p-0 m-0">
                        		<div class="row justify-content-center">
                            <div class="col-md-6">
                                <ul class="nav nav-tabs " id="myTab" role="tablist" style="border:none;">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="cheese" data-toggle="tab" href="#cheese_pan" role="tab" aria-controls="base"
                                         aria-selected="true">Cheese</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="meat" data-toggle="tab" href="#meat_pan" role="tab" aria-controls="dipping"
                                      aria-selected="false">Meat</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" id="vege" data-toggle="tab" href="#vege_pan" role="tab" aria-controls="ranch"
                                                aria-selected="false">Vegetables</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content" id="myTabContent" >
                            <div class="tab-pane fade show active mt-2" id="cheese_pan" role="tabpanel" aria-labelledby="cheese">
                            <div class="row p-0 m-0 pan-height">
                                @foreach(@App\ToppingValue::where('type',1)->get() as $row)
                               <input type="hidden"  name='toppingqty_{{$row->id}}' id="toppingqty_{{$row->id}}"  value="0">
                                	<div class="col-md-4 m-0 p-0 ">
                                                <ul>
                                                    <li class="customize-li mt-3">
                                                        <input type="checkbox" id="myCheckbox{{$row->id}}" value="{{$row->id}}"/>
                                                        <label for="myCheckbox{{$row->id}}" id="custom" class="text-left pt-3">
                                                        <div class="imag-i text-center">
                                                                <img src="{{asset('uploads/toppings/'.$row->image)}}" class=" image" width="130" height="130" />
                                                            </div>
                                                            <div class="content-text  text-center py-2">

                                                                <h6 class="select-heading mb-0 pb-0">{{$row->name}}</h6>
                                                                <!--half full-->
                                                                <section>
							              <div class="cntr item  container m-0 p-0  mr-3 text-center ">
							                <label for="rdo-1{{$row->id}}" class="btn-radio">
							                  <input type="radio" id="rdo-1{{$row->id}}" name="radio_grp{{$row->id}}" value="LH">
							                  <svg width="20px" height="20px" viewBox="0 0 20 20">
							                    <circle cx="10" cy="10" r="9"></circle>
										<path d="M10,7 C8.34314575,7 7,8.34314575 7,10 C7,11.6568542 8.34314575,13 10,13 C11.6568542,13 13,11.6568542 13,10 
                                                                                  C13,8.34314575 11.6568542,7 10,7 Z" class="inner"></path>
												                    <path d="M10,1 L10,1 L10,1 C14.9705627,1 19,5.02943725 19,10 L19,10 L19,10 
                                                                                C19,14.9705627 14.9705627,19 10,19 L10,19 L10,19 C5.02943725,19 1,14.9705627 1,10 L1,10 L1,10 C1,5.02943725 5.02943725,1 
                                                                                 10,1 L10,1 Z" class="outer"></path>
												                  </svg>
							                  <span style="font-size:12px;">L H</span>
							                </label>
							                <label for="rdo-2{{$row->id}}" class="btn-radio"> 
							                  <input type="radio" id="rdo-2{{$row->id}}" name="radio_grp{{$row->id}}" value="F">
							                  <svg width="20px" height="20px" viewBox="0 0 20 20">
							                    <circle cx="10" cy="10" r="9"></circle>
							                    <path d="M10,7 C8.34314575,7 7,8.34314575 7,10 C7,11.6568542 8.34314575,13 10,13 C11.6568542,13 13,11.6568542 13,10 
                                                                            C13,8.34314575 11.6568542,7 10,7 Z" class="inner"></path>
							                    <path d="M10,1 L10,1 L10,1 C14.9705627,1 19,5.02943725 19,10 L19,10 L19,10 C19,14.9705627 14.9705627,19 10,19 L10,19 L10,19 
                                                                             C5.02943725,19 1,14.9705627 1,10 L1,10 L1,10 C1,5.02943725 5.02943725,1 10,1 L10,1 Z" class="outer"></path>
							                  </svg>
							                  <span style="font-size:12px;">F </span>
							                </label>
							                <label for="rdo-3{{$row->id}}" class="btn-radio">
							                  <input type="radio" id="rdo-3{{$row->id}}" name="radio_grp{{$row->id}}" value="RH">
							                  <svg width="20px" height="20px" viewBox="0 0 20 20">
							                    <circle cx="10" cy="10" r="9"></circle>
							                    <path d="M10,7 C8.34314575,7 7,8.34314575 7,10 C7,11.6568542 8.34314575,13 10,13 C11.6568542,13 13,11.6568542 13,10 
                                                                                 C13,8.34314575 11.6568542,7 10,7 Z" class="inner"></path>
							                    <path d="M10,1 L10,1 L10,1 C14.9705627,1 19,5.02943725 19,10 L19,10 L19,10 C19,14.9705627 14.9705627,19 10,19 L10,19 L10,19 
                                                                        C5.02943725,19 1,14.9705627 1,10 L1,10 L1,10 C1,5.02943725 5.02943725,1 10,1 L10,1 Z" class="outer"></path>
							                  </svg>
							                  <span style="font-size:12px;">R H</span>
							                </label>
							              </div>
							            </section>

                                                              
                                                                

                                                                <div class="item mt-0 pt-0">
                                                                    
                                                                    
                                                                    <span class="badge badge-pill mt-3 web-color" style="border: 1px solid #002E50;  border-radius: 0px;box-shadow: none;">
                                                                        <button   id="topminus{{$row->id}}" style="cursor: pointer;" class="top-plus mr-1 p-0 m-0  "><i class="fa fa-minus   red-text" style="font-size: 9px;"></i></button>
                                                                        <b class=" px-2  top-qty{{$row->id}}" >0</b>
                                                                        <button id="toppluse{{$row->id}}" style="cursor: pointer;" class="top-minus pl-1 p-0 m-0 "><i class="fa fa-plus  green-text" style="font-size: 9px;"></i></button>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                @endforeach
                            </div>
                            </div>
                            <div class="tab-pane fade" id="meat_pan" role="tabpanel" aria-labelledby="meat">
                                      <div class="row p-0 m-0 pan-height">
                                @foreach(@App\ToppingValue::where('type',2)->get() as $row)
<input type="hidden"  name='toppingqty_{{$row->id}}' id="toppingqty_{{$row->id}}"  value="0">   
                             	<div class="col-md-4 m-0 p-0 ">
                                                <ul>
                                                    <li class="customize-li mt-3">
                                                        <input type="checkbox" id="myCheckbox{{$row->id}}" value="{{$row->id}}"/>
                                                        <label for="myCheckbox{{$row->id}}" id="custom" class="text-left pt-3">
                                                            
                                                            <div class="imag-i text-center">
                                                                <img src="{{asset('uploads/toppings/'.$row->image)}}" class=" image" width="130" height="130" />
                                                            </div>
                                                            <div class="content-text  text-center py-2">

                                                                <h6 class="select-heading mb-0 pb-0">{{$row->name}}</h6>
                                                                <section>
							              <div class="cntr item  container m-0 p-0  mr-3 text-center ">
							                <label for="rdo-1{{$row->id}}" class="btn-radio">
							                  <input type="radio" id="rdo-1{{$row->id}}" name="radio_grp{{$row->id}}" value="LH">
							                  <svg width="20px" height="20px" viewBox="0 0 20 20">
							                    <circle cx="10" cy="10" r="9"></circle>
										<path d="M10,7 C8.34314575,7 7,8.34314575 7,10 C7,11.6568542 8.34314575,13 10,13 C11.6568542,13 13,11.6568542 13,10 
                                                                                  C13,8.34314575 11.6568542,7 10,7 Z" class="inner"></path>
												                    <path d="M10,1 L10,1 L10,1 C14.9705627,1 19,5.02943725 19,10 L19,10 L19,10 
                                                                                C19,14.9705627 14.9705627,19 10,19 L10,19 L10,19 C5.02943725,19 1,14.9705627 1,10 L1,10 L1,10 C1,5.02943725 5.02943725,1 
                                                                                 10,1 L10,1 Z" class="outer"></path>
												                  </svg>
							                  <span style="font-size:12px;">L H</span>
							                </label>
							                <label for="rdo-2{{$row->id}}" class="btn-radio"> 
							                  <input type="radio" id="rdo-2{{$row->id}}" name="radio_grp{{$row->id}}" value="F">
							                  <svg width="20px" height="20px" viewBox="0 0 20 20">
							                    <circle cx="10" cy="10" r="9"></circle>
							                    <path d="M10,7 C8.34314575,7 7,8.34314575 7,10 C7,11.6568542 8.34314575,13 10,13 C11.6568542,13 13,11.6568542 13,10 
                                                                            C13,8.34314575 11.6568542,7 10,7 Z" class="inner"></path>
							                    <path d="M10,1 L10,1 L10,1 C14.9705627,1 19,5.02943725 19,10 L19,10 L19,10 C19,14.9705627 14.9705627,19 10,19 L10,19 L10,19 
                                                                             C5.02943725,19 1,14.9705627 1,10 L1,10 L1,10 C1,5.02943725 5.02943725,1 10,1 L10,1 Z" class="outer"></path>
							                  </svg>
							                  <span style="font-size:12px;">F </span>
							                </label>
							                <label for="rdo-3{{$row->id}}" class="btn-radio">
							                  <input type="radio" id="rdo-3{{$row->id}}" name="radio_grp{{$row->id}}" value="RH">
							                  <svg width="20px" height="20px" viewBox="0 0 20 20">
							                    <circle cx="10" cy="10" r="9"></circle>
							                    <path d="M10,7 C8.34314575,7 7,8.34314575 7,10 C7,11.6568542 8.34314575,13 10,13 C11.6568542,13 13,11.6568542 13,10 
                                                                                 C13,8.34314575 11.6568542,7 10,7 Z" class="inner"></path>
							                    <path d="M10,1 L10,1 L10,1 C14.9705627,1 19,5.02943725 19,10 L19,10 L19,10 C19,14.9705627 14.9705627,19 10,19 L10,19 L10,19 
                                                                        C5.02943725,19 1,14.9705627 1,10 L1,10 L1,10 C1,5.02943725 5.02943725,1 10,1 L10,1 Z" class="outer"></path>
							                  </svg>
							                  <span style="font-size:12px;">R H</span>
							                </label>
							              </div>
							            </section>
                                                                <div class="item mt-0 pt-0">
                                                                    
                                                                   <span class="badge badge-pill mt-3 web-color" style="border: 1px solid #002E50;  border-radius: 0px;box-shadow: none;">
                                                                        <button   id="topminus{{$row->id}}" style="cursor: pointer;" class="top-plus mr-1 p-0 m-0"><i class="fa fa-minus   red-text" style="font-size: 9px;"></i></button>
                                                                        <b class=" px-2  top-qty{{$row->id}}" >0</b>
                                                                        <button id="toppluse{{$row->id}}" style="cursor: pointer;" class="top-minus pl-1 p-0 m-0"><i class="fa fa-plus  green-text" style="font-size: 9px;"></i></button>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                @endforeach
                            </div>
                            </div>
                            <div class="tab-pane fade" id="vege_pan" role="tabpanel" aria-labelledby="vege">
                                   <div class="row p-0 m-0 pan-height">
                                @foreach(@App\ToppingValue::where('type',3)->get() as $row)
<input type="hidden"  name='toppingqty_{{$row->id}}' id="toppingqty_{{$row->id}}"  value="0">
                                	<div class="col-md-4 m-0 p-0 ">
                                                <ul>
                                                    <li class="customize-li mt-3">
                                                        <input type="checkbox" id="myCheckbox{{$row->id}}" value="{{$row->id}}"/>
                                                        <label for="myCheckbox{{$row->id}}" id="custom" class="text-left pt-3">
                                                        <div class="imag-i text-center">
                                                                <img src="{{asset('uploads/toppings/'.$row->image)}}" class=" image" width="130" height="130" />
                                                            </div>
                                                            <div class="content-text text-center  py-2">

                                                                <h6 class="select-heading mt-0 pt-0">{{$row->name}}</h6>
                                                                <section>
							              <div class="cntr item  container m-0 p-0  mr-3 text-center ">
							                <label for="rdo-1{{$row->id}}" class="btn-radio">
							                  <input type="radio" id="rdo-1{{$row->id}}" name="radio_grp{{$row->id}}" value="LH">
							                  <svg width="20px" height="20px" viewBox="0 0 20 20">
							                    <circle cx="10" cy="10" r="9"></circle>
										<path d="M10,7 C8.34314575,7 7,8.34314575 7,10 C7,11.6568542 8.34314575,13 10,13 C11.6568542,13 13,11.6568542 13,10 
                                                                                  C13,8.34314575 11.6568542,7 10,7 Z" class="inner"></path>
												                    <path d="M10,1 L10,1 L10,1 C14.9705627,1 19,5.02943725 19,10 L19,10 L19,10 
                                                                                C19,14.9705627 14.9705627,19 10,19 L10,19 L10,19 C5.02943725,19 1,14.9705627 1,10 L1,10 L1,10 C1,5.02943725 5.02943725,1 
                                                                                 10,1 L10,1 Z" class="outer"></path>
												                  </svg>
							                  <span style="font-size:12px;">L H</span>
							                </label>
							                <label for="rdo-2{{$row->id}}" class="btn-radio"> 
							                  <input type="radio" id="rdo-2{{$row->id}}" name="radio_grp{{$row->id}}" value="F">
							                  <svg width="20px" height="20px" viewBox="0 0 20 20">
							                    <circle cx="10" cy="10" r="9"></circle>
							                    <path d="M10,7 C8.34314575,7 7,8.34314575 7,10 C7,11.6568542 8.34314575,13 10,13 C11.6568542,13 13,11.6568542 13,10 
                                                                            C13,8.34314575 11.6568542,7 10,7 Z" class="inner"></path>
							                    <path d="M10,1 L10,1 L10,1 C14.9705627,1 19,5.02943725 19,10 L19,10 L19,10 C19,14.9705627 14.9705627,19 10,19 L10,19 L10,19 
                                                                             C5.02943725,19 1,14.9705627 1,10 L1,10 L1,10 C1,5.02943725 5.02943725,1 10,1 L10,1 Z" class="outer"></path>
							                  </svg>
							                  <span style="font-size:12px;">F </span>
							                </label>
							                <label for="rdo-3{{$row->id}}" class="btn-radio">
							                  <input type="radio" id="rdo-3{{$row->id}}" name="radio_grp{{$row->id}}" value="RH">
							                  <svg width="20px" height="20px" viewBox="0 0 20 20">
							                    <circle cx="10" cy="10" r="9"></circle>
							                    <path d="M10,7 C8.34314575,7 7,8.34314575 7,10 C7,11.6568542 8.34314575,13 10,13 C11.6568542,13 13,11.6568542 13,10 
                                                                                 C13,8.34314575 11.6568542,7 10,7 Z" class="inner"></path>
							                    <path d="M10,1 L10,1 L10,1 C14.9705627,1 19,5.02943725 19,10 L19,10 L19,10 C19,14.9705627 14.9705627,19 10,19 L10,19 L10,19 
                                                                        C5.02943725,19 1,14.9705627 1,10 L1,10 L1,10 C1,5.02943725 5.02943725,1 10,1 L10,1 Z" class="outer"></path>
							                  </svg>
							                  <span style="font-size:12px;">R H</span>
							                </label>
							              </div>
							            </section>
                                                                <div class="item mb-0 pb-0">
                                                                    
                                                                    <span class="badge badge-pill mt-3 web-color" style="border: 1px solid #002E50;  border-radius: 0px;box-shadow: none;">
                                                                        <button   id="topminus{{$row->id}}" style="cursor: pointer;" class="top-plus mr-1 p-0 m-0"><i class="fa fa-minus   red-text" style="font-size: 9px;"></i></button>
                                                                        <b class=" px-2  top-qty{{$row->id}}" >0</b>
                                                                        <button id="toppluse{{$row->id}}" style="cursor: pointer;" class="top-minus pl-1 p-0 m-0"><i class="fa fa-plus  green-text" style="font-size: 9px;"></i></button>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                @endforeach
                            </div>
                            </div>
                        </div>
                        
                        	</div>
                        	<div class="col-md-4 m-auto">
                                        <div>
                                            <img src="{{asset('uploads/menus/'.$item->image)}}" class="img img-fluid text-center"> </div>
                                        <p class="text-center">
                                            {{$item->description}}
                                        </p>
                                        <hr>
                                        <div class="add py-4">
                                            <div class="row ">
                                                <div class="col-md-7">
                                                    <a type="button" class="btn-floating  text-center mt-1 pt-1 minus" style="background:#FF3547;box-shadow:none;width:30px!important;
    height: 30px!important;"><i class="fa fa-minus  white-text" style="font-size:12px;" aria-hidden="true"></i></a>
                                                    <a href="" class=" black-text" style="font-size:25px;">
                                                  <b class="font-weight-bold " style="color:#002E50;font-size:25px;" id="qty2"> 1</b>
                                                        </a>
                                                        <a type="button" class="btn-floating text-center pt-1 mt-1 plus" style="background:#FF3547;box-shadow:none;width:30px!important;
    height: 30px!important;"><i class="fa fa-plus  white-text" aria-hidden="true"></i></a>

                                                </div>
                                                <div class="col-md-5 ">
                                                    <h3 class="h3-responsive h3 font-weight-bold price_show" style="color:#002E50;">
                                                    </h3>
                                                </div>
                                            </div>

                                            <div class="add-to-cart  pt-4  mt-1 ">
                                                <button id="" class="btn btn-block add_to_cart  white-text font-weight-bold" style="box-shadow:none;background:#002E50;">
                                                    Add To cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                        </div>
                </div>

                <div class="tab-pane fade" id="contact-md" role="tabpanel" aria-labelledby="contact-tab-md">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row p-0 m-0 pan-height">
                                <div class="col-md-4 m-0 p-0 ">
                                    <ul>
                                        <li class="customize-li mt-3">
                                            <input type="radio" id="myCheckboxspi1" value="ragular" name="spi" checked/>
                                            <label for="myCheckboxspi1" id="custom_radio" class="text-left pt-3">
                                                
                                                <div class="imag-i text-center">
                                                <img src="{{asset('svg/NONE.webp')}}" class=" image" width="130" height="130" />
                                                </div>
                                                <div class="content-text  text-center py-2">
        
                                                    <h6 class="select-heading mb-0 pb-0">Rugular</h6>
                                                    
                                                </div>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-4 m-0 p-0 ">
                                    <ul>
                                        <li class="customize-li mt-3">
                                            <input type="radio" id="myCheckboxspi2" value="light" name="spi"/>
                                            <label for="myCheckboxspi2" id="custom_radio" class="text-left pt-3">
                                                
                                                <div class="imag-i text-center">
                                                    <img src="{{asset('svg/NONE.webp')}}" class=" image" width="130" height="130" />
                                                </div>
                                                <div class="content-text  text-center py-2">
        
                                                    <h6 class="select-heading mb-0 pb-0">Lightly Done</h6>
                                                    
                                                </div>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-4 m-0 p-0 ">
                                    <ul>
                                        <li class="customize-li mt-3">
                                            <input type="radio" id="myCheckboxspi3" value="well" name="spi"/>
                                            <label for="myCheckboxspi3" id="custom_radio" class="text-left pt-3">
                                                
                                                <div class="imag-i text-center">
                                                    <img src="{{asset('svg/NONE.webp')}}" class=" image" width="130" height="130" />
                                                </div>
                                                <div class="content-text  text-center py-2">
        
                                                    <h6 class="select-heading mb-0 pb-0">Well Done</h6>
                                                    
                                                </div>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 m-auto">
                            <div >
                                <img src="{{asset('uploads/menus/'.$item->image)}}" class="img img-fluid text-center"> </div>
                            <p class="text-center">
                                {{$item->description}}
                            </p>
                            <hr>
                            <div class="add py-4">
                                <div class="row ">
                                    <div class="col-md-7">
                                        <a type="button" class="btn-floating  text-center mt-1 pt-1 minus" style="background:#FF3547;box-shadow:none;width:30px!important;
    height: 30px!important;"><i class="fa fa-minus  white-text" style="font-size:12px;" aria-hidden="true"></i></a>
                                        <a href="" class=" black-text" style="font-size:25px;">
                                      <b class="font-weight-bold " style="color:#002E50;font-size:25px;" id="qty2"> 1</b>
                                            </a>
                                            <a type="button" class="btn-floating text-center pt-1 mt-1 plus" style="background:#FF3547;box-shadow:none;width:30px!important;
    height: 30px!important;"><i class="fa fa-plus  white-text" aria-hidden="true"></i></a>

                                    </div>
                                    <div class="col-md-5 ">
                                        <h3 class="h3-responsive  h3 font-weight-bold price_show" style="color:#002E50;">
                                        </h3>
                                    </div>
                                </div>

                                <div class="add-to-cart  pt-4  mt-1 ">
                                    <button id="" class="btn btn-block add_to_cart  white-text font-weight-bold" style="box-shadow:none;background:#002E50;">
                                        Add To cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </section>



    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script>
        $(document).ready(function() {
        var size = $("input[name='size']:checked").val();
        var sizt='';
        
        var toppings=[];
        var topping_sizes=[];
    
        $.get("https://latenightpizza.com/size/"+size, function(data, status){
        if(data.value=="SM"){
        	sizt="Small";
        }
        if(data.value=="M"){
        	sizt="Medium";
        }
        if(data.value=="L"){
        	sizt="Larg";
        }
        if(data.value=="XL"){
        	sizt="Extra Larg";
        }
        if(data.value=="P"){
        	sizt="Party";
        }
        	$('#title').text(sizt);
        	$('#total').val(0);
        	$("#total").val(data.price);
        	$("#price").val(data.price);
        	$('.price_show').text('$'+$('#total').val());
        });
        $('input[name="size"]').change(function(){
        
        size = $("input[name='size']:checked").val();

        $.get("https://latenightpizza.com/size/"+$(this).val(), function(data, status){
        	if(data.value=="SM"){
        	sizt="Small";
        }
        if(data.value=="M"){
        	sizt="Medium";
        }
        if(data.value=="L"){
        	sizt="Larg";
        }
        if(data.value=="XL"){
        	sizt="Extra Larg";
        }
        if(data.value=="P"){
        	sizt="Party";
        }
        var sauce=parseFloat($('#sauce_p').val());
        var ranch=parseFloat($('#ranch_p').val());
        
        	var qty=parseInt($("#qty").text());
        	$('#title').text(sizt);
        	$('#total').val(0);
        	$("#total").val((data.price+sauce+ranch)*qty);
        	$("#price").val(data.price+sauce+ranch);
        	$('.price_show').text('$'+(parseFloat($("#price").val()*qty)));
        });
        });


        $(".minus").click(function(){
        var sauce=parseFloat($('#sauce_p').val());
        var ranch=parseFloat($('#ranch_p').val());
        	var qty=$("#qty").text();
        	var total=parseFloat($('#price').val());
        	if(parseInt(qty)!=1){

	        	var upqty=parseInt(qty)-1
	        	$("#qty").text(upqty);
	        	$("#qty1").text(upqty);
                $("#qty2").text(upqty);
	        	$('#total').val((total*upqty));
        	$('.price_show').text('$'+$('#total').val());
        	}
        });

        $(".plus").click(function(){
        var sauce=parseFloat($('#sauce_p').val());
        var ranch=parseFloat($('#ranch_p').val());
        	var qty=$("#qty").text();
        	var total=parseFloat($('#price').val());
        	var upqty=parseInt(qty)+1
        	$("#qty").text(upqty);
        	$("#qty1").text(upqty);
            $("#qty2").text(upqty);
        	$('#total').val(total*upqty);
        	$('.price_show').text('$'+($('#total').val()));
        	
        	console.log(sauce);

        });
        
        $('input[name=sauce]').change(function(){
        	var sauce=$('input[name=sauce]:checked').val();
        	
        	if($("#sauce_p").val()==0){
        		var total=parseFloat($('#price').val());
        		@if($item->free_sauces==0)
        		$('#price').val(total+0.5);
        		@else
        		$('#price').val(total);
        		@endif
        		var qty=parseInt($("#qty").text());
        		$("#total").val(parseFloat($("#price").val()*qty));
        		$('.price_show').text('$'+$('#total').val());
        		
        	}
        	$("#sauce").val(sauce);
        	@if($item->free_sauces==0)
        		$("#sauce_p").val(0.5);
        		@else
        		$("#sauce_p").val(0);
        		@endif
                	
        	
        });
        
        $('input[name=dough]').change(function(){
        	var dough=$('input[name=dough]:checked').val();
        	
        	
        	$("#dough").val(dough);
        });
        
        $('input[name=ranch]').change(function(){
        
        	var ranch=$('input[name=ranch]:checked').val();
        	if($("#ranch_p").val()==0){
        	var total=parseFloat($('#price').val());
        		$('#price').val(total+1);
        		var qty=parseInt($("#qty").text());
        		$("#total").val(parseFloat($("#price").val()*qty));
        		$('.price_show').text('$'+$('#total').val());
        	}
        	$("#ranch_p").val(1);
        	$("#ranch").val(ranch);
        	
        });
        
        $('input[name=spi]').change(function(){
        	var spi=$('input[name=spi]:checked').val();
        	$("#spi").val(spi);
        });



@foreach(@App\ToppingValue::all() as $row1)


$('#toppluse{{$row1->id}}').click(function(){
	var topqt=parseInt($("#toppingqty_{{$row1->id}}").val());
    if(topqt<3){
        $("#toppingqty_{{$row1->id}}").val(topqt+1);
	    $(".top-qty{{$row1->id}}").text(topqt+1);
    }
    console.log(topqt);
	
});

$('#topminus{{$row1->id}}').click(function(){
	var topqt=parseInt($("#toppingqty_{{$row1->id}}").val());
    if(topqt>1){
        $("#toppingqty_{{$row1->id}}").val(topqt-1);
	    $(".top-qty{{$row1->id}}").text(topqt-1);
    }
    
	
});

$('#myCheckbox{{$row1->id}}').click(function(){

	if($(this).is(":checked")){
		var val=$(this).val();
                toppings.push(val);
                console.log(toppings);
                 $("#toppingqty_{{$row1->id}}").val(1);
	    $(".top-qty{{$row1->id}}").text(1);
            }
            if($(this).is(":not(:checked)")){
               var val=$(this).val();
                //toppings.pop(val);
                removeElement(toppings, val);
                console.log(toppings);
                 $("#toppingqty_{{$row1->id}}").val(0);
	    $(".top-qty{{$row1->id}}").text(0);
            }
});
@endforeach


function removeElement(array, elem) {
    var index = array.indexOf(elem);
    if (index > -1) {
        array.splice(index, 1);
    }
}

            $("#item-img").hide();
            $("#custom").click(function() {
                // show hide paragraph on button click
                $("#item-img").toggle(function() {});
            });
            
            
            $(".add_to_cart").click(function(){
            	$(".add_to_cart").attr('disabled','true');
            	console.log('cart');
            	var dough=$("#dough").val();
            	var sauce=$("#sauce").val();
            	var ranch=$("#ranch").val();
            	var sauce_p=$("#sauce_p").val();
            	var ranch_p=$("#ranch_p").val();
            	var spi=$("#spi").val();
            	var qty=parseInt($("#qty").text());
            	var i;
            	var toppin_qty=[];
            	var id={{$item->id}}
		for (i = 0; i < toppings.length; ++i) {
		    var top=toppings[i];
		    var topqty=$("#toppingqty_"+top).val();
		    toppin_qty.push(topqty);
		            var top_size=$("input[name='radio_grp"+top+"']:checked").val();
		            topping_sizes.push(top_size);
		

		}
            	 $.ajaxSetup({

		        headers: {
		
		            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		
		        }
		
		    });
		    
		    
		    $.ajax({

		           type:'POST',
		
		           url:'{{route("custome.cart")}}',
		
		           data:{id:id,qty:qty,size:size,sauce:sauce, ranch:ranch,dough:dough,spi:spi,topping_qty:toppin_qty,toppings:toppings,sauce_p:sauce_p,ranch_p:ranch_p,top_sizes:topping_sizes},
		
		           success:function(data){
				if(data="S"){
					window.location.assign('{{route("cart")}}')
				}
		
		           }
		
		        });
            });
            
            
            
            
            
            
        });
    </script>


@endsection