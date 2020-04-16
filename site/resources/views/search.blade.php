@extends('layouts.layout')
@section('content')
<section class="container  py-5">
    <h3 class="h3 h3-responsive text-center">Results for "{{$title}}"</h3>
    <div class="row ">
        @foreach(@$items as $row)
        <div class="col-md-4 mt-2 ">
            <hr>
            <div class="row m-0 p-0 ">
                <div class="col-md-4 m-0 p-0">
                    <img src="{{asset('uploads/menus/'.$row->image)}}" class="img-fluid " >
                </div>
                <div class="col-md-8 web-color pt-2">
                    <h6 class=" pb-0 mb-0 h6 h6-responsive pizza font-weight-bold pt-2">{{$row->title}}</h6>
                    <p class="p-0 m-0" style="font-size: 12px;">
                        {!! $row->description !!}
                    </p>
                </div>
            </div>


            <div class="d-flex  pt-3 web-color" >
                <div class="">
                    <select class="browser-default font-weight-bold custom-select    py-0 my-0" style="border-radius:2px;border:solid 1px #002E50;height: 25px!important;font-size: 12px;" >
                        <option selected>Select Size </option>
                       @foreach(@App\ItemVariable::where('item_id',$row->id)->get() as $size)
                        <option value="{{$size->id}}">{{$size->value}} &nbsp; ${{$size->price}}</option>
                        @endforeach
                    </select>
                </div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div>
                    <a href="" class="badge py-2 px-4" style="color: #002E50!important;box-shadow: none;border:solid 1px #002E50;font-size: 10px;">Order Now</a>
                </div>
            </div>
            <hr>

        </div>
        @endforeach
        

    </div>
  
</section>
@endsection