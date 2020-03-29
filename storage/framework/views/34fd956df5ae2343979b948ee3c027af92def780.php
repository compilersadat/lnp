<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LateNightPizza</title>
    <link rel="icon" href="svg/logo.png" type="image/gif" sizes="60x60">
    <link rel="stylesheet " href="<?php echo e(url('css/style.css')); ?>">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet " href="<?php echo e(url('css/bootstrap.css')); ?>">
    <link rel="stylesheet " href="<?php echo e(url('css/mdb.css')); ?>">
    <link rel="stylesheet " href="<?php echo e(url('css/slick.css')); ?>">
    <link rel="stylesheet " href="<?php echo e(url('css/slick-theme.css')); ?>">

<style>

    .slider {
        width: 100%;
        padding: 100px auto;
    }

    .slick-slide {
        margin: 0px 20px;
    }



    .slick-prev:before,
    .slick-next:before {
        color: black;
    }


    .slick-slide {
        transition: all ease-in-out .3s;
        opacity: ;
    }


</style>
</head>
<body>
























<section>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background: #fff;">
        <!-- Navbar brand -->
        <div class="container-fluid">
            <a class="navbar-brand  pr-3"  href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('svg/logo.png')); ?>" width="80" height="80"></a>
            <!--            <a href="" class="black-text">-->
            <!--                Canada-->
            <!--                <br>-->
            <!--                +1987 6597 135-->
            <!--            </a>-->

            <!-- Collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation" style="background: #002E50;">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="basicExampleNav">

                <!-- Links -->
                <ul class="navbar-nav mr-auto ">
                    <li class="nav-item ">
                        <a class="nav-link nav-link-ltr px-3" href="<?php echo e(url('/')); ?>">Home

                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-ltr px-3" href="<?php echo e(route('menu')); ?>">Menu </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-ltr  px-3" href="">Our Story</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-ltr  px-3" href="<?php echo e(route('contact')); ?>">Contact Us</a>
                    </li>
                    <li class="nav-item d-none d-md-block">
                        
                        <a class="nav-link px-3">
                        <form method="POST" action="<?php echo e(route('search')); ?>">
                        <?php echo csrf_field(); ?>
                            <input type="text " name="title" class="px-2" placeholder="Search Pizza" style="height:2rem;margin:0px">
                            <button type="submit" class="fa fa-search white-text btn" style="background: #FF1E56;padding-left: 0.7rem;padding-right: 0.7rem;padding-bottom: 0.4rem;padding-top: 0.4rem;margin: 0px;"></button>
                        </form>

                        </a>
                                        </li>

                </ul>
                <!-- Links -->
                <ul class="navbar-nav ml-auto pr-5 ">
                    <?php if(!Auth::guard('web')->user()): ?>
                    <li class="nav-item px-3">
                        <a class="nav-link  btn-shadow btn-color btn btn-sm px-5 font-weight-bold" href="<?php echo e(url('login')); ?>" >Sign In</a>
                    </li>
                    <?php endif; ?>
                    <?php if(Auth::guard('web')->user()): ?>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="<?php echo e(route('home')); ?>">Welcome <?php echo e(Auth::user()->name); ?></a>
                    </li>
                    <?php endif; ?>
                    <li class="nav-link social_card px-3 d-none d-md-block">
                        <i class="fa fa-facebook  black-text "></i>
                    </li>
                    <li class="nav-link social_card px-3 d-none d-md-block">
                        <i class="fa fa-instagram  black-text"></i>
                    </li>
                    <li class="nav-link social_card px-3 d-none d-md-block">
                        <i class="fa fa-twitter  black-text"></i>
                    </li>
                </ul>


            </div>
        </div>
        <!-- Collapsible content -->
    </nav>
    <!--/.Navbar-->
</section>
<section>
    <?php echo $__env->yieldContent('content'); ?>
</section>
<!-- Footer -->
<section class="footer">
    <div class="container pt-5 pb-2">
        <div class="row ">
            <div class="col-md-8 ml-auto white-text text-center">
                <h1 class="h1 h1-responsive pt-4  white-text font-weight-bold ">Feeling in love? Purchase Orgafe !</h1>
                <p class="m-0 p-0">
                    561 Markham Road,  Scarborough, ON MH12A3.
                </p>
                <P class="">
                    Sun-Thu:11AM - 3AM <br>Fri-Sat:11AM - 4AM
                </P>
            </div>
        </div>
        <div class="text-center  pt-5 mt-5">
            <ul class="list-inline white-text font-weight-bold">
                <li class="list-inline-item px-2">Home</li>
                <li class="list-inline-item px-2">Menu</li>
                <li class="list-inline-item px-2">Our Story</li>
                <li class="list-inline-item px-2">Terms of service</li>
                <li class="list-inline-item px-2">Privacy Policy</li>
                <li class="list-inline-item px-2">Contact Us</li>
            </ul>
            <p class="white-text">©2003-2020 Late Night Pizza, Inc. All right reserved.</p>
        </div>
    </div>
</section>

</body>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="<?php echo e(url('js/slick.js')); ?>"></script>
<script type="text/javascript">
    $(document).on('ready', function() {
        $(".vertical-center-4").slick({
            dots: false,
            arrows:true,
            vertical: false,
            autoplay:true,
            centerMode: true,
            slidesToShow: 4,
            slidesToScroll: 2,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        dots: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        dots: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }
            ]
        });
        $(".vertical-center-1").slick({
            dots: false,
            arrows:false,
            vertical: false,
            autoplay:true,
            centerMode: true,
            slidesToShow: 2,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        dots: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        dots: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }
            ]
        });
    });
</script>

<script src="<?php echo e(asset('js/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/bootstrap.js')); ?>"></script>
<script src="<?php echo e(asset('js/mdb.js')); ?>"></script>
</html>
<?php /**PATH D:\xampp\htdocs\lnp\resources\views/layouts/layout.blade.php ENDPATH**/ ?>