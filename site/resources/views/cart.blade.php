@extends('layouts.layout')

@section('content')
<section class="menu-banner mt-5 pt-3" style="background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('svg/resturant/back.jpeg'); background-size: cover;">
        <div class=" py-5 container white-text">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h1 class="h1 h1-responsive text-center pt-5 pizza">
                        Your Cart
                    </h1>
                    <p class="white-text text-center font-weight-bold">
                        <a href="{{url('menus')}}" class="white-text">
                            <i class="fa fa-angle-left text-danger font-weight-bold" style="font-size:20px;"></i> &ensp;Back To Menu
                            </a>
                        </p>
                </div>
            </div>

        </div>
    </section>
<section>
    <div class="container-fluid my-5 py-3">
    @if(session('cart'))
        <div class="row">
            <div class="col-md-8">
                <div class="table-responsive">
                    <table class="table table-borderless " style="border: none!important;">
                        <thead>
                        <tr>
                            <th class="font-weight-bold">
                                <strong>Product</strong>
                            </th>

                            <th class="font-weight-bold">
                                <strong>Price (Per Item)</strong>
                            </th>
                            <th class="font-weight-bold">
                                <strong>QTY</strong>
                            </th>
                            <th class="font-weight-bold">Custom Details</th>
                            <th class="font-weight-bold">
                                <strong>Amount</strong>
                            </th>
                            <th class="font-weight-bold">Action</th>
                        </tr>

                        </thead>
                        <?php
                        $total=0;
                        $amount=0;
                        $topping_price=0;
                        $coupen=
                        $discount=0;
                        ?>
                        <p style="display:none">@if(session('coupen')) {{$coupen=session('coupen')}} @endif</p>
                        <tbody class="" style="border: none!important;">
                        @if(session('cart'))
                        
                    @foreach(session('cart') as $id => $details)
                            @if(@$details['type']=="item")
                                <tr>
                            <td scope="row">
                                <img src="{{asset('uploads/menus/'.$details['photo'])}}" alt="" class="" width="70">
                                <span class="pizza">
                    <strong>{{$details['name']}} ({{@App\ItemVariable::where('id',$details['size'])->value('value')}})</strong>
                    </span>
                            </td>
                            <td>
                              ${{@App\ItemVariable::where('id',$details['size'])->value('price')}}
                            </td>
                            <td>
                                <div class="row m-0 p-1">
                            <span class="badge badge-pill web-color" style="border: 1px solid #002E50;  border-radius: 0px;box-shadow: none;">
                                   <a href="{{route('dec.cart',$id)}}" style="cursor: pointer;" class="mr-1 p-0 m-0" ><i class="fa fa-minus   red-text" style="font-size: 9px;"></i></a>
                                   <b  class=" px-2  " >{{$details['quantity']}}</b>
                                   <a href="{{route('incr.cart',$id)}}" style="cursor: pointer;" class="pl-1 p-0 m-0"><i class="fa fa-plus  green-text" style="font-size: 9px;"></i></a></span>

                                </div>
                            </td>
                        <td>@if(isset($details['topping'])){{@App\ToppingValue::where('id',$details['topping'])->value('name')}}<br>Size:{{@App\ToppingPrice::where('id',$details['topping_size'])->value('size') }}  @if($details['var']=="h") Half <?php $topping_price= @App\ToppingPrice::where('id',$details['topping_size'])->value('price')*@App\ToppingValue::where('id',$details['topping'])->value('count')/2?> Price:${{@App\ToppingPrice::where('id',$details['topping_size'])->value('price')*@App\ToppingValue::where('id',$details['topping'])->value('count')/2}} @else <?php $topping_price= @App\ToppingPrice::where('id',$details['topping_size'])->value('price')*@App\ToppingValue::where('id',$details['topping'])->value('count') ?> Full Price:${{@App\ToppingPrice::where('id',$details['topping_size'])->value('price')*@App\ToppingValue::where('id',$details['topping'])->value('count')}}@endif  <br> @else No Custome Topping @endif</td>
                            <td>
                               <?php
                               $amount=@App\ItemVariable::where('id',$details['size'])->value('price')*$details['quantity']+$topping_price;
                               $total +=$amount;
                               ?> ${{$amount}}
                            </td>
                            <td>
                                <a href="{{route('rem.cart',$id)}}" class="text-center font-weight-bold"><i class="fa fa-trash fa-2x text-center"></i> </a>

                            </td>

                        </tr>
                        @endif

                        @if(@$details['type']=="offer")
                            <tr>
                            <td><img src="{{asset('uploads/offers/'.@App\Offer::where('id',$details['id'])->value('image'))}}" width="70">
                                {{@App\Offer::where('id',$details['id'])->value('title')}}  {{@App\Offer::where('id',$details['id'])->value('day')}}</td>
                            <td>${{@App\Offer::where('id',$details['id'])->value('o_price')}}</td>
                            <td>1</td>
                                <td>No</td>
                                <td>${{@App\Offer::where('id',$details['id'])->value('o_price')}}</td>
                                <td>
                                    <a href="{{route('rem.cart',$id)}}" class="text-center font-weight-bold"><i class="fa fa-trash fa-2x text-center"></i> </a>
    
                                </td>
                                <?php  $total+=@App\Offer::where('id',$details['id'])->value('o_price') ?>
                            </tr>
                        @endif
                        
                        @if(@$details['type']=="custome")
                            <tr>
                                <td>
                                    <img src="{{asset('uploads/menus/'.$details['image'])}}" alt="" class="" width="70">
                                    <span class="pizza">
                                        <strong>{{$details['name']}} </strong>
                                        </span>
                                </td>
                                <td>
                                ${{@App\ItemVariable::where('id',$details['size'])->value('price')}}
                                </td>
                                
                                <td>
                                <div class="row m-0 p-1">
                            <span class="badge badge-pill web-color" style="border: 1px solid #002E50;  border-radius: 0px;box-shadow: none;">
                                   <a href="{{route('dec.cart',$id)}}" style="cursor: pointer;" class="mr-1 p-0 m-0" ><i class="fa fa-minus   red-text" style="font-size: 9px;"></i></a>
                                   <b  class=" px-2  " >{{$details['quantity']}}</b>
                                   <a href="{{route('incr.cart',$id)}}" style="cursor: pointer;" class="pl-1 p-0 m-0"><i class="fa fa-plus  green-text" style="font-size: 9px;"></i></a></span>

                                </div>
                            </td>
                            
                            <td>Sauce: {{@App\Sauce::where('id',$details['sauce'])->value('name')}}<br>
                            Ranch: {{@App\Sauce::where('id',$details['ranch'])->value('name')}}<br>
                            Dough: {{@App\Sauce::where('id',$details['dough'])->value('name')}}<br>
                            Special Instructions: {{$details['spi']}} Done<br>
                            Toppings:<br>
                            <ul>
                            @foreach($details['toppings'] as $tid=>$row)
                            <li>
                                Name:{{@App\ToppingValue::where('id',$row)->value('name')}} @if($tid+1>@App\Item::where('id',$details['id'])->value('free_toppings')) ($ {{@App\ToppingValue::where('id',$row)->value('count')*@App\ToppingPrice::where('size',@App\ItemVariable::where('id',$details['size'])->value('value'))->value('price')}} )  @endif<br>
                                 Quantity:{{$details['topping_qty'][$tid]}}<br>
                                 Size:{{$details['topping_size'][$tid]}}
                            </li>
                                
                            @endforeach
                            </ul>
                            </td>
                            <td>${{$details['total_amount']*$details['quantity']}}</td>
                             <td>
                                <a href="{{route('rem.cart',$id)}}" class="text-center font-weight-bold"><i class="fa fa-trash fa-2x text-center"></i> </a>

                            </td>
                            </tr>
                            <?php
                                $total=$total+($details['total_amount']*$details['quantity']);
                            ?>
                        @endif

                        @if(@$details['type']=="shqc_custome")
                        <tr>
                            <td>
                                <img src="{{asset('uploads/menus/'.$details['image'])}}" alt="" class="" width="70">
                                <span class="pizza">
                                    <strong>{{$details['name']}} </strong>
                                    </span>
                            </td>
                            <td>
                            ${{@App\ItemVariable::where('id',$details['size'])->value('price')}}
                            </td>
                            
                            <td>
                            <div class="row m-0 p-1">
                        <span class="badge badge-pill web-color" style="border: 1px solid #002E50;  border-radius: 0px;box-shadow: none;">
                               <a href="{{route('dec.cart',$id)}}" style="cursor: pointer;" class="mr-1 p-0 m-0" ><i class="fa fa-minus   red-text" style="font-size: 9px;"></i></a>
                               <b  class=" px-2  " >{{$details['quantity']}}</b>
                               <a href="{{route('incr.cart',$id)}}" style="cursor: pointer;" class="pl-1 p-0 m-0"><i class="fa fa-plus  green-text" style="font-size: 9px;"></i></a></span>

                            </div>
                        </td>
                        
                        <td>Sauce: {{@App\Sauce::where('id',$details['sauce'])->value('name')}}<br>
                        
                        Toppings:<br>
                        <ul>
                        @foreach($details['toppings'] as $tid=>$row)
                        <li>
                            Name:{{@App\ToppingValue::where('id',$row)->value('name')}}  @if($tid+1>@App\Item::where('id',$details['id'])->value('free_toppings')) ($ {{@App\ToppingValue::where('id',$row)->value('count')*@App\ToppingPrice::where('size',@App\ItemVariable::where('id',$details['size'])->value('value'))->value('price')}} ) @endif <br>
                             Quantity:{{$details['topping_qty'][$tid]}}<br>
                             Size:{{$details['topping_size'][$tid]}}
                        </li>
                            
                        @endforeach
                        </ul>
                        </td>
                        <td>${{$details['total_amount']*$details['quantity']}}</td>
                         <td>
                            <a href="{{route('rem.cart',$id)}}" class="text-center font-weight-bold"><i class="fa fa-trash fa-2x text-center"></i> </a>

                        </td>
                        </tr>
                        <?php
                            $total=$total+($details['total_amount']*$details['quantity']);
                        ?>
                    @endif















                        @if(@$details['type']=="custome_wings")
                        <tr>
                            <td>
                                <img src="{{asset('uploads/menus/'.$details['image'])}}" alt="" class="" width="70">
                                <span class="pizza">
                                    <strong>{{$details['name']}} </strong>
                                    </span>
                            </td>
                            <td>
                            ${{@App\ItemVariable::where('id',$details['size'])->value('price')}}
                            </td>
                            
                            <td>
                                <div class="row m-0 p-1">
                                <span class="badge badge-pill web-color" style="border: 1px solid #002E50;  border-radius: 0px;box-shadow: none;">
                                <a href="{{route('dec.cart',$id)}}" style="cursor: pointer;" class="mr-1 p-0 m-0" ><i class="fa fa-minus   red-text" style="font-size: 9px;"></i></a>
                                <b  class=" px-2  " >{{$details['quantity']}}</b>
                                <a href="{{route('incr.cart',$id)}}" style="cursor: pointer;" class="pl-1 p-0 m-0"><i class="fa fa-plus  green-text" style="font-size: 9px;"></i></a></span>

                                </div>
                            </td>

                            <td>
                            Sauces:
                            @foreach($details['sauce'] as $sauce)
                                 {{@App\Sauce::where('id',$sauce)->value('name')}}<br>
                             @endforeach
                            </td>
                            

                            <td>${{$details['total_amount']*$details['quantity']}}</td>
                             <td>
                                <a href="{{route('rem.cart',$id)}}" class="text-center font-weight-bold"><i class="fa fa-trash fa-2x text-center"></i> </a>

                            </td>
                    </tr>
                    <?php
                                $total=$total+($details['total_amount']*$details['quantity']);
                            ?>
                        @endif


                        @if(@$details['type']=="side_custome")
                        <tr>
                            <td>
                                <img src="{{asset('uploads/menus/'.$details['image'])}}" alt="" class="" width="70">
                                <span class="pizza">
                                    <strong>{{$details['name']}} ({{@App\ItemVariable::where('id',$details['size'])->value('value')}})</strong>
                                    </span>
                            </td>
                            <td>
                            ${{@App\ItemVariable::where('id',$details['size'])->value('price')}}
                            </td>
                            
                            <td>
                                <div class="row m-0 p-1">
                                <span class="badge badge-pill web-color" style="border: 1px solid #002E50;  border-radius: 0px;box-shadow: none;">
                                <a href="{{route('dec.cart',$id)}}" style="cursor: pointer;" class="mr-1 p-0 m-0" ><i class="fa fa-minus   red-text" style="font-size: 9px;"></i></a>
                                <b  class=" px-2  " >{{$details['quantity']}}</b>
                                <a href="{{route('incr.cart',$id)}}" style="cursor: pointer;" class="pl-1 p-0 m-0"><i class="fa fa-plus  green-text" style="font-size: 9px;"></i></a></span>

                                </div>
                            </td>

                            <td>
                                Sauce: {{@App\Sauce::where('id',$details['sauce'])->value('name')}}<br>
                               
                            </td>

                            <td>${{$details['total_amount']*$details['quantity']}}</td>
                             <td>
                                <a href="{{route('rem.cart',$id)}}" class="text-center font-weight-bold"><i class="fa fa-trash fa-2x text-center"></i> </a>

                            </td>
                    </tr>
                    <?php
                                $total=$total+($details['total_amount']*$details['quantity']);
                            ?>
                        @endif

                        @if(@$details['type']=="mm_custome")
                            <tr>
                                <td>
                                    <img src="{{asset('uploads/menus/'.$details['image'])}}" alt="" class="" width="70">
                                    <span class="pizza">
                                        <strong>{{$details['name']}} </strong>
                                        </span>
                                </td>
                                <td>
                                ${{@App\ItemVariable::where('id',$details['size'])->value('price')}}
                                </td>
                                
                                <td>
                                <div class="row m-0 p-1">
                            <span class="badge badge-pill web-color" style="border: 1px solid #002E50;  border-radius: 0px;box-shadow: none;">
                                   <a href="{{route('dec.cart',$id)}}" style="cursor: pointer;" class="mr-1 p-0 m-0" ><i class="fa fa-minus   red-text" style="font-size: 9px;"></i></a>
                                   <b  class=" px-2  " >{{$details['quantity']}}</b>
                                   <a href="{{route('incr.cart',$id)}}" style="cursor: pointer;" class="pl-1 p-0 m-0"><i class="fa fa-plus  green-text" style="font-size: 9px;"></i></a></span>

                                </div>
                            </td>
                            
                            <td>Sauce: {{@App\Sauce::where('id',$details['sauce'])->value('name')}}<br>
                            Ranch: {{@App\Sauce::where('id',$details['ranch'])->value('name')}}<br>
                            Dough: {{@App\Sauce::where('id',$details['dough'])->value('name')}}<br>
                            Special Instructions: {{$details['spi']}} Done<br>
                            Toppings:<br>
                            <ul>
                            @foreach($details['toppings'] as $tid=>$row)
                            <li>
                                Name:{{@App\ToppingValue::where('id',$row)->value('name')}}  @if($tid+1>@App\Item::where('id',$details['id'])->value('free_toppings')) ($ {{@App\ToppingValue::where('id',$row)->value('count')*@App\ToppingPrice::where('size',@App\ItemVariable::where('id',$details['size'])->value('value'))->value('price')}} ) @endif <br>
                                 Quantity:{{$details['topping_qty'][$tid]}}<br>
                                 Size:{{$details['topping_size'][$tid]}}
                            </li>
                                
                            @endforeach
                            </ul>
                            Pop:<br>
                            <ul>
                                @foreach($details['pops'] as $tid=>$row)
                            <li>
                                Name:{{@App\Item::where('id',$row)->value('title')}}<br>
                                 Quantity:{{$details['pop_qty'][$tid]}}<br>
                            </li>
                                
                            @endforeach
                            </ul>
                            </td>
                            <td>${{$details['total_amount']*$details['quantity']}}</td>
                             <td>
                                <a href="{{route('rem.cart',$id)}}" class="text-center font-weight-bold"><i class="fa fa-trash fa-2x text-center"></i> </a>

                            </td>
                            </tr>
                            <?php
                                $total=$total+($details['total_amount']*$details['quantity']);
                            ?>
                        @endif

                        @endforeach
                        @endif


                        </tbody>
                    </table>
<p style="display:none">@if(session('coupen')) @if($coupen['type']=="p") {{$discount=$total*$coupen['value']/100}} @else {{$discount=$coupen['value']}} @endif @endif</p>
                </div>
                <hr>
                @include('partials.alerts')
                <form method="POST" action="{{route('coupen.check')}}">
                @csrf
                <div class="row">
                
                
                <div class="col-md-3">
                 <input name="code" type="text" class="form-control py-1 pl-3"  placeholder="Enter Coupon Code" style="border:1px solid #002E50;padding:0px;">

                </div>
               <div class="col-md-9">
                <button type="submit" class="btn btn-shadow   font-weight-bold" style="background-color: #002E50!important;"> Add Coupon</button>
               

                                

                </div>
                </div>
 </form>
                 <a href="{{url('menus')}}" class="btn btn-inside_se  font-weight-bold" style="color: #002E50!important;"> Continue Shopping</a>

                
            </div>
            <div class="col-md-4">
                <!-- Card -->
                <div class="card p-3" style="box-shadow: none;border:solid 1px rgba(0,0,0,.125);">

                    <!-- Card content -->
                    <div class="card-body">
                        <h3 class="pizza">
                            Cart Totals
                        </h3>
                        <table class="table " style="width: 100%!important;">
                            <tbody>
                            <tr>
                                <td>
                                    SUBTOTALS
                                </td>
                                <td>
                                    ${{$total}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    DISCOUNT
                                </td>
                                <td>
                                    ${{$discount}}
                                </td>
                            </tr>
                            <tr>
                                <td class="pizza">
                                    TOTALS
                                </td>
                                <td class="font-weight-bold">
                                   ${{$total-$discount}}
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <form method="POST" action="{{route('payment')}}">
                            @csrf  
             		<input name="contact" type="text" class="form-control" @if(@Auth::user()->email=="") value="{{@Auth::user()->email}}" @endif placeholder="E-mail Or Mobile Number" required>
                                                                                                       
                              
                                
                            </div>
                       
                        <div class=" text-center pt-3">
                        
                            <input type="hidden" value="{{$total}}" name="total">
                            <button href="" class="btn btn-inside_se font-weight-bold"  style="color: #002E50!important;">Proceed to cehkout</button>
                                                       

                        </div>
                    </form>
                    
                    </div>

                </div>
                <!-- Card -->
            </div>
        </div>
        @else
        <div class="col-md-12 text-center">
                                    <h6>No Data.</h6>
                                    <p>Order Some Delicious Food </p>
                                    <img src="{{asset('svg/orders.svg')}}" width="100"/><br>
                                <a href="{{route('menu')}}" class="btn btn-sm  " style="background: #002E50;" >Continue Shopping</a>

                                </div>
                                @endif
    </div>
</section>

@endsection
