<?php $__env->startSection('content'); ?>


        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">coupons</a></li>
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
                                    <h4 class="card-title">All coupons</h4>

                                </div>
                                <div class="col-md-5 text-right">
                                    <a href="<?php echo e(route('coupens.create')); ?>" type="button" class="btn mb-1 btn-primary">Add New <span class="btn-icon-right"><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>couponCode</th>
                                        <th>Type</th>
                                        <th>Price</th>
                                        <th>Expiry</th>
                                        
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $coupens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                        <td><?php echo e($item->code); ?></td>
                                        <td><?php if($item->type=="f"): ?>Flat <?php else: ?> Percent <?php endif; ?></td>
                                        <td><?php echo e($item->value); ?></td>
                                        <td><?php echo e($item->expiry); ?></td>
                                         <td>
                                           <a href="<?php echo e(route('coupen.delete',$item->id)); ?>" onclick="return confirm('Are you sure you want to delete this item?');"> <i class="fa fa-trash text-danger" style="font-size: 20px;"></i></a>
                                        <a href="<?php echo e(route('coupens.edit',$item->id)); ?>"><i class="fa fa-edit pl-3 text-primary" style="font-size: 20px;"></i></a>
                                        </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Coupen Code</th>
                                        <th>Type</th>
                                        <th>Price</th>
                                        <th>Expiry</th>
                                        
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
   

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/concordw/public_html/site/resources/views/admin/coupens/index.blade.php ENDPATH**/ ?>