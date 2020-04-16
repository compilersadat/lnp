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

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
}
</style>
<section class="mt-5">
    <!--Carousel Wrapper-->
    <div id="carousel-example-1z" class="carousel slide carousel-fade mt-5 pt-5" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-1z" data-slide-to="1"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <!--First slide-->
            @foreach(@App\Slide::orderBy('id','DESC')->get() as $key=>$row)

            <div class="carousel-item  py-4 @if($key==0) active @endif " style="background:#002E50;">
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
                                <a href="" class="btn px-5 btn-color font-weight-bold mb-5" >
                                    Order Now
                                </a>
                            </div>

                        </div>
                    </div>
                </div>


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
    <div class="container my-5">
        <section class="vertical-center-4 slider ">
            @foreach (@App\Category::all() as $item)
            <div>
            <a class="" href="{{route('shop',$item->id)}}">
                    <!-- Card -->
                    <div class=" card_style bg-color mb-3">
                        <!-- Card content -->

                        <div class="card-body ">
                            <div class="text-center m-auto">
                                <img src="{{asset('uploads/cats/'.$item->image)}}" class=" m-auto img-fluid img">

                            </div>

                            <!-- Title -->
                            <div class=" pt-2 text-center">
                                <h6 class="font-weight-bold web-color h6 h6-responsive  pizza" >{{$item->name}}    </h6>

                            </div>


                        </div>

                    </div>

                    <!-- Card -->
                </a>

            </div>
            @endforeach
           
           

        </section>

    </div>

   
    <section class="menu py-5 my-5">
        <div class="container  ">
            <h1 class="h1 h1-responsive text-center white-text font-weight-bold" style="color: #fff;text-shadow: 2px 2px 2px  #bababa;">DAILY SPECIAL</h1>
            <p class="text-center white-text">Everyday Is Special  </p>
            <div class="row py-3">
                @foreach (@App\Offer::orderBy('id','ASC')->get() as $item)
                <div class="col-md-4 mt-2 ">

                    <!-- Card -->
                    <div class="card  ">
                        <div class="ribbon"><span>{{$item->ribben}}</span></div>

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
                                    <a href="{{url('cart')}}" class="btn btn-inside btn-sm font-weight-bold web-color mt-2" style="color: #002E50!important;" >Add To Cart</a>

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
@endsection
