<?php $__env->startSection('content'); ?>
    <section class="my-5 py-5" >
        <div class="container mt-5 pt-2">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <!-- Material form login -->
                    <div class="card " style="background: #d1d9e629;">



                        <!--Card content-->
                        <div class="card-body px-lg-5 pt-0">
                            <h3 class=" h3 h3-responsive web-color pizza font-weight-bold text-center py-4">
                                <strong>Sign in</strong>
                            </h3>
                            <!-- Form -->
                        <form class="text-center" style="color: #757575;" action="<?php echo e(route('login')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                                <!-- Email -->
                                <div class="md-form ">
                                    <input type="text" id="" name="email" placeholder="Enter  Email or Number" class="form-control text-center   btn-inside_se <?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" style="border:none;" value="<?php echo e(old('email')); ?>">
                                    <?php if($errors->has('email')): ?>
                                    <span class="p-0 m-0 text-danger text-left mb-4"> <strong><?php echo e($errors->first('email')); ?></strong></span>
                                    <?php endif; ?>
                                </div>

                                <!-- Password -->
                                <div class="md-form">
                                    <input type="password" id="" name="password" placeholder="Enter Password" class="form-control text-center   btn-inside_se <?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" style="border:none;">
                                    <?php if($errors->has('password')): ?>
                                    <span class="p-0 m-0 text-danger text-left mb-4"> <strong><?php echo e($errors->first('password')); ?></strong></span>
                                    <?php endif; ?>
                                </div>
                                 <p class="text-left ml-3">
                                <!-- Forgot password -->
                                    <a href="<?php echo e(route('password.request')); ?>" class="web-color text-left font-weight-bold">Forgot password ?</a>
</p>




                                <!-- Sign in button -->
                                <button class="btn btn-shadow my-4  btn-block font-weight-bold" type="submit" style="color: #002E50!important;">Sign in </button>
                                <div class="d-flex justify-content-around">
                                    <div>
                                       <p> <a href="" class="web-color font-weight-bold">Don’t have an account ?
                                            </a>
                                        </p>
                                    </div>
                                    <div class="">
                                        <a href="<?php echo e(url('register')); ?>" class="text-success font-weight-bold">Create one here.</a>
                                    </div>

                                </div>
                                <!-- Register -->


                                <!-- Social login -->
                                <p class="web-color">or sign in with:</p>
                            <a href="<?php echo e(url('/redirect/facebook')); ?>"   class="btn-floating btn-fb login_btn pt-1 btn-sm">
                                    <i class="fa fa-facebook-f  pt-2 mt-1" style=" color:#3b5998!important ;"></i>
                                </a>
                                <a href="<?php echo e(url('/redirect/google')); ?>" class="btn-floating btn-gplus login_btn  btn-sm">
                                    <i class="fa fa-google  pt-2 mt-1 text-center" style=" color:#dd4b39!important ;"></i>
                                </a>



                            </form>
                            <!-- Form -->

                        </div>

                    </div>
                    <!-- Material form login -->
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/concordw/public_html/site/resources/views/auth/login.blade.php ENDPATH**/ ?>