<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin Panel</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('svg/logo.png')); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Bootstrap CSS CDN -->
    <!-- Custom Stylesheet -->
<link href="<?php echo e(url('admin/plugins/tables/css/datatable/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">

  <link href="<?php echo e(url('admin/css/style.css')); ?>" rel="stylesheet">


<style>
    .nav-header .brand-logo a{
        padding: 8px!important;
    }
    .form-control-sm{
        border: 1px solid #ced4da !important;
        height: 36px !important;
        }
        
</style>

</head>

<body>
    <div id="main-wrapper">
        
        <div class="nav-header" style="background: #fff;">
            <div class="brand-logo" style="padding: 0px!important;">
                 <a href="">
                    <b class="logo-abbr"><img src="<?php echo e(asset('svg/logo.png')); ?>"  alt=""> </b>
                    <span class="logo-compact"><img src="<?php echo e(asset('svg/logo.png')); ?>" alt=""></span>
                    <span class="brand-title m-auto text-center">
                        <img src="<?php echo e(asset('svg/logo.png')); ?>" alt="" width="75" height="75">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
        Header start
        ***********************************-->
        <div class="header">
            <div class="header-content clearfix">
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    
                   
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span><?php echo e(Auth::guard('admin')->user()->name); ?></span>  <i class="fa fa-angle-down f-s-14" aria-hidden="true"></i>
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                        <a href=""><i class="icon-user"></i> <span>Profile</span></a>
                                        </li>
                                        <hr class="my-2">
                                
                                        <li><a href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();"><i class="icon-key"></i> <span>Logout</span></a>
                                                 <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                                    <?php echo csrf_field(); ?>
                                                </form> 
                                                
                                        </li>
                                    </ul>
                                </div>
                             </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="nk-sidebar" >
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Dashboard</li>
                    <li>
                        <a class="has-arrow" href="<?php echo e(route('admin.home')); ?>"aria-expanded="false">
                            <i class="icon-speedometer menu-icon "></i><span class="nav-text"> Dashboard</span>
                        </a>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                       <i class="fa fa-list-alt" aria-hidden="true"></i>
                        <span class="nav-text">  Categories</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?php echo e(route('categories.index')); ?>">All Categories</a></li>
                            <li><a href="<?php echo e(route('categories.create')); ?>">Add New</a></li>
                        </ul>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-balance-scale"></i><span class="nav-text">  Sizes</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?php echo e(route('sizes.index')); ?>">All Sizes</a></li>
                            <li><a href="<?php echo e(route('sizes.create')); ?>">Add size</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-cutlery" aria-hidden="true"></i>
                         <span class="nav-text">Menus</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?php echo e(route('menus.create')); ?>">Add New</a></li>
                            <li><a href="<?php echo e(route('menus.index')); ?>">All Menus</a></li>
                            <li><a href="<?php echo e(route('toppings.index')); ?>">Extra Toppings</a></li>
                            <li><a href="<?php echo e(route('sauces.index')); ?>">Sauces</a></li>
                            <li><a href="<?php echo e(route('prices.index')); ?>">Extra Toppings Prices</a></li>
                        </ul>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-gift" aria-hidden="true"></i><span class="nav-text">Week days Offers</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?php echo e(route('offers.index')); ?>">All Offers</a></li>
                            <li><a href="<?php echo e(route('offers.create')); ?>">Add New</a></li>


                        </ul>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-tags"></i><span class="nav-text">  Coupon</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?php echo e(route('coupens.create')); ?>">New Coupon</a></li>
                            <li><a href="<?php echo e(route('coupens.index')); ?>">All Coupon</a></li>


                        </ul>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-first-order" aria-hidden="true"></i>
<span class="nav-text">  Orders</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?php echo e(route('admin.corders',0)); ?>">New Orders</a></li>
                            <li><a href="<?php echo e(route('admin.hldorders',0)); ?>">Orders On Hold</a></li>
                            <li><a href="<?php echo e(route('admin.iporders',0)); ?>">InProcess Orders</a></li>
                            <li><a href="<?php echo e(route('admin.cmorders',0)); ?>">Completed Orders</a></li>
                            
                            <li><a href="<?php echo e(route('admin.horders')); ?>">Order History/Reports</a></li>


                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-sliders" aria-hidden="true"></i><span class="nav-text">Sliders</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?php echo e(route('slides.index')); ?>">All Sliders</a></li>
                            <li><a href="<?php echo e(route('slides.create')); ?>">Add New</a></li>

                        <!-- </ul>
                    </li>
                    <li>
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                <i class="icon-layers menu-icon"></i><span class="nav-text">Components</span>
                            </a>
                            <ul aria-expanded="false"> -->
                            </ul>
                    </li>
                    <li>
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-cog" aria-hidden="true"></i><span class="nav-text">Settings</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="./form-basic.html"></a></li>

                            </ul>
                    </li>
                    <li>
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                               <i class="fa fa-users" aria-hidden="true"></i> <span class="nav-text">Customers</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="<?php echo e(route('admin.users')); ?>">All Customers</a></li>

                            </ul>
                    </li>
                </ul>
            </div>
        </div>
         <div class="content-body">
  
        <?php echo $__env->yieldContent('content'); ?>
        </div>
            <div class="footer">
                <div class="copyright">
                    <p>Copyright &copy; Designed & Developed by  2018</p>
                </div>
            </div>
            <!--**********************************
                Footer end
            ***********************************-->
    </div>
<!--**********************************
    Main wrapper end
***********************************-->


<!--**********************************
    Scripts
***********************************-->

<script src="<?php echo e(asset('admin/plugins/common/common.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/js/custom.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/js/settings.js')); ?>"></script>
<script src="<?php echo e(asset('admin/js/gleek.js')); ?>"></script>
<script src="<?php echo e(asset('admin/js/styleSwitcher.js')); ?>"></script>


<script src="<?php echo e(asset('admin/plugins/tables/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/plugins/tables/js/datatable/dataTables.bootstrap4.min.js')); ?>"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>



</body>

</html><?php /**PATH /home/concordw/public_html/site/resources/views/admin/layouts/layout.blade.php ENDPATH**/ ?>