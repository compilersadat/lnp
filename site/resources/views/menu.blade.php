@extends('layouts.layout')
@section('content')
<section class="menu-banner mt-5 pt-2" style="background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('svg/resturant/back.jpeg') ;background-size:cover ;height: 330px;">
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
@foreach ($cat as $item)
<section class="mt-5 ">

    <div class="container mt- pt-5">
        <h3 class="pizza pb-0 mb-0">
            <u>{{$item->name}}</u>
        </h3>
        <div class="row ">
            @foreach(@App\Item::where('cat_id',$item->id)->where('active',1)->get() as $row)
            <div class="col-md-4 mt-2 ">
                <hr>
                <div class="row m-0 p-0 ">
                    <div class="col-md-4 m-0 p-0">

                        <img src="{{asset('uploads/menus/'.$row->image)}}" class="img-fluid " >
                    </div>
                    <div class="col-md-8 web-color pt-2">
                        <h6 class=" pb-0 mb-0 h6 h6-responsive pizza font-weight-bold pt-2">{{$row->title}}</h6>
                        <p class="p-0 m-0" style="font-size: 12px;">
                            {!!$row->description!!}
                        </p>
                    </div>
                </div>


                <form class="d-flex  pt-3 web-color" method="POST" action="{{route('add.cart',$row->id)}}">
                    @csrf
                        <select class="browser-default font-weight-bold custom-select    py-0 my-0" style="border-radius:2px;border:solid 1px #002E50;height: 25px!important;font-size: 12px;" name="size" required>
                            <option selected>Select Size </option>
                           @foreach(@App\ItemVariable::where('item_id',$row->id)->get() as $size)
                            <option value="{{$size->id}}">{{$size->value}} &nbsp; ${{$size->price}}</option>
                            @endforeach
                        </select>
                    
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <div>
                        <button type="submit" class="badge py-2 px-4" style="color: #002E50!important;box-shadow: none;border:solid 1px #002E50;font-size: 10px;">Add To Cart</button>
                    
                    </div>
                    
                </form>
                <hr>

            </div>
            @endforeach
            

        </div>
    </div>
</section> 
@endforeach

@endsection
