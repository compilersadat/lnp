<?php $__env->startSection('content'); ?>
    <div class="content-body">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">All Menu's</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->

        <div class="container-fluid">
            <div class="row">

                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-7">
                                    <h4 class="card-title">Old Orders</h4>

                                </div>
                               
                            </div>

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Pickup</th>
                                        <th>Item</th>
                                        <th>Quantity</th>
                                        <th> Unit Price</th>
                                        <th>Topping</th>
                                        <th> Price</th>
                                        <th>Total</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = @App\Order::where('status','C')->orderBy('id','DESC')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                            <td><?php echo e(date('d-m-Y',strtotime($row->created_at))); ?></td>
                                            <td><?php echo e($row->user_id); ?></td>
                                            <td><?php echo e($row->mobile); ?></td>
                                            <td><?php echo e($row->pickup); ?></td>
                                            <td>
                                                <?php if($row->is_item=="item"): ?> <?php echo e(@App\Item::where('id',$row->item_id)->value('title')); ?> <br> Size:<?php echo e(@App\ItemVariable::where('id',$row->size)->value('value')); ?> <br>Price:<?php echo e(@App\ItemVariable::where('id',$row->size)->value('price')); ?> <?php endif; ?>
                                                <?php if($row->is_item=="offer"): ?> <?php echo e(@App\Offer::where('id',$row->item_id)->value('title')); ?> <?php echo e(@App\Offer::where('id',$row->item_id)->value('day')); ?> <br> <?php echo e(@App\Offer::where('id',$row->item_id)->value('description')); ?><?php endif; ?>
    
                                            </td>
                                        <td><?php echo e($row->qty); ?></td>
                                        <td><?php echo e($row->item_price); ?></td>
                                        <td><?php if($row->extra_topping!=""): ?> <?php echo e(@App\ToppingValue::where('id',$row->extra_topping)->value('name')); ?> <br>count as <?php echo e(@App\ToppingValue::where('id',$row->extra_topping)->value('count')); ?> <br> Size :<?php echo e(@App\ToppingPrice::where('id',$row->top_size)->value('size')); ?> <br> Quantity:<?php echo e($row->top_qty); ?> <?php endif; ?></td>
                                       <td><?php echo e(@App\ToppingPrice::where('id',$row->top_size)->value('price')); ?></td>    
                                        <td>$<?php echo e($row->total); ?></td>
                                        <td></td>
                                    </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Item</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Topping</th>
                                        <th>Price</th>
                                        <th>Total</th>
                                        <th>Action</th>

                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\lnp\site\resources\views/admin/orders/history.blade.php ENDPATH**/ ?>