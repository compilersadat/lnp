<?php $__env->startSection('content'); ?>
<section class="mt-5 pt-2" style="background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url('../svg/shop.png')!important;background-size:cover!important;height:230px;">
    <div class=" pt-5 container web-color">
        <div class="row justify-content-center mt-3">
            <div class="col-md-8">
                <h2 class="h2 h2-responsive text-center mt-5 font-weight-bold white-text">Results for "<?php echo e($title); ?>"</h2>
                <p class="white-text text-center font-weight-bold">
                <a href="<?php echo e(url('menus')); ?>" class="white-text">
                    <i class="fa fa-angle-left text-danger font-weight-bold" style="font-size:20px;"></i> &ensp;Back To Menu
                    </a>
                </p>

            </div>
        </div>

    </div>
</section>
<section class="container    py-5">
    <div class="row m-0 p-0">
        <?php $__currentLoopData = @$items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-6  mt-2 ">
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
                <form class="   pt-4 web-color" method="POST" action="<?php echo e(route('add.cart',$row->id)); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                    <div class="col-md-5">
                        <select class="browser-default font-weight-bold custom-select     py-0 my-0" style="border-radius:2px;border:solid 1px #002E50;height: 25px!important;font-size: 12px;" name="size" required>
                            <option selected>Select Size </option>
                           <?php $__currentLoopData = @App\ItemVariable::where('item_id',$row->id)->whereNotNull('price')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($size->id); ?>"><?php echo e($size->value); ?> &nbsp; $<?php echo e($size->price); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <input type="hidden" name="type" value="item"/>
                    <div class="col-md-5">
                        <button  type="submit" class="badge badge-success py-2 px-4" style="border:none;">QUICK ADD</button>
                    
                    </div>
                    </div>
                </form>
                <?php if($row->is_custom==1): ?>
                <div class="col-md-4 m-0 p-0 pt-3">
                    <a href="<?php echo e(route('customize',$row->id)); ?>" class="badge badge-danger py-2 px-4 text-uppercase">Customize</a>
                </div>
                <?php endif; ?>
                                </div>
                </div>            
            <hr>

        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        

    </div>
  
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\lnp\site\resources\views/search.blade.php ENDPATH**/ ?>