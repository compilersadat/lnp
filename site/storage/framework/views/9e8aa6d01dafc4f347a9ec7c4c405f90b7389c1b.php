<?php $__env->startSection('content'); ?>


            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Add New</a></li>
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
                                        <h4 class="card-title pb-3" >Add New coupon</h4>

                                    </div>
                                    <div class="col-md-5 text-right">
                                        <a href="<?php echo e(route('coupens.index')); ?>" type="button" class="btn mb-3 btn-primary ">View All
                                        </a>
                                    </div>
                                </div>
                                <div class="basic-form">
                                <form method="POST" action="<?php echo e(route('coupens.store')); ?>">
                                    <?php echo csrf_field(); ?>
                                        <div class="form-group">
                                            <input type="text" class="form-control input-flat" placeholder="Enter Code " name="code">
                                        </div>
                                        <div class="form-group">
                                            <input type="number" step="0.001" class="form-control input-flat" placeholder="Enter price " name="value">
                                        </div>
                                        <div class="form-group">
                                            <input type="date" class="form-control input-flat" placeholder="Enter expiry date " name="expiry">
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" id="sel1" name="type">
                                                <option value="selected">Select Type</option>
                                                
                                            <option value="p">Percent</option>
                                            <option value="f">Flat</option>
                                               
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

<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/concordw/public_html/site/resources/views/admin/coupens/create.blade.php ENDPATH**/ ?>