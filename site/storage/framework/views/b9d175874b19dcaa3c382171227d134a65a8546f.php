
<?php $__env->startSection('content'); ?>
<section class="container  py-5">
    <h3 class="h3 h3-responsive text-center">Results for "<?php echo e($title); ?>"</h3>
    <div class="row ">
        <?php $__currentLoopData = @$items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4 mt-2 ">
            <hr>
            <div class="row m-0 p-0 ">
                <div class="col-md-4 m-0 p-0">
                    <img src="<?php echo e(asset('uploads/menus/'.$row->image)); ?>" class="img-fluid " >
                </div>
                <div class="col-md-8 web-color pt-2">
                    <h6 class=" pb-0 mb-0 h6 h6-responsive pizza font-weight-bold pt-2"><?php echo e($row->title); ?></h6>
                    <p class="p-0 m-0" style="font-size: 12px;">
                        <?php echo $row->description; ?>

                    </p>
                </div>
            </div>


            <div class="d-flex  pt-3 web-color" >
                <div class="">
                    <select class="browser-default font-weight-bold custom-select    py-0 my-0" style="border-radius:2px;border:solid 1px #002E50;height: 25px!important;font-size: 12px;" >
                        <option selected>Select Size </option>
                       <?php $__currentLoopData = @App\ItemVariable::where('item_id',$row->id)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($size->id); ?>"><?php echo e($size->value); ?> &nbsp; $<?php echo e($size->price); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div>
                    <a href="" class="badge py-2 px-4" style="color: #002E50!important;box-shadow: none;border:solid 1px #002E50;font-size: 10px;">Order Now</a>
                </div>
            </div>
            <hr>

        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        

    </div>
  
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/concordw/public_html/site/resources/views/search.blade.php ENDPATH**/ ?>