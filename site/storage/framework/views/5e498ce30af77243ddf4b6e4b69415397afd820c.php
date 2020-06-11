<?php $__env->startSection('content'); ?>
<section class="menu-banner mt-5 pt-3" style="background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('svg/resturant/back.jpeg'); background-size: cover;">
        <div class=" py-5 container white-text">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h1 class="h1 h1-responsive text-center pt-5 pizza">
                        Your Cart
                    </h1>
                    <p class="white-text text-center font-weight-bold">
                        <a href="<?php echo e(url('menus')); ?>" class="white-text">
                            <i class="fa fa-angle-left text-danger font-weight-bold" style="font-size:20px;"></i> &ensp;Back To Menu
                            </a>
                        </p>
                </div>
            </div>

        </div>
    </section>
<section>
    <div class="container-fluid my-5 py-3">
        <div class="row">
            <div class="col-md-8">
                <div class="table-responsive">
                    <table class="table table-borderless " style="border: none!important;">
                        <thead>
                        <tr>
                            <th class="font-weight-bold">
                                <strong>Product</strong>
                            </th>

                            <th class="font-weight-bold">
                                <strong>Price (Per Item)</strong>
                            </th>
                            <th class="font-weight-bold">
                                <strong>QTY</strong>
                            </th>
                            <th class="font-weight-bold">Custom topping</th>
                            <th class="font-weight-bold">
                                <strong>Amount</strong>
                            </th>
                            <th class="font-weight-bold">Action</th>
                        </tr>

                        </thead>
                        <?php
                        $total=0;
                        $amount=0;
                        $topping_price=0;
                        ?>
                        <tbody class="" style="border: none!important;">
                        <?php if(session('cart')): ?>
                        
                    <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(@$details['type']=="item"): ?>
		                        <tr>
                            <td scope="row">
                                <img src="<?php echo e(asset('uploads/menus/'.$details['photo'])); ?>" alt="" class="" width="70">
                                <span class="pizza">
                    <strong><?php echo e($details['name']); ?> </strong>
                    </span>
                            </td>
                            <td>
                              $<?php echo e(@App\ItemVariable::where('id',$details['size'])->value('price')); ?>

                            </td>
                            <td>
                                <div class="row m-0 p-1">
                            <span class="badge badge-pill web-color" style="border: 1px solid #002E50;  border-radius: 0px;box-shadow: none;">
                                   <a href="<?php echo e(route('dec.cart',$id)); ?>" style="cursor: pointer;" class="mr-1 p-0 m-0" ><i class="fa fa-minus   red-text" style="font-size: 9px;"></i></a>
                                   <b  class=" px-2  " ><?php echo e($details['quantity']); ?></b>
                                   <a href="<?php echo e(route('incr.cart',$id)); ?>" style="cursor: pointer;" class="pl-1 p-0 m-0"><i class="fa fa-plus  green-text" style="font-size: 9px;"></i></a></span>

                                </div>
                            </td>
                        <td><?php if(isset($details['topping'])): ?><?php echo e(@App\ToppingValue::where('id',$details['topping'])->value('name')); ?><br>Size:<?php echo e(@App\ToppingPrice::where('id',$details['topping_size'])->value('size')); ?>  <?php if($details['var']=="h"): ?> Half <?php $topping_price= @App\ToppingPrice::where('id',$details['topping_size'])->value('price')*@App\ToppingValue::where('id',$details['topping'])->value('count')/2?> Price:$<?php echo e(@App\ToppingPrice::where('id',$details['topping_size'])->value('price')*@App\ToppingValue::where('id',$details['topping'])->value('count')/2); ?> <?php else: ?> <?php $topping_price= @App\ToppingPrice::where('id',$details['topping_size'])->value('price')*@App\ToppingValue::where('id',$details['topping'])->value('count') ?> Full Price:$<?php echo e(@App\ToppingPrice::where('id',$details['topping_size'])->value('price')*@App\ToppingValue::where('id',$details['topping'])->value('count')); ?><?php endif; ?>  <br> <?php else: ?> No Custome Topping <?php endif; ?></td>
                            <td>
                               <?php
                               $amount=@App\ItemVariable::where('id',$details['size'])->value('price')*$details['quantity']+$topping_price;
                               $total +=$amount;
                               ?> $<?php echo e($amount); ?>

                            </td>
                            <td>
                                <a href="<?php echo e(route('rem.cart',$id)); ?>" class="text-center font-weight-bold"><i class="fa fa-trash fa-2x text-center"></i> </a>

                            </td>

                        </tr>
                        <?php endif; ?>

                        <?php if(@$details['type']=="offer"): ?>
                            <tr>
                            <td><img src="<?php echo e(asset('uploads/offers/'.@App\Offer::where('id',$details['id'])->value('image'))); ?>" width="70">
                                <?php echo e(@App\Offer::where('id',$details['id'])->value('title')); ?>  <?php echo e(@App\Offer::where('id',$details['id'])->value('day')); ?></td>
                            <td>$<?php echo e(@App\Offer::where('id',$details['id'])->value('o_price')); ?></td>
                            <td>1</td>
                                <td>No</td>
                                <td>$<?php echo e(@App\Offer::where('id',$details['id'])->value('o_price')); ?></td>
                                <td>
                                    <a href="<?php echo e(route('rem.cart',$id)); ?>" class="text-center font-weight-bold"><i class="fa fa-trash fa-2x text-center"></i> </a>
    
                                </td>
                                <?php  $total+=@App\Offer::where('id',$details['id'])->value('o_price') ?>
                            </tr>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>


                        </tbody>
                    </table>

                </div>
                <hr>
                <a href="<?php echo e(url('menus')); ?>" class="btn btn-inside_se  font-weight-bold" style="color: #002E50!important;">Continue Shopping</a>
            </div>
            <div class="col-md-4">
                <!-- Card -->
                <div class="card p-3" style="box-shadow: none;border:solid 1px rgba(0,0,0,.125);">

                    <!-- Card content -->
                    <div class="card-body">
                        <h3 class="pizza">
                            Cart Totals
                        </h3>
                        <table class="table " style="width: 100%!important;">
                            <tbody>
                            <tr>
                                <td>
                                    SUBTOTALS
                                </td>
                                <td>
                                    $<?php echo e($total); ?>

                                </td>
                            </tr>
                            <tr>
                                <td class="pizza">
                                    TOTALS
                                </td>
                                <td class="font-weight-bold">
                                   $<?php echo e($total); ?>

                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <form method="POST" action="<?php echo e(route('payment')); ?>">
                            <?php echo csrf_field(); ?>
                        <div class="form-group">
                                            
                            <div class="md-form">
                                
                                <input name="email" type="text" class="form-control" value="<?php echo e(@Auth::user()->email); ?>" required>
                                <label >Enter Your Email</label>
                            </div>
                        </div>
                        <div class="form-group">
                                            
                            <div class="md-form">
                                
                                <input name="number" type="number" class="form-control" value="<?php echo e(@Auth::user()->mobile_no); ?>" required>
                                <label >Enter Your Mobile</label>
                            </div>
                        </div>
                        <h4>Select Pickup</h4>
                        <div class="radio">
                            <label><input type="radio" name="pickup" checked value="561 Markham Road,  Scarborough, ON M1H 2A3.">561 Markham Road,  Scarborough, ON M1H 2A3.<br><i class="fa fa-phone"></i> 416 431 0300</label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="pickup" value="2655 Lawrence ave East,  Scarborough, ON M1P SA3 .">2655 Lawrence ave East,  Scarborough, ON M1P SA3 .<i class="fa fa-phone"></i>  416 288 1616</label>
                        </div>
                        <div class=" text-center pt-3">
                        
                            <input type="hidden" value="<?php echo e($total); ?>" name="total">
                            <button href="" class="btn btn-inside_se font-weight-bold"  style="color: #002E50!important;">Proceed to cehkout</button>
                            
                        </div>
                    </form>
                    </div>

                </div>
                <!-- Card -->
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\lnp\site\resources\views/cart.blade.php ENDPATH**/ ?>