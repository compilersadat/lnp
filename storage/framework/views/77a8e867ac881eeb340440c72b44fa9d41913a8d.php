<?php $__env->startSection('content'); ?>
<section class="menu-banner" style="background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('svg/resturant/back.jpeg') ;background-size:cover ;height: 330px;">
    <div class=" pt-5 container web-color">
        <div class="row justify-content-center mt-3">
            <div class="col-md-8">
                <h1 class="h1 h1-responsive text-center white-text pt-5 pizza">
                    Our Menu
                </h1>
                <p class="text-center white-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi atque cupiditate deleniti est expedita laborum maxime omnis rerum sapiente tempora. Debitis eaque fugit odio qui sint? Corporis eveniet illo illum.
                </p>
            </div>
        </div>

    </div>
</section>
<?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<section class="mt-5 ">
    <div class="container mt- pt-5">
        <h3 class="pizza pb-0 mb-0">
            <u><?php echo e($item->name); ?></u>
        </h3>
        <div class="row ">
            <?php $__currentLoopData = @App\Item::where('cat_id',$item->id)->where('active',1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4 mt-2 ">
                <hr>
                <div class="row m-0 p-0 ">
                    <div class="col-md-4 m-0 p-0">

                        <img src="<?php echo e(asset('uploads/menus/'.$row->image)); ?>" class="img-fluid " >
                    </div>
                    <div class="col-md-8 web-color pt-2">
                        <h6 class=" pb-0 mb-0 h6 h6-responsive pizza font-weight-bold pt-2"><?php echo e($row->title); ?></h6>
                        <p class="p-0 m-0" style="font-size: 12px;">
                            <?php echo e($row->description); ?>

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
    </div>
</section> 
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\lnp\resources\views/menu.blade.php ENDPATH**/ ?>