<?php $__env->startSection('content'); ?>


        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Week Days Offers</a></li>
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
                                    <h4 class="card-title">All Offers</h4>

                                </div>
                                <div class="col-md-5 text-right">
                                    <a href="<?php echo e(route('offers.create')); ?>" type="button" class="btn mb-1 btn-primary">Add New <span class="btn-icon-right"><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>Offer Name</th>
                                        <th>Ribbon Text</th>
                                        <th>Day</th>
                                        <th>Description</th>
                                        <th>Actual Price</th>
                                        <th>Offer Price</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = App\Offer::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                        <td><?php echo e($item->title); ?></td>
                                        <td><?php echo e($item->ribben); ?></td>
                                        <td><?php echo e($item->day); ?></td>
                                        <td><?php echo e($item->description); ?></td>
                                        <td><?php echo e($item->a_price); ?></td>
                                        <td><?php echo e($item->o_price); ?></td>
                                        <td><img src="<?php echo e(asset('uploads/offers/'.$item->image)); ?>" width="50" height="50"></td>
                                        <td>
                                           <a href="<?php echo e(route('offer.delete',$item->id)); ?>" onclick="return confirm('Are you sure you want to delete this item?');"> <i class="fa fa-trash text-danger" style="font-size: 20px;"></i></a>
                                        <a href="<?php echo e(route('offers.edit',$item->id)); ?>"><i class="fa fa-edit pl-3 text-primary" style="font-size: 20px;"></i></a>
                                        </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Offer Name</th>
                                        <th>Ribbon Text</th>
                                        <th>Day</th>
                                        <th>Description</th>
                                        <th>Actual Price</th>
                                        <th>Offer Price</th>
                                        <th>Image</th>
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

<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/concordw/public_html/site/resources/views/admin/offers/index.blade.php ENDPATH**/ ?>