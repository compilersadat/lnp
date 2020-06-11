@extends('layouts.layout')
@section('content')
<style>
.btn-floating{
width:47px!important;
height:47px!important;
}
ul {
padding-inline-start: 0px;
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



    </style>
     <meta name="csrf-token" content="{{ csrf_token() }}" />
    //hidden inputs
    <input type="hidden" id="total">
    <input type="hidden" id="price">
    <input type="hidden" id="sauce" value="0">
     <input type="hidden" id="sauce_p" value="0">
     
     
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
		               <a href="{{url('menus')}}"> <b class="font-weight-bold" style="font-size:17px;color:#FF3547;">Back To Menu</b></a>
		        </div>
		         <div class="col-md-4 text-center">
		                <img src="{{asset('uploads/menus/'.$item->image)}}" class="img img-fluid " style="width:70%">
		            </div>
		            
		            <div class="col-md-4 pt-5 mt-3 ">
             <div class="row m-0 p-0 justify-content-start pl-5"  >
                 @foreach(@App\ItemVariable::where('item_id',$item->id)->whereNotNull('price')->get() as $key=>$size)
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
                 </div>



                    <div class="add py-4">
                        <div class="row ">
                            <div class="col-md-7">
                                <a type="button" class="btn-floating text-center mt-1 pt-1 minus" style="background:#FF3547;box-shadow:none;width:30px!important;
    height: 30px!important;"><i class="fa fa-minus  white-text" style="font-size:12px;" aria-hidden="true"></i></a>
                                <a type="button" class=" black-text" style="font-size:25px;">
                              <b class="font-weight-bold " style="color:#002E50;font-size:25px;" id="qty"> 1</b>
                                    </a>
                                    <a type="button" class="btn-floating text-center pt-1 mt-1 plus" style="background:#FF3547;box-shadow:none;width:30px!important;
    height: 30px!important;"><i class="fa fa-plus  white-text" aria-hidden="true"></i></a>

                            </div>
                            <div class="col-md-5 ">
                                <h3 class="h3-responsive h3 font-weight-bold price_show" style="color:#002E50;">
                                $0
                                </h3>
                            </div>
                        </div>

                        <div class="add-to-cart  pt-4  mt-1 ">
                            <button class="btn btn-block  white-text font-weight-bold add_to_cart" style="box-shadow:none;background:#002E50;">
                                Add To cart
                            </button>
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
               
                <li class="nav-item col-md-6 text-center p-0">
                    <a class="nav-link px-3 py-4" id="profile-tab-md" data-toggle="tab" href="#profile-md" role="tab" aria-controls="profile-md"
                            aria-selected="false">2.Dipping Sauces</a>
                </li>
                
            </ul>
       <div class="row">
	       	<div class="col-md-8">
	       	   <div class="tab-content card py-5 px-0" id="myTabContentMD" style="box-shadow:none;">
	            	 
	            	  <div class="tab-pane fade show  active" id="profile-md" role="tabpanel" aria-labelledby="profile-tab-md">
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
	            </div>
	       	</div>
	       	
	       	<div class="col-md-4 m-auto">
                    <div class="">
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
                                <h3 class="h3-responsive h3 font-weight-bold price_show" style="color:#002E50;">$0
                                </h3>
                            </div>
                        </div>

                        <div class="add-to-cart  pt-4  mt-1 ">
                            <button class="btn btn-block  white-text font-weight-bold add_to_cart" style="box-shadow:none;background:#002E50;">
                                Add To cart
                            </button>
                        </div>
                    </div>
                </div
       </div>
            
 	</div>
 
 </section>
            
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script>
    $(document).ready(function() {
 
    	var size = $("input[name='size']:checked").val();
        var sizt='';
        
   
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
       
        
        	var qty=parseInt($("#qty").text());
        	$('#title').text(sizt);
        	$('#total').val(0);
        	$("#total").val((data.price+sauce)*qty);
        	$("#price").val(data.price+sauce);
        	$('.price_show').text('$'+(parseFloat($("#price").val()*qty)));
        });
        }); 
    	 
    	 
    	 $('input[name=sauce]').change(function(){
        	var sauce=$('input[name=sauce]:checked').val();
        	if($("#sauce_p").val()==0){
        		var total=parseFloat($('#price').val());
        		$('#price').val(total+0.5);
        		var qty=parseInt($("#qty").text());
        		$("#total").val(parseFloat($("#price").val()*qty));
        		$('.price_show').text('$'+$('#total').val());
        		
        	}
        	$("#sauce").val(sauce);
        	$("#sauce_p").val(0.5);
                	
        	
        });
        
        $(".minus").click(function(){
    
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
        
        
        $(".add_to_cart").click(function(){
        
            	$(".add_to_cart").attr('disabled','true');
            	
            	
            	var sauce=$("#sauce").val();
            	
            	var sauce_p=$("#sauce_p").val();
            	
            	var qty=parseInt($("#qty").text());
            	
            	
            	var id={{$item->id}}
		
            	 $.ajaxSetup({

		        headers: {
		
		            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		
		        }
		
		    });
		    
		    
		    $.ajax({

		           type:'POST',
		
		           url:'{{route("sides.cart")}}',
		
		           data:{id:id,qty:qty,sauce:sauce,sauce_p:sauce_p,size:size},
		
		           success:function(data){
				if(data="S"){
					//console.log(data)
					window.location.assign('{{route("cart")}}')
				}
		
		           }
		
		        });
            });
    })
    </script>


@endsection