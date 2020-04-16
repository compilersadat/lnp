<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LateNightPizza</title>
    <link rel="icon" href="svg/logo.png" type="image/gif" sizes="60x60">
    <link rel="stylesheet " href="<?php echo e(url('css/style.css')); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
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
                <ul class="navbar-nav ml-auto ">
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
<footer class="page-footer font-small  pt-4" style="background:#002E50;">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">
  
      <!-- Grid row -->
      <div class="row">
  
        <!-- Grid column -->
        <div class="col-md-4 mx-auto">
  
          <!-- Content -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Late Night Pizza</h5>
          <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
            consectetur
            adipisicing elit.</p>
  
        </div>
        <!-- Grid column -->
  
        <hr class="clearfix w-100 d-md-none">
  
        <!-- Grid column -->
        <div class="col-md-2 mx-auto">
  
          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>
  
          <ul class="list-unstyled">
            <li>
              <a href="<?php echo e(route('menu')); ?>">Menu</a>
            </li>
            <li>
              <a href="#">Our Story</a>
            </li>
            <li>
              <a href="#!">Terms of service</a>
            </li>
             <li>
              <a href="#!">Privacy Policy</a>
            </li>
            <li>
                <a href="<?php echo e(route('contact')); ?>">Contact Us</a>
              </li>
          </ul>
  
        </div>
        <!-- Grid column -->
  
        <hr class="clearfix w-100 d-md-none">
  
        <!-- Grid column -->
        <div class="col-md-2 mx-auto">
  
          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Address 1</h5>
  
          <p class="m-0 p-0">
                                  <i class="fa fa-map-marker"></i>  561 Markham Road,  Scarborough, ON M1H 2A3.
                                      <br>
                                      <i class="fa fa-phone"></i> 416 431 0300
                                  </p>
        </div>
        <!-- Grid column -->
  
        <hr class="clearfix w-100 d-md-none">
  
        <!-- Grid column -->
        <div class="col-md-2 mx-auto">
  
          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Address 2</h5>
  
           <p class=" p-0 m-0">
                                      <i class="fa fa-map-marker"></i> 2655 Lawrence ave East,  Scarborough, ON M1P SA3
                                      .<br>
                                     <i class="fa fa-phone"></i>  416 288 1616    
                                     </p>
  
        </div>
        <!-- Grid column -->
  
      </div>
      <!-- Grid row -->
  
    </div>
    <!-- Footer Links -->
  
    <hr>
  
    <!-- Call to action -->
    <ul class="list-unstyled list-inline text-center py-2">
      <li class="list-inline-item">
        <h5 class="mb-1">Register for free</h5>
      </li>
      <li class="list-inline-item">
      <a href="<?php echo e(route('register')); ?>" class="btn btn-danger btn-rounded">Sign up!</a>
      </li>
    </ul>
    <!-- Call to action -->
  
    <hr>
  
    <!-- Social buttons -->
    <ul class="list-unstyled list-inline text-center">
      <li class="list-inline-item">
        <a class="btn-floating btn-fb mx-1 " style="background:#3b5999!important;padding-top:10px;">
          <i class="fa fa-facebook-f" > </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-tw mx-1" style="padding-top:10px;">
          <i class="fa fa-twitter"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-gplus mx-1" style="background: #3f729b!important;padding-top:10px;">
          <i class="fa fa-instagram"> </i>
        </a>
      </li>
    </ul>
    <!-- Social buttons -->
  
    <!-- Copyright -->
    <div class="footer-copyright text-center pb-3 ">©2003-2020 Late Night Pizza, Inc. All right reserved.
    </div>
    <!-- Copyright -->
  
  </footer>
  <!-- Footer -->

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
<?php /**PATH /home/concordw/public_html/resources/views/layouts/layout.blade.php ENDPATH**/ ?>