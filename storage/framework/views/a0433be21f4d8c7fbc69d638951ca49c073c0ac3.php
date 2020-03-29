<?php $__env->startSection('content'); ?>
    <!--Carousel Wrapper-->
    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-1z" data-slide-to="1"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <!--First slide-->
            <?php $__currentLoopData = @App\Slide::orderBy('id','DESC')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="carousel-item  py-3 active" style="background:#002E50;">
                <div class="slider-spacing">
                    <div class="row px-5">
                        <div class="col-md-5  col-sm-4">
                            <img class="img-fluid img" src="<?php echo e(asset('uploads/slides/'.$row->imgage)); ?>"
                                 alt="First slide">
                        </div>
                        <div class="col-md-7  col-sm-8 px-4 pt-5 " >
                            <h1 class="h1 h1-responsive  text-uppercase slider-text  font-weight-bold" style="color: #fff;text-shadow: 2px 2px 2px  #bababa;"><?php echo e($row->title); ?></h1>
                            <p class="text-justify  d-none d-md-block" style="color: #eeeeee;  ">
                                <?php echo e($row->description); ?>

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
    <!--/.Carousel Wrapper-->
    <div class="container my-5">
        <section class="vertical-center-4 slider ">
            <?php $__currentLoopData = @App\Category::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div>
            <a class="mb-3" href="<?php echo e(route('shop',$item->id)); ?>">
                    <!-- Card -->
                    <div class=" card_style bg-color">
                        <!-- Card content -->

                        <div class="card-body ">
                            <div class="">
                                <img src="<?php echo e(asset('uploads/cats/'.$item->image)); ?>" class="img-fluid">

                            </div>

                            <!-- Title -->
                            <div class=" pt-2 text-center">
                                <h6 class="font-weight-bold web-color h6 h6-responsive  pizza" ><?php echo e($item->name); ?>    </h6>

                            </div>


                        </div>

                    </div>

                    <!-- Card -->
                </a>

            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           
           

        </section>

    </div>

   
    <section class="menu py-5 my-5">
        <div class="container  ">
            <h1 class="h1 h1-responsive text-center white-text font-weight-bold" style="color: #fff;text-shadow: 2px 2px 2px  #bababa;">DAILY SPECIAL</h1>
            <p class="text-center white-text">Everyday Is Special  </p>
            <div class="row py-3">
                <?php $__currentLoopData = @App\Offer::orderBy('id','DESC'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4 mt-2 ">

                    <!-- Card -->
                    <div class="card  ">
                        <div class="ribbon"><span><?php echo e($item->ribben); ?></span></div>

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
                                <div class="card-body m-0 py-3">

                                    <!-- Title -->
                                    <h5 class="h5 h5-responsive m-0 py-2 font-weight-bold "><?php echo e($item->day); ?> <b class="red-text small"><?php echo e($item->title); ?></b> </h5>
                                    <p style="font-size: 13px;" class="p-0 m-0">
                                        <?php echo e($item->description); ?>

                                    </p>
                                    <p class="p-0 m-0" style="font-size: 13px;">
                                        $<?php echo e($item->o_price); ?> <strike>$<?php echo e($item->a_price); ?></strike>
                                    </p>
                                    <!-- Text -->


                                    <!-- Button -->
                                    <a href="<?php echo e(url('cart')); ?>" class="btn btn-inside btn-sm font-weight-bold web-color mt-2" style="color: #002E50!important;" >Add To Cart</a>

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
    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\lnp\resources\views/welcome.blade.php ENDPATH**/ ?>