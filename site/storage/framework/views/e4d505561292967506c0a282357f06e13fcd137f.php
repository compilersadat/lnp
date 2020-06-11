<?php $__env->startSection('content'); ?>

<style>
@-webkit-keyframes glowing {
  0% { background-color: #B20000; -webkit-box-shadow: 0 0 3px #B20000; }
  50% { background-color: #FF0000; -webkit-box-shadow: 0 0 40px #FF0000; }
  100% { background-color: #B20000; -webkit-box-shadow: 0 0 3px #B20000; }
}

@-moz-keyframes glowing {
  0% { background-color: #B20000; -moz-box-shadow: 0 0 3px #B20000; }
  50% { background-color: #FF0000; -moz-box-shadow: 0 0 40px #FF0000; }
  100% { background-color: #B20000; -moz-box-shadow: 0 0 3px #B20000; }
}

@-o-keyframes glowing {
  0% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
  50% { background-color: #FF0000; box-shadow: 0 0 40px #FF0000; }
  100% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
}

@keyframes  glowing {
  0% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
  50% { background-color: #FF0000; box-shadow: 0 0 40px #FF0000; }
  100% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
}

.cardglow{
  -webkit-animation: glowing 1500ms infinite;
  -moz-animation: glowing 1500ms infinite;
  -o-animation: glowing 1500ms infinite;
  animation: glowing 1500ms infinite;
}
</style>
  

            <div class="container-fluid mt-3">
                <div class="row" >
                 
<div class="col-lg-3 col-sm-6">
                        
<a href="<?php echo e(route('admin.corders',0)); ?>">                   
<div class="card gradient-4 " id="link">
                            <div class="card-body">
                                <h3 class="card-title text-white">New Orders</h3>
                                <div class="d-inline-block" >
                                    <h2 class="text-white" id="ct"><?php echo e(@App\Order::distinct()->where('status',"N")->count('order_id')); ?></h2>
                                    
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                            </div>
                        </div>
                        </a>
                 </div>
                 
                 <div class="col-lg-3 col-sm-6">
                        
<a href="<?php echo e(route('admin.iporders',0)); ?>">                   
<div class="card gradient-5 " id="link">
                            <div class="card-body">
                                <h3 class="card-title text-white">In Process Orders</h3>
                                <div class="d-inline-block" >
                                    <h2 class="text-white" id="ct"><?php echo e(@App\Order::distinct()->where('status',"IP")->count('order_id')); ?></h2>
                                    
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                            </div>
                        </div>
                        </a>
                 </div>
                 <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="card-title text-white"> Categories</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?php echo e(@App\Category::count()); ?></h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-tags"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <h3 class="card-title text-white">Menus</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?php echo e(@App\Item::count()); ?></h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-list"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <h3 class="card-title text-white">Active Menus</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?php echo e(@App\Item::where('active',1)->count()); ?></h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                            </div>
                        </div>
                    </div>
                    
                   
                </div>
            </div>
            <!-- #/ container -->
        </div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>       
<script>
$(document).ready(
 function() {
 setInterval(function() {
 getCount();
  
 }, 5000);  //Delay here = 5 seconds 

function getCount(){
$.get("<?php echo e(url('/count')); ?>", function(data, status){
if(data.count!=0  ){
$('#link').addClass('cardglow');
	var audio = new Audio( 
'https://media.geeksforgeeks.org/wp-content/uploads/20190531135120/beep.mp3');
if(data.diff<10) {
    audio.play();
}
        
            
}else{
$('#link').removeClass('cardglow');
}
    $('#ct').text(data.count);
  });
}

});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/concordw/public_html/site/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>