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
                                        <h4 class="card-title pb-3" >Add New Slider</h4>

                                    </div>
                                    <div class="col-md-5 text-right">
                                        <a href="<?php echo e(route('slides.index')); ?>" type="button" class="btn mb-3 btn-primary ">View All
                                        </a>
                                    </div>
                                </div>
                                <div class="basic-form">
                                <form method="POST" action="<?php echo e(route('slides.update',$slide->id)); ?>" enctype="multipart/form-data">
                                <?php echo method_field('PATCH'); ?>
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                            <select class="form-control" id="sel1" name="type">
                                                <option value="0">Select Type</option>
                                                <option value="banner" <?php if($slide->type=="banner"): ?> selected <?php endif; ?>>Banner</option>
                                                <option value="slide" <?php if($slide->type=="slide"): ?> selected <?php endif; ?>>general</option>
                                                
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control input-flat" placeholder="Enter Title " name="title" value="<?php echo e($slide->title); ?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Description:</label>
                                            <textarea class="form-control " rows="4" id="" name="description"><?php echo e($slide->description); ?></textarea>
                                        </div>
                                         <img src="<?php echo e(asset('uploads/slides/'.$slide->image)); ?>" width="100" height="100"><br>
                                        <div class="input-group mb-3">
                                       
                                            <div class="input-group-prepend"><span class="input-group-text">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" name="image" class="custom-file-input">
                                                <label class="custom-file-label">Select Image</label>
                                            </div>
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

<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/concordw/public_html/site/resources/views/admin/slides/edit.blade.php ENDPATH**/ ?>