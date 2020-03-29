
<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin Panel</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="<?php echo e(url('admin/css/style.css')); ?>" rel="stylesheet">

</head>

<body class="h-100">

<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div class="loader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
        </svg>
    </div>
</div>
<!--*******************
    Preloader end
********************-->





<div class="login-form-bg  pt-3 mt-5">
    <div class="container mt-5 pt-5">
        <div class="row justify-content-center h-100">
            <div class="col-xl-5">
                <div class="form-input-content">
                    <div class="card login-form mb-0">
                        <div class="card-body pt-5">
                            <a class="text-center" href="index.html"> <h3>LNP Admin Login </h3></a>

                        <form class="mt-5 mb-5 login-input" action="<?php echo e(route('admin.login.post')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control " placeholder="Email" value="<?php echo e(old('email')); ?>">
                                    <?php if($errors->has('email')): ?>
                                    <span class="p-0 m-0 text-danger text-left mb-4"> <strong><?php echo e($errors->first('email')); ?></strong></span>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Password" >
                                    <?php if($errors->has('password')): ?>
                                    <span class="p-0 m-0 text-danger text-left mb-4"> <strong><?php echo e($errors->first('password')); ?></strong></span>
                                    <?php endif; ?>
                                </div>
                                <button class="btn login-form__btn submit w-100" type="submit">Sign In</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<!--**********************************
    Scripts
***********************************-->
<script src="<?php echo e(asset('admin/plugins/common/common.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/js/custom.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/js/settings.js')); ?>"></script>
<script src="<?php echo e(asset('admin/js/gleek.js')); ?>"></script>
<script src="<?php echo e(asset('admin/js/styleSwitcher.js')); ?>"></script>
</body>
</html>





<?php /**PATH D:\xampp\htdocs\lnp\resources\views/admin/login.blade.php ENDPATH**/ ?>