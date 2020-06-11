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
                                        <h4 class="card-title pb-3" >Add New Pizza</h4>

                                    </div>
                                    <div class="col-md-5 text-right">
                                        <a href="<?php echo e(route('menus.index')); ?>" type="button" class="btn mb-3 btn-primary ">View All
                                        </a>
                                    </div>
                                </div>
                                <div class="basic-form">
                                    <?php echo e($errors); ?>

                                <form method="POST" action="<?php echo e(route('menus.update',$item->id)); ?>" enctype="multipart/form-data">
                                    <?php echo method_field('PATCH'); ?>
                                    <?php echo csrf_field(); ?>
                                        <div class="form-group">
                                        <input type="text" class="form-control input-flat" placeholder="Enter Title " name="title" value="<?php echo e($item->title); ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Description:</label>
                                            <textarea class="form-control" rows="4" id="disc" name="disc"><?php echo e($item->description); ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" id="sel1" name="cat">
                                                <option value="selected">Select Category</option>
                                                <?php $__currentLoopData = @App\Category::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($row->id); ?>" <?php if($row->id==$item->cat_id): ?> selected <?php endif; ?>><?php echo e($row->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                        <label>No of free toppings:</label>
                                            <input type="number" class="form-control input-flat" placeholder="No of free toppings" name="free_toppings" value="<?php echo e($item->free_toppings); ?>">
                                        </div>
                                        <div class="form-group">
                                        <label>No of free sauces:</label>
                                            <input type="number" class="form-control input-flat" placeholder="No of free sauces" name="free_sauces" value="<?php echo e($item->free_sauces); ?>">
                                        </div>
                                        <div class="form-group">
                                        <label>No of free pops:</label>
                                            <input type="number" class="form-control input-flat" placeholder="No of free pops" name="free_pops" value="<?php echo e($item->pops); ?>">
                                        </div>
                                        <div class="form-group">
                                        <label>No of free ranches:</label>
                                            <input type="number" class="form-control input-flat" placeholder="No of free ranch" name="free_ranch" value="<?php echo e($item->free_ranch); ?>">
                                        </div>
                                        <h4 class="">
                                            Prices
                                        </h4>
                                        <div class="form-row">
                                            <?php $__currentLoopData = @App\ItemVariable::where('item_id',$item->id)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="form-group col-6">
                                                <label>For <?php echo e($row->value); ?>:</label>
                                            <input type="text" class="form-control input-flat" placeholder="Enter Price" name="<?php echo e($row->value); ?>" value="<?php echo e($row->price); ?>">
                                            </div>
                                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>

                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="image">
                                                <label class="custom-file-label">Select Image</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" id="sel1" name="custome">
                                                <option value="selected">Select Customization</option>
                                                <option value="0" <?php if($item->custome_type==0): ?> selected <?php endif; ?>>No Customization</option>
                                                <option value="1" <?php if($item->custome_type==1): ?> selected <?php endif; ?>>Dough/Base Sauce+Toppings+Special Instructions</option>
                                                <option value="2" <?php if($item->custome_type==2): ?> selected <?php endif; ?>>Dough/Base Sauce+Toppings+Special Instructions+Pops</option>
                                                <option value="3"  <?php if($item->custome_type==3): ?> selected <?php endif; ?>>Sauces</option>
                                                <option value="4"  <?php if($item->custome_type==4): ?> selected <?php endif; ?>>Sauces+toppings</option>
                                                 <option value="5" <?php if($item->custome_type==5): ?> selected <?php endif; ?>>Classic/Breaded+Dipping Sauces</option>
                                            </select>
                                        </div>
                                        <div class="text-center">
                                            <button type="" class="btn px-5 btn-primary">Edit Now</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
       
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/concordw/public_html/site/resources/views/admin/menus/edit.blade.php ENDPATH**/ ?>