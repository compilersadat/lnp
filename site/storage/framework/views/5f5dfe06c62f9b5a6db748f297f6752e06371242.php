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
                                    <h4 class="card-title">All Menu's</h4>

                                </div>
                                <div class="col-md-5 text-right">
                                    <a href="<?php echo e(route('menus.create')); ?>" type="button" class="btn mb-1 btn-primary">Add New <span class="btn-icon-right"><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Category</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = @App\Item::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                
                                                <td class=""><?php echo e($row->title); ?></td>
                                                <td>
                                                    <?php echo e($row->description); ?>

                                                </td>
                                                <td>
                                                    <?php $__currentLoopData = @App\ItemVariable::where('item_id',$row->id)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $var): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <b><?php echo e($var->value); ?>:</b><?php echo e($var->price); ?><br>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </td>
                                                <td>Cat</td>
                                                <td>
                                                    <img src="<?php echo e(asset('uploads/menus/'.$row->image)); ?>" width="50" height="50">
                                                </td>
                                            <td> <?php if($row->active==0): ?> Inactive <?php endif; ?> <?php if($row->active==1): ?> Active <?php endif; ?></td>
                                                <td>
                                                <a href="<?php echo e(route('item.delete',$row->id)); ?>"><i class="fa fa-trash text-danger" style="font-size: 20px;"></i></a>
                                                    <a href="<?php echo e(route('menus.edit',$row->id)); ?>"><i class="fa fa-edit pl-3 text-primary" style="font-size: 20px;"></i></a>
                                                    <?php if($row->active==0): ?><a href="<?php echo e(route('menu.status',$row->id)); ?>"><i class="fa fa-check pl-3 text-success" style="font-size: 20px;"></i></a>
                                                    <?php if($row->active==1): ?><a href="<?php echo e(route('menu.status',$row->id)); ?>"><i class="fa fa-times pl-3 text-danger" style="font-size: 20px;"></i></a><?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if($row->active==1): ?><a href="<?php echo e(route('menu.status',$row->id)); ?>"><i class="fa fa-times pl-3 text-danger" style="font-size: 20px;"></i></a><?php endif; ?>
                                                </td>

                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Category</th>
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
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\lnp\site\resources\views/admin/menus/index.blade.php ENDPATH**/ ?>