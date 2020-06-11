<?php $__env->startSection('content'); ?>
<section class="mt-5 pt-2" style="background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url('../svg/shop.png')!important;background-size:cover!important;height:230px;">
    <div class=" pt-5 container web-color">
        <div class="row justify-content-center mt-3">
            <div class="col-md-8">
                <h2 class="h2 h2-responsive text-center mt-5 font-weight-bold white-text">Customize Our Pizza</h2>
                <p class="white-text text-center font-weight-bold">
                <a href="<?php echo e(url('menus')); ?>" class="white-text">
                    <i class="fa fa-angle-left text-danger font-weight-bold" style="font-size:20px;"></i> &ensp;Back To Menu
                    </a>
                </p>

            </div>
        </div>

    </div>
</section>
    <div class="container">
        <div class="row my-5 py-5 justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6 py-5 " style="background:#F6F7F2;">
                        <img src="<?php echo e(asset('uploads/menus/'.$item->image)); ?>" class="img-fluid py-5" >
                    </div>
                    <div class="col-md-6 pl-5">
                            <h3 class=" pb-3 mb-0 h3 h3-responsive web-color font-weight-bold pt-2"><?php echo e($item->title); ?></h3>
                            <h4 class="h4 h4-responsive text-danger">Description:</h4>
                            <p style="font-size: 15px;"><?php echo $item->description; ?></p>
                            <form class="  web-color" method="POST" action="<?php echo e(route('add.cart',$item->id)); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="col-md-6 ">
                                        <select class="browser-default font-weight-bold custom-select    py-0 my-0"  placeholder="Select Size" style="border-radius:2px;border:solid 1px #002E50;height: 25px!important;font-size: 12px;" name="size" required>
                                         <option>Select Pizza Size</option>
                                            <?php $__currentLoopData = @App\ItemVariable::where('item_id',$item->id)->where('value','!=',Null)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($size->id); ?>"><?php echo e($size->value); ?> &nbsp; $<?php echo e($size->price); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="browser-default font-weight-bold custom-select    py-0 my-0" style="border-radius:2px;border:solid 1px #002E50;height: 25px!important;font-size: 12px;" name="topping" required>
                                            <option selected>Select Topping </option>
                                           <?php $__currentLoopData = @App\ToppingValue::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($size->id); ?>"><?php echo e($size->name); ?> </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="col-md-6 pt-3">
                                        <select class="browser-default font-weight-bold custom-select    py-0 my-0" style="border-radius:2px;border:solid 1px #002E50;height: 25px!important;font-size: 12px;" name="topping_size" required>
                                            <option selected>Select Topping Size </option>
                                           <?php $__currentLoopData = @App\ToppingPrice::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($size->id); ?>"><?php echo e($size->size); ?> $<?php echo e($size->price); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="col-md-7 pt-3">
                                        <label class=""><input type="radio"  name="var" checked value="h" class="option-input radio">Half</label>
                                        <label><input type="radio" name="var" value="f" class="option-input radio">Full</label>
                                    </div>    
                                </div>            
                                    <input type="hidden" name="type" value="item"/>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <div>
                                    <button  type="submit" class="badge badge-success py-3 px-5" style="border:none;">ADD TO CART</button>                                
                                </div>
                                
                            </form>
                            </div>
                            
                    </div>
                </div>
            </div>
           
           
        </div>
    </div>

        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\lnp\site\resources\views/customize.blade.php ENDPATH**/ ?>