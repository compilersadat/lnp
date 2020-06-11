<?php $__env->startSection('content'); ?>


            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit coupon</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->


            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-7">
                                        <h4 class="card-title pb-3" >Edit coupon</h4>

                                    </div>
                                    <div class="col-md-5 text-right">
                                        <a href="<?php echo e(route('coupens.index')); ?>" type="button" class="btn mb-3 btn-primary ">View All
                                        </a>
                                    </div>
                                </div>
                                <div class="basic-form">
                                <form method="POST" action="<?php echo e(route('coupens.update',$coupen->id)); ?>">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PATCH'); ?>
                                        <div class="form-group">
                                        <input type="text" class="form-control input-flat" placeholder="Enter Code " name="code" value="<?php echo e($coupen->code); ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="number" step="0.001" class="form-control input-flat" placeholder="Enter price " name="value" value="<?php echo e($coupen->value); ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="date" class="form-control input-flat" placeholder="Enter expiry date " name="expiry" value="<?php echo e(date('Y-m-d',strtotime($coupen->expiry))); ?>">
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" id="sel1" name="type">
                                                <option value="selected">Select Type</option>
                                                
                                            <option value="p" <?php if($coupen->type=="p"): ?> selected <?php endif; ?>>Percent</option>
                                            <option value="f" <?php if($coupen->type=="f"): ?> selected <?php endif; ?>>Flat</option>
                                               
                                            </select>
                                        </div>
                                       
                                        <div class="text-center">
                                            <button type="submit" class="btn px-5 btn-primary">Add Now</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/concordw/public_html/site/resources/views/admin/coupens/edit.blade.php ENDPATH**/ ?>