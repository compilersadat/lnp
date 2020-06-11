@extends('layouts.layout')
@section('content')
<section class="mt-5 pt-2" style="background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url('../svg/shop.png')!important;background-size:cover!important;height:230px;">
    <div class=" pt-5 container web-color">
        <div class="row justify-content-center mt-3">
            <div class="col-md-8">
                <h2 class="h2 h2-responsive text-center mt-5 font-weight-bold white-text">Results for "{{$title}}"</h2>
                <p class="white-text text-center font-weight-bold">
                <a href="{{url('menus')}}" class="white-text">
                    <i class="fa fa-angle-left text-danger font-weight-bold" style="font-size:20px;"></i> &ensp;Back To Menu
                    </a>
                </p>

            </div>
        </div>

    </div>
</section>
<section class="container    py-5">
    <div class="row m-0 p-0">
        @foreach(@$items as $row)
        <div class="col-md-6  my-3 ">
            <div class="row m-0 p-0 ">
                <div class="col-md-4 px-3 py-2 text-center" style="background:#FAFAFA;border-radius:15px;">
                    <img src="{{asset('uploads/menus/'.$row->image)}}" class="img-fluid pt-3" style="height:130px;">
                </div>
                <div class="col-md-7 ml-2 web-color py-3" style="background:#FAFAFA;border-radius:15px;">
                    <h6 class=" pb-0 mb-0 h6 h6-responsive pizza font-weight-bold pt-2">{{$row->title}}</h6>
                    <p class="p-0 m-0" style="font-size: 12px;">
                        {!! $row->description !!}
                    </p> 
                <form class="   pt-4 web-color" method="POST" action="{{route('add.cart',$row->id)}}">
                    @csrf
                    <div class="row">
                    <div class="col-md-8">
                        <select class="browser-default font-weight-bold custom-select     py-0 my-0" style="border-radius:2px;border:solid 1px #002E50;height: 25px!important;font-size: 12px;" name="size" required>
                            
                           @foreach(@App\ItemVariable::where('item_id',$row->id)->whereNotNull('price')->get() as $size)
                            <option value="{{$size->id}}">{{$size->value}} &nbsp; ${{$size->price}}</option>
                            @endforeach
                        </select>
                    </div>
                    <input type="hidden" name="type" value="item"/>
                    
                    </div>
<div class="row pt-3">
<div class="col-md-5">
                        <button  type="submit" class="badge badge-success py-2 px-4" style="border:none;background:#002E50;">QUICK ADD</button>
                    
                    </div>
<div class="col-md-5">
                    @if($row->custome_type!=0)
                    <a href="{{route('customize',$row->id)}}" class="badge  py-2 px-4" style="border:1px solid #002E50;color:#002E50;"> Customize </a>
                    @endif
                    </div>
</div>
                </form>
               
                                </div>
                </div>            

        </div>
        @endforeach
        

    </div>
  
</section>

@foreach (@App\Category::where('parent_id',$id)->get() as $item)
<section class="mb-5 ">

    <div class="container  ">
        <h3 class=" pb-2 mb-0 h3 h3-responsive font-weight-bold web-color">
            <u>{{$item->name}}</u>
        </h3>
        <div class="row ">
            @foreach(@App\Item::where('cat_id',$item->id)->where('active',1)->get() as $row)
            <div class="col-md-6  my-3 ">
                <div class="row m-0 p-0 ">
                    <div class="col-md-4 m-0 px-3 py-2" style="background:#FAFAFA;border-radius:15px;">
                        <img src="{{asset('uploads/menus/'.$row->image)}}" class="img-fluid " >
                    </div>
                    <div class="col-md-7 ml-2 web-color py-3" style="background:#FAFAFA;border-radius:15px;">
                        <h6 class=" pb-0 mb-0 h6 h6-responsive pizza font-weight-bold pt-2">{{$row->title}}</h6>
                        <p class="p-0 m-0" style="font-size: 12px;">
                            {!! $row->description !!}
                        </p> 
                    <form class="   pt-4 web-color" method="POST" action="{{route('add.cart',$row->id)}}">
                        @csrf
                        <div class="row">

                        <div class="col-md-8">
                            <select class="browser-default font-weight-bold custom-select     py-0 my-0" style="border-radius:2px;border:solid 1px #002E50;height: 25px!important;font-size: 12px;" name="size" required>
                               
                               @foreach(@App\ItemVariable::where('item_id',$row->id)->whereNotNull('price')->get() as $size)
                                <option value="{{$size->id}}">{{$size->value}} &nbsp; ${{$size->price}}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="hidden" name="type" value="item"/>
                      
                        </div>
<div class="row pt-3">
  <div class="col-md-5">
                            <button  type="submit" class="badge white-text py-2 px-4" style="border:none;background:#002E50;">QUICK ADD</button>
                        
                        </div>
 <div class="col-md-5">
                    
                    </div>
</div>
                    </form>
                    @if($row->is_custom==1)
                    <div class="col-md-4 m-0 p-0 pt-3">
                        <a href="{{route('customize',$row->id)}}" class="badge  py-2 px-4  text-uppercase" style="background:#fff;border:1px solid #002E50;color:#002E50;">Customize</a>
                    </div>
                    @endif
                                    </div>
                    </div>            
    
            </div>
            @endforeach
            

        </div>
    </div>
</section> 
@endforeach
@endsection