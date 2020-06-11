<?php $__env->startSection('content'); ?>
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
        <?php $__currentLoopData = @App\Slide::orderBy('id','DESC')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li data-target="#carousel-example-1z" data-slide-to="<?php echo e($key); ?>" <?php if($key==0): ?> class="active" <?php endif; ?>></li>
            
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <!--First slide-->
            <?php $__currentLoopData = @App\Slide::orderBy('id','DESC')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="carousel-item <?php if($row->type=="slide"): ?> py-5 <?php else: ?> py-3 <?php endif; ?> <?php if($key==0): ?> active <?php endif; ?> " <?php if($row->type=="slide"): ?> style="background:#002E50;" <?php endif; ?>>
            	<?php if($row->type=="slide"): ?>
                <div class="slider-spacing">
                    <div class="row px-5">
                        <div class="col-md-5  col-sm-4">
                            <img class="img-fluid img" src="<?php echo e(asset('uploads/slides/'.$row->image)); ?>"
                                 alt="First slide">
                        </div>
                        <div class="col-md-7  col-sm-8 px-4 pt-5 " >
                            <h1 class="h1 h1-responsive  text-uppercase slider-text   font-weight-bold" style="color: #fff;text-shadow: 2px 2px 2px  #bababa;"><?php echo $row->title; ?></h1>
                            <p class="text-justify  d-none d-md-block" style="color: #eeeeee;  ">
                                <?php echo $row->description; ?>

                            </p>
                            <div class="mt-2">
                            <a href="<?php echo e(url('menus')); ?>" class="btn px-5 btn-color font-weight-bold mb-5" >
                                    Explore More
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <?php else: ?>
                <img class="w-100 d-block" src="<?php echo e(asset('uploads/slides/'.$row->image)); ?>">
                <?php endif; ?>


            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

           
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
            <a href="<?php echo e(url('menus')); ?>">
            <div class="col-md-3 ml-auto   text-right pt-2">
            <a href="<?php echo e(url('menus')); ?>" class=" btn-md px-5 text-danger explore-btn font-weight-bold">Explore More</a>
            </div>
            </a>
        </div>
        <section class="  ">
            <div class="row">
                <?php $__currentLoopData = @App\Category::where('parent_id',0)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <!-- Card -->
                        <div class=" col-lg-3 col-md-4     mb-3">
                            <!-- Card content -->
                            <a class="" href="<?php echo e(route('shop',$item->id)); ?>">
                            <div class="card  card-cat"  style="background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url(<?php echo e(asset('uploads/cats/'.$item->image)); ?>)!important;background-size:cover!important;">

                            <div class="card-body ">
                                <div class="text-center m-auto">
                                    
    
                                </div>
    
                                <!-- Title -->
                                <div class=" pt-5 mt-5 text-center">
                                    <h4 class="font-weight-bold white-text h4 h4-responsive pt-2 card-cont text-uppercase" style="font-family: 'Bitter', serif;letter-spacing:1px;<?php if($item->id==3): ?>font-size:129%;<?php else: ?> <?php if($item->id==11 || $item->id==12 ): ?> font-size:107%; <?php else: ?> font-size:135%; <?php endif; ?> <?php endif; ?>"><?php echo e($item->name); ?>    </h4>
    
                                </div>
    
    
                            </div>
                            </div>
                          </a>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <!-- Card -->    
                </div>
        </section>

    </div>
    
    <section class="py-5  text-center">
    	<a class="btn btn-lg " href="<?php echo e(url('menus')); ?>" style="border:2px solid #002E50;color:#002E50!important"><b>See Menu & Order</b></a>
    </section>

   
    <section class="menu py-5 my-5">
        <div class="container  ">
            <h1 class="h1 h1-responsive text-center white-text font-weight-bold" style="color: #fff;text-shadow: 2px 2px 2px  #bababa;">DAILY SPECIAL</h1>
            <p class="text-center white-text">Everyday Is Special  </p>
            <div class="row py-3">
                <?php $__currentLoopData = @App\Offer::orderBy('id','ASC')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-6 mt-2 ">

                    <!-- Card -->
                    <div class="card  specail-card" <?php if($item->code!=date('D',strtotime(now()))): ?> style="background-color:#edf2f5" <?php endif; ?>>
                        <div class="ribbon"><span style="font-size:8px;"><?php echo e($item->ribben); ?></span></div>

                        <div class="row m-0 p-0">
                            <div class="col-md-5 col-5 m-0 p-0">
                                <div class="view pt-3 mt-3 overlay ">
                                    <img class=""  style="width: 100%;"   src="<?php echo e(asset('uploads/offers/'.$item->image)); ?>"
                                         alt="Card image cap">
                                    <a href="#!">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-7 col-7 m-0 p-0">
                                <div class="card-body m-0 py-3 ">

                                    <!-- Title -->
                                    <h5 class="h5 h5-responsive m-0 py-2 font-weight-bold "><?php echo e($item->day); ?> <br><b class="red-text font-weight-bold small"><?php echo e($item->title); ?></b> </h5>
                                    <p style="font-size: 13px;"  class=" p-0 m-0 disp-cont" id="" aria-expanded="false">
                                        <?php echo substr($item->description,0,25); ?>

                                        
                                    </p>
                                    
                                   <p style="font-size: 13px;display:none;"  class=" p-0 m-0 more-cont"><?php echo substr($item->description,25,strlen($item->description)); ?></p>
                                   <a href="" class="more" style="font-size: 13px;">See More</a>

                                   <p class="p-0 m-0" style="font-size: 13px;">
                                        $<?php echo e($item->o_price); ?> <strike>$<?php echo e($item->a_price); ?></strike>
                                    </p>
                                    <!-- Text -->


                                    <!-- Button -->
                                    <form method="POST" action="<?php echo e(route('add.cart',$item->id)); ?>">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="type" value="offer"/>
                                        <button type="submit" class="btn btn-inside btn-sm font-weight-bold web-color mt-2" <?php if($item->code!=date('D',strtotime(now()))): ?> disabled <?php endif; ?> style="color: #002E50!important;" >Add To Cart</button>

                                    </form>

                                </div>

                            </div>
                        </div>
                        <!-- Card image -->


                        <!-- Card content -->

                    </div>
                    <!-- Card -->
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                

            </div>
        </div>

    </section>
    
    
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/concordw/public_html/site/resources/views/welcome.blade.php ENDPATH**/ ?>