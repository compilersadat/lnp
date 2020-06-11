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
                    <a class="nav-link active px-3 py-4" id="home-tab-md" data-toggle="tab" href="#home-md" role="tab" aria-controls="home-md"
                     aria-selected="true">1.Classic / Breaded
                    </a>
                </li>
                <li class="nav-item col-md-6 text-center p-0">
                    <a class="nav-link px-3 py-4" id="profile-tab-md" data-toggle="tab" href="#profile-md" role="tab" aria-controls="profile-md"
                            aria-selected="false">2.Dipping Sauces</a>
                </li>
                
            </ul>
       <div class="row">
	       	<div class="col-md-8">
	       	   <div class="tab-content card py-5 px-0" id="myTabContentMD" style="box-shadow:none;">
	            	 <div class="tab-pane fade show active" id="home-md" role="tabpanel" aria-labelledby="home-tab-md">
	            	 	<div class="row p-0 m-0 pan-height">
                                            <div class="col-md-4 m-0 p-0 ">
                                                <ul>
                                                    <li class="customize-li mt-3">
                                                        <input type="radio" id="myCheckboxspi" value="classic" name="types" checked/>
                                                        <label for="myCheckboxspi" id="custom_radio" class="text-left pt-3">
                                                            
                                                            <div class="imag-i text-center">
                                                            <img src="{{asset('svg/WC.webp')}}" class=" image" width="130" height="130" />
                                                            </div>
                                                            <div class="content-text  text-center py-2">
                    
                                                                <h6 class="select-heading mb-0 pb-0">Classic</h6>
                                                                
                                                            </div>
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 m-0 p-0 ">
                                                <ul>
                                                    <li class="customize-li mt-3">
                                                        <input type="radio" id="myCheckboxspi1" value="breaded" name="types" />
                                                        <label for="myCheckboxspi1" id="custom_radio" class="text-left pt-3">
                                                            
                                                            <div class="imag-i text-center">
                                                            <img src="{{asset('svg/WB.webp')}}" class=" image" width="130" height="130" />
                                                            </div>
                                                            <div class="content-text  text-center py-2">
                    
                                                                <h6 class="select-heading mb-0 pb-0">Breaded</h6>
                                                                
                                                            </div>
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
	            	 </div>
	            	  <div class="tab-pane fade" id="profile-md" role="tabpanel" aria-labelledby="profile-tab-md">
	                       <div class="row m-0 p-0 pan-height">
                                    @foreach(@App\Sauce::where('type','dipping')->get() as $row)
                                    <div class="col-md-4 m-0 p-0 ">
                                                <ul>
                                                    <li class="customize-li mt-3">
                                                        <input type="checkbox" id="myCheckboxs{{$row->id}}" value="{{$row->id}}" name="sauce" @if(@App\ItemSauce::where('item_id',$item->id)->where('sauce_id',$row->id)->count()>0) checked  @endif/>
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
                        <img src="{{asset('uploads/menus/'.$item->image)}}" class="img img-fluid text-center "> </div>
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
    var size;
    var sauces=[];
    	 $.get("https://latenightpizza.com/item/{{$item->id}}", function(data, status){
    	 	$('#total').val(0);
        	$("#total").val(data.price);
        	$("#price").val(data.price);
        	$('.price_show').text('$'+$('#total').val());
        	size=data.id;
    	 });
    	   @foreach(@App\Sauce::where('type','dipping')->get() as $row)
    	   	@if(@App\ItemSauce::where('item_id',$item->id)->where('sauce_id',$row->id)->count()>0)
    	   		sauces.push("{{$row->id}}");
    	   	@endif
    	   	
    	   @endforeach
    	 
    @foreach(@App\Sauce::where('type','dipping')->get() as $row)
    	 $('#myCheckboxs{{$row->id}}').click(function(){

			if($(this).is(":checked")){
				var val=$(this).val();
		                sauces.push(val);
		                console.log(sauces);
		                 
		            }
		            if($(this).is(":not(:checked)")){
		               var val=$(this).val();
		               // sauces.pop(val);
		                removeElement(sauces,val);
		             console.log(sauces);
		            }
		});
    	@endforeach
        function removeElement(array, elem) {
		    var index = array.indexOf(elem);
		    if (index > -1) {
		        array.splice(index, 1);
		    }
		}
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
        
        
        $(".add_to_cart").click(function(){
        
            	$(".add_to_cart").attr('disabled','true');
            	
            	
            	var sauce=$("#sauce").val();
            	
            	var sauce_p=$("#sauce_p").val();
            	
            	var qty=parseInt($("#qty").text());
            	
            	var types=$('input[name=types]:checked').val();
            	var id={{$item->id}}
		
            	 $.ajaxSetup({

		        headers: {
		
		            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		
		        }
		
		    });
		    
		    
		     $.ajax({

		           type:'POST',
		
		           url:'{{route("wings.cart")}}',
		
		           data:{id:id,qty:qty,sauce:sauces,sauce_p:sauce_p,types:types,size:size},
		
		           success:function(data){
				if(data="S"){
					window.location.assign('{{route("cart")}}')
				}
		
		           }
		
		        });
            });
    })
    </script>


@endsection