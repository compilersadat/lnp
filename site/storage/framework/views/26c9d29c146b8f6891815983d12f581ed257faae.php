
<?php $__env->startSection('content'); ?>
<section class="container mt-5 py-5">
    <!-- Card -->
    <div class="row justify-content-center my-5">
        <div class="col-md-6 mt-5">
            <div class="card" style="border:1px solid #00C851;">              
                <!-- Card content -->
                <div class="card-body px-5 py-4">
                                <h3 class="h3 h3-responsive text-success font-weight-bold">SUCCESS</h3>

                                 <!-- Text -->
                  <p class="text-font text-success">Your order has been processed

                    &ensp;<i class="fa fa-check-circle fa-2x "></i>
                  </p>
                  <p >
                  <a href="<?php echo e(url('/')); ?>" class="text-danger"> Done</a>
                  </p>
                            </div>
            
                 
                </div>
              
              </div>
              <!-- Card -->
    </div>

</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/concordw/public_html/site/resources/views/alert.blade.php ENDPATH**/ ?>