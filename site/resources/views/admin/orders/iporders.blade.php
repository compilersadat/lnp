@extends('admin.layouts.layout')
<style>
#order_tab >.active{
border-right:2px solid black;
background: #F3F3F9;
}
}
</style>
@section('content')
    
       

        
            <div class="row" style="border-top:1px solid gray">

                <div class="col-3  m-0 p-0" style="background:white;height:100vh;border-right:1px solid gray">
                    <ul class="metismenu" id="order_tab">
                    	@foreach(@App\Order::distinct()->where('status',"IP")->orderBy('id','DESC')->get(['order_id']) as $row)
	                    <li class="p-3 @if($id==$row->order_id) active @endif" style="border-bottom: 1px solid #c9c9c9b3;">
	                        <a href="{{route('admin.iporders',$row->order_id)}}"aria-expanded="false" class="p-3">
	                            <span class="nav-text">{{$row->order_id}}</span>
	                        </a>
	                    </li>
                    	@endforeach
                    </ul>
                </div>
                <div class="col-9 p-0">
                    
                	<div class="p-4 text-center" style="background:white;">
                	<div class="row p-0 m-0">
                			<div class="col-4">
                                    	<a href="{{route('admin.corders',0)}}" class="text-info"><b>New </b></a>
                                    </div>
                                    
                                    <div class="col-4">
                                    	<a href="{{route('admin.cmorders',0)}}" class="text-success"><b>Completed</b></a>
                                    </div>
                                    
                                    <div class="col-4">
                                    	<a href="{{route('admin.hldorders',0)}}" class="text-danger"><b>Hold </b></a>
                                    </div>
                		</div>
                        <hr>
                        @if($id!=0)
                		<p><b>Pickup At : </b>{{@App\Order::where('order_id',$id)->value('pickup_time')}} <br>
                        <b> For : </b> {{@App\Order::where('order_id',$id)->value('pickup')}}<br>
                        <b>Cusomer Contact : </b> @if(@App\Order::where('order_id',$id)->value('user_id')!="") {{@App\Order::where('order_id',$id)->value('user_id')}} <br> @endif
                         @if(@App\Order::where('order_id',$id)->value('mobile')!="")  {{@App\Order::where('order_id',$id)->value('mobile')}} <br> @endif
                        @endif
                		<b><span class="text-info">In Process Order</span></b>
                		</p>
                    </div>


                    @if($id!=0)  
                    <div class="container mt-1" style="padding-right: 20px !important;">
                     <?php $total=0?>
					  @foreach(@App\Order::where('order_id',$id)->get() as $order)
					 @if($order->is_item!="offer")
						 <div class="mb-1 p-2" style="border:1px solid #4a4a4a66;border-radius:0.5rem">
							<div class="row p-0 m-0">
								<div class="col-10 pl-0">
									<p class="m-0"><b> <span style="color:red;font-size:large">  {{$order->qty}} X </span>@if(@App\ItemVariable::where('id',$order->size)->value('value')=="SM") Small   @endif
												@if(@App\ItemVariable::where('id',$order->size)->value('value')=="M") Medium   @endif
												@if(@App\ItemVariable::where('id',$order->size)->value('value')=="L") Large   @endif
												@if(@App\ItemVariable::where('id',$order->size)->value('value')=="XL") Extra Large   @endif
												@if(@App\ItemVariable::where('id',$order->size)->value('value')=="P") Party   @endif
			
												 {{@App\Item::where('id',$order->item_id)->value('title')}} </b><br>
												
											   {{@App\Item::where('id',$order->item_id)->value('description')}}</p>
												
												
								</div>
								<div class="col-2">
									@if($order->is_item!="offer")
									${{@App\ItemVariable::where('id',$order->size)->value('price')}}
									@else
									${{$order->item_price}}
									@endif
								
								
								</div>
							</div>
							@if($order->is_item=="custome")
							<p class="col-12 pt-0 m-0 pl-0"><b>Customizations:</b></p>
							<div class="row p-0 m-0">
								<div class="col-10 pl-4">
									@if($order->dough!=0)<b>Dough : </b>{{@App\Sauce::where('id',$order->dough)->value('name')}}<br>@endif
								</div>
								<div class="col-2">
										
								</div>

							</div>
							<div class="row p-0 m-0">
								<div class="col-10 pl-4">
									 @if($order->sauce!=0) <b>Sauce: </b>{{@App\Sauce::where('id',$order->sauce)->value('name')}}<br>@endif
								</div>
								
								<div class="col-2">
									@if($order->sauce!=0) $0.5 @endif
								</div>
							</div>
							<div class="row p-0 m-0">
								<div class="col-10 pl-4">
									@if($order->ranch!=0)<b>Ranch: </b>{{@App\Sauce::where('id',$order->ranch)->value('name')}}<br>@endif
								</div>
								
								<div class="col-2">
									@if($order->ranch!=0) $1 @endif
								</div>
							</div>
							@if(@App\OrderTopping::where('order_id',$order->id)->count()>0)
								<div class="col-12 pl-4">
									<b>Toppings: </b>
								</div>
								@foreach(@App\OrderTopping::where('order_id',$order->id)->get() as $top)
								<div class="row p-0 m-0">
									<div class="col-10 pl-4">
										<span style="color:red;font-size:medium">  {{$top->qty}} X </span> {{$top->topping}} <span class="text-success" style="font-size:medium">{{$top->top_size}}</span>
									</div>
									
									<div class="col-2">
										${{@App\ToppingPrice::where('size',@App\ItemVariable::where('id',$order->size)->value('value'))->value('price')*@App\ToppingValue::where('name',$top->topping)->value('count')*$top->qty}}
									</div>
								</div>
								@endforeach
							@endif
							<div class="row p-0 m-0">
								<div class="col-10 pl-4">
									 @if($order->instructions!="") <b>SPI: </b>{{$order->instructions}} Done<br>@endif
								</div>
								
								<div class="col-2">
									
								</div>
							</div>
							@endif
							
							@if($order->is_item=="custome_wings")
								<p class="col-12 pt-0 m-0"><b>Customizations:</b></p>
								<div class="row p-0 m-0">
									<div class="col-10 pl-4">
									@if($order->wings_type!="")<b>Classic/Breaded : </b>{{$order->wings_type}}<br>@endif
									</div>
									
									<div class="col-2">
										
									</div>
								</div>
								<div class="col-md-12 pl-4">
					                                   <b>Sauces: </b>
					                          </div>
				                            @foreach(@App\OrderSauce::where('order_id',$order->order_id)->get() as $sauce)
												<div class="row p-0 m-0">
				                                    
													<div class="col-10 pl-4">
														 <b>Sauce: </b>{{@App\Sauce::where('id',$sauce->sauce_id)->value('name')}}<br>
													</div>
													
													<div class="col-2">
														FREE
													</div>
												</div>
				                            @endforeach

							@endif

							@if($order->is_item=="side_custome")
								<p class="col-12 pt-0 m-0"><b>Customizations:</b></p>
								<div class="row p-0 m-0">
									<div class="col-10 pl-4">
										@if($order->sauce!=0) <b>Sauce: </b>{{@App\Sauce::where('id',$order->sauce)->value('name')}}<br>@endif
									</div>
									
									<div class="col-2">
										@if($order->sauce!=0) $0.5 @endif
									</div>
								</div>
							@endif

							@if($order->is_item=="mm_custome")
								<p class="col-12 pt-0 m-0 pl-0"><b>Customizations:</b></p>
								<div class="row p-0 m-0">
									<div class="col-10 pl-4">
										@if($order->dough!=0)<b>Dough : </b>{{@App\Sauce::where('id',$order->dough)->value('name')}}<br>@endif
									</div>
									
									<div class="col-2">
										
									</div>
								</div>
								<div class="row p-0 m-0">
									<div class="col-10 pl-4">
										 @if($order->sauce!=0) <b>Sauce: </b>{{@App\Sauce::where('id',$order->sauce)->value('name')}}<br>@endif
									</div>
									
									<div class="col-2">
										@if($order->sauce!=0) $0.5 @endif
									</div>
								</div>
								<div class="row p-0 m-0">
									<div class="col-10 pl-4">
										 @if($order->ranch!=0)<b>Ranch: </b>{{@App\Sauce::where('id',$order->ranch)->value('name')}}<br>@endif
									</div>
									
									<div class="col-2">
										@if($order->ranch!=0) $1 @endif
									</div>
								</div>
								@if(@App\OrderTopping::where('order_id',$order->id)->count()>0)
									<div class="col-12 pl-4">
										<b>Toppings: </b>
									</div>
									@foreach(@App\OrderTopping::where('order_id',$order->id)->get() as $top)
                                        <div class="row p-0 m-0">
											<div class="col-10 pl-4">
												<span style="color:red;font-size:medium">  {{$top->qty}} X </span> {{$top->topping}} <span class="text-success" style="font-size:medium">{{$top->top_size}}</span>
											</div>
											
											<div class="col-2">
												${{@App\ToppingPrice::where('size',@App\ItemVariable::where('id',$order->size)->value('value'))->value('price')*@App\ToppingValue::where('name',$top->topping)->value('count')*$top->qty}}
											</div>
                                    	</div>
								   @endforeach
								   
								@endif
								@if(@App\OrderPop::where('order_id',$order->id)->count()>0)
                                    <div class="col-12 pl-4">
                                                <b>POPS: </b>
                                    </div>
                                            
                                    @foreach(@App\OrderPop::where('order_id',$order->id)->get() as $top)
                                        <div class="row p-0 m-0">
											<div class="col-10 pl-4">
												<span style="color:red;font-size:medium">  {{$top->qty}} X </span> {{$top->pop}}
											</div>
											
											<div class="col-2">
												${{$top->price*$top->qty}}
											</div>
                                    	</div>
									@endforeach
								@endif
								<div class="row p-0 m-0">
									<div class="col-10 pl-4">
										 @if($order->instructions!="") <b>SPI: </b>{{$order->instructions}} Done<br>@endif
									</div>
									
									<div class="col-2">
										
									</div>
								</div>

							@endif

							@if($order->is_item=="shqc_custome")
								<p class="col-12 pt-0 m-0 pl-0"><b>Customizations:</b></p>
								<div class="row p-0 m-0">
									<div class="col-10 pl-4">
										 @if($order->sauce!=0) <b>Sauce: </b>{{@App\Sauce::where('id',$order->sauce)->value('name')}}<br>@endif
									</div>
									
									<div class="col-2">
										@if($order->sauce!=0) $0.5 @endif
									</div>
								</div>
								@if(@App\OrderTopping::where('order_id',$order->id)->count()>0)
									<div class="col-12 pl-4">
										<b>Toppings: </b>
									</div>
									@foreach(@App\OrderTopping::where('order_id',$order->id)->get() as $top)
										<div class="row p-0 m-0">
											<div class="col-10 pl-4">
												<span style="color:red;font-size:medium">  {{$top->qty}} X </span> {{$top->topping}} <span class="text-success" style="font-size:medium">{{$top->top_size}}</span>
											</div>
											
											<div class="col-2">
												${{@App\ToppingPrice::where('size',@App\ItemVariable::where('id',$order->size)->value('value'))->value('price')*@App\ToppingValue::where('name',$top->topping)->value('count')*$top->qty}}
											</div>
										</div>
									@endforeach
								@endif

							@endif
							<hr>
							<div class="row p-0 m-0">
								<div class="col-8 pl-4">
									Total
								</div>
											
								<div class="col-4">
									<span style="color:red;">  {{$order->qty}} X </span> {{$order->total/$order->qty}}
								</div>
							</div>



						 </div>
					 @else
						<div class="mb-1 p-2" style="border:1px solid #4a4a4a66;border-radius:0.5rem">
							<div class="row p-0 m-0">
								<div class="col-10">
									<p class="m-0"><b>{{@App\Offer::where('id',$order->item_id)->value('title')}} </b><br>
									{{@App\Offer::where('id',$order->item_id)->value('description')}}
									</p>
												
												
								</div>
								
								<div class="col-2">
								@if($order->is_item!="offer")
								${{@App\ItemVariable::where('id',$order->size)->value('price')}}
								@else
								${{$order->item_price}}
								@endif
								
								
								</div>
								
							</div>
							<hr>
							<div class="row p-0 m-0">
								<div class="col-8 pl-4">
									Total
								</div>
								
								<div class="col-4">
									<span style="color:red;">  {{$order->qty}} X </span> {{$order->total/$order->qty}}
								</div>
							</div>
						</div>
					 @endif
					 @endforeach
						<div class="row p-0 m-0 mb-2 mt-2">
							<div class="col-8 pl-4">
								Total
							</div>
							
							<div class="col-4">
								<span style="color:red;"> ${{ceil(@App\Order::where('order_id',$id)->sum('total'))}} </span>
							</div>
						</div>
						<div class="row p-2 m-0 mb-2 mt-2 " style="background:white">
								<div class="col-12">
									Change status to
								</div>
                            
                                <div class="col-12">
                                    <form action="{{route('order.status')}}" method="POST">
                                    @csrf
                                        <input type="hidden" name="id" value="{{$id}}">
                                        <select name="type" class="form-control" required>
                                            <option value="H">Hold</option>
                                            
                                            <option value="C">Completed</option>
                                        </select>
                                        <div class="text-right pt-2">
                                                <button type="submit" class="btn px-5 btn-primary">Submit</button>
                                            </div>
                                    </form>
                                </div>
                                    
   
                        </div>

                        
                    </div>
               
                    
                    @endif
                </div>
            </div>
        
        <!-- #/ container -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable( {
        "order": [[ 0, "desc" ]]
    } );
} );

</script>
@endsection
