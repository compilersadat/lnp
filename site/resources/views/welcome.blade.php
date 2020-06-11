@extends('layouts.layout')
@section('content')
<style>
.collapsible {
    background:white;
  color: ;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
}
.title {
  font-weight: 800;
  color: transparent;
  background: url("svg/4f39103da156fb7e479abd6355932e88.jpg") repeat;
  background-position: 40% 50%;
  -webkit-background-clip: text;
  position: relative;
  text-align: center;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
}
</style>
<section class="mt-5">
    <!--Carousel Wrapper-->
    <div id="carousel-example-1z" class="carousel slide carousel-fade mt-4 pt-4" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
        @foreach(@App\Slide::orderBy('id','DESC')->get() as $key=>$row)
            <li data-target="#carousel-example-1z" data-slide-to="{{$key}}" @if($key==0) class="active" @endif></li>
            
        @endforeach
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <!--First slide-->
            @foreach(@App\Slide::orderBy('id','DESC')->get() as $key=>$row)

            <div class="carousel-item @if($row->type=="slide") py-5 @else py-3 @endif @if($key==0) active @endif " @if($row->type=="slide") style="background:#002E50;" @endif>
            	@if($row->type=="slide")
                <div class="slider-spacing">
                    <div class="row px-5">
                        <div class="col-md-5  col-sm-4">
                            <img class="img-fluid img" src="{{asset('uploads/slides/'.$row->image)}}"
                                 alt="First slide">
                        </div>
                        <div class="col-md-7  col-sm-8 px-4 pt-5 " >
                            <h1 class="h1 h1-responsive  text-uppercase slider-text   font-weight-bold" style="color: #fff;text-shadow: 2px 2px 2px  #bababa;">{!! $row->title !!}</h1>
                            <p class="text-justify  d-none d-md-block" style="color: #eeeeee;  ">
                                {!! $row->description !!}
                            </p>
                            <div class="mt-2">
                            <a href="{{url('menus')}}" class="btn px-5 btn-color font-weight-bold mb-5" >
                                    Explore More
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                @else
                <img class="w-100 d-block" src="{{asset('uploads/slides/'.$row->image)}}">
                @endif


            </div>
            @endforeach

           
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
</section>
    <!--/.Carousel Wrapper-->
    <div class="container my-3  ">
    <div class="text-center pb-3">
    	<h1 class="h1 h1-responsive title">LATE NIGHT PIZZA<h1>
    	<h2 class="h2 h2-responsive font-weight-bold">We Serve Best food in Scarborough</h2>
    </div>
        <div class="row">
            <div class="col-md-2">
                <h3 class="h3 h3-responsive pb-4 web-color font-weight-bold" >CATEGORIES

                    <hr class="bg-red m-0 p-0">
                </h3>
            </div>
            <a href="{{url('menus')}}">
            <div class="col-md-3 ml-auto   text-right pt-2">
            <a href="{{url('menus')}}" class=" btn-md px-5 text-danger explore-btn font-weight-bold">Explore More</a>
            </div>
            </a>
        </div>
        <section class="  ">
            <div class="row">
                @foreach (@App\Category::where('parent_id',0)->get() as $item)
                        <!-- Card -->
                        <div class=" col-lg-3 col-md-4     mb-3">
                            <!-- Card content -->
                            <a class="" href="{{route('shop',$item->id)}}">
                            <div class="card  card-cat"  style="background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url({{asset('uploads/cats/'.$item->image)}})!important;background-size:cover!important;">

                            <div class="card-body ">
                                <div class="text-center m-auto">
                                    {{-- <img src="{{asset('uploads/cats/'.$item->image)}}" class=" m-auto cat-img img-fluid img"> --}}
    
                                </div>
    
                                <!-- Title -->
                                <div class=" pt-5 mt-5 text-center">
                                    <h4 class="font-weight-bold white-text h4 h4-responsive pt-2 card-cont text-uppercase" style="font-family: 'Bitter', serif;letter-spacing:1px;@if($item->id==3)font-size:129%;@else @if($item->id==11 || $item->id==12 ) font-size:107%; @else font-size:135%; @endif @endif">{{$item->name}}    </h4>
    
                                </div>
    
    
                            </div>
                            </div>
                          </a>
                        </div>
                        @endforeach
                        <!-- Card -->    
                </div>
        </section>

    </div>
    
    <section class="py-5  text-center">
    	<a class="btn btn-lg " href="{{url('menus')}}" style="border:2px solid #002E50;color:#002E50!important"><b>See Menu & Order</b></a>
    </section>

   
    <section class="menu py-5 my-5">
        <div class="container  ">
            <h1 class="h1 h1-responsive text-center white-text font-weight-bold" style="color: #fff;text-shadow: 2px 2px 2px  #bababa;">DAILY SPECIAL</h1>
            <p class="text-center white-text">Everyday Is Special  </p>
            <div class="row py-3">
                @foreach (@App\Offer::orderBy('id','ASC')->get() as $item)
                <div class="col-lg-4 col-md-6 mt-2 ">

                    <!-- Card -->
                    <div class="card  specail-card" @if($item->code!=date('D',strtotime(now()))) style="background-color:#edf2f5" @endif>
                        <div class="ribbon"><span style="font-size:8px;">{{$item->ribben}}</span></div>

                        <div class="row m-0 p-0">
                            <div class="col-md-5 col-5 m-0 p-0">
                                <div class="view pt-3 mt-3 overlay ">
                                    <img class=""  style="width: 100%;"   src="{{asset('uploads/offers/'.$item->image)}}"
                                         alt="Card image cap">
                                    <a href="#!">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-7 col-7 m-0 p-0">
                                <div class="card-body m-0 py-3 ">

                                    <!-- Title -->
                                    <h5 class="h5 h5-responsive m-0 py-2 font-weight-bold ">{{$item->day}} <br><b class="red-text font-weight-bold small">{{$item->title}}</b> </h5>
                                    <p style="font-size: 13px;"  class=" p-0 m-0 disp-cont" id="" aria-expanded="false">
                                        {!! substr($item->description,0,25) !!}
                                        
                                    </p>
                                    {{-- <button  type="button" class="collapsible m-0 p-0" style="font-size:12px;">See More</button> --}}
                                   <p style="font-size: 13px;display:none;"  class=" p-0 m-0 more-cont">{!! substr($item->description,25,strlen($item->description)) !!}</p>
                                   <a href="" class="more" style="font-size: 13px;">See More</a>

                                   <p class="p-0 m-0" style="font-size: 13px;">
                                        ${{$item->o_price}} <strike>${{$item->a_price}}</strike>
                                    </p>
                                    <!-- Text -->


                                    <!-- Button -->
                                    <form method="POST" action="{{route('add.cart',$item->id)}}">
                                        @csrf
                                        <input type="hidden" name="type" value="offer"/>
                                        <button type="submit" class="btn btn-inside btn-sm font-weight-bold web-color mt-2" @if($item->code!=date('D',strtotime(now()))) disabled @endif style="color: #002E50!important;" >Add To Cart</button>

                                    </form>

                                </div>

                            </div>
                        </div>
                        <!-- Card image -->


                        <!-- Card content -->

                    </div>
                    <!-- Card -->
                </div>
                @endforeach
                
                

            </div>
        </div>

    </section>
    {{--<iframe class="m-0 p-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41288302.6806295!2d-130.11358188775674!3d50.83045994806638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4b0d03d337cc6ad9%3A0x9968b72aa2438fa5!2sCanada!5e0!3m2!1sen!2sin!4v1583748186234!5m2!1sen!2sin"  frameborder="0" s allowfullscreen="" style="width: 100%!important;border: 0;height: 350px;"></iframe>--}}
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script>
    $(document).ready(function(){
        $('.more').click(function(e) {
  e.preventDefault();
  $(this).text(function(i, t) {
    return t == 'close' ? 'See more' : 'close';
  }).prev('.more-cont').slideToggle()
});
    });
    </script>
    <script>
        $(document).ready(function() {
          $('.explore-btn').hover(function() {
            $(this).html('Our Delicious Menu');
          }, function() {
            $(this).html('Explore More');
          });
        });
      </script>
@endsection
