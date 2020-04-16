<?php $__env->startSection('content'); ?>
    <section class="my-5  py-3">
        <div class="container my-5">
            <div class="dashboard-home">
                <div class="row">
                    <div class="col-3" >
                        <h3 class="text-two font-weight-400 " style="font-size: 18px;color: #2d2a2a;">MY ACCOUNT
                        </h3>
                        <hr>

                        <div class="list-group font-weight-600 text-black font-size text-one " id="list-tab" role="tablist">
                            <a class="list-group-item list-group-item-action active show" id="list-acc-details-list" data-toggle="list" href="#list-acc-details" role="tab" aria-controls="list-acc-details-list">My Profile</a>
                            <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">My Orders</a>
                            <a class="list-group-item list-group-item-action"  href="<?php echo e(route('logout')); ?>"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo csrf_field(); ?>
                            </form>
                        </div>
                    </div>
                    <div class="col-9 px-4" style="border-left: 1px solid #0000001a;">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade " id="list-dashboard" role="tabpanel" aria-labelledby="list-home-list">
                                <div class="row">
                                    <div class="col-md-4 mt-3">
                                        <div class="cards">
                                            <div class="card text-center dash-card card_style" style="box-shadow: 0 0 4px rgba(0,0,0,.18);border-radius: 0px;">
                                                <div class="card-body text-one py-3 " style="border-radius: 0px;">
                                                    <i class="fa fa-file font-size-40 icon-style" ></i>
                                                    <h6 class="font-size font-weight-600 pt-3 text-one text-black">RECENT ORDERS</h6>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-4 mt-3">
                                        <div class="cards">
                                            <div class="card text-center dash-card card_style" style="box-shadow: 0 0 4px rgba(0,0,0,.18);border-radius: 0px;">
                                                <div class="card-body text-one py-3 " style="border-radius: 0px;">
                                                    <i class="fa fa-download font-size-40 icon-style"></i>
                                                    <h6 class="font-size font-weight-600 pt-3 text-one text-black">ORDER DETAILS</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-3">
                                        <div class="cards">
                                            <div class="card text-center dash-card card_style" style="box-shadow: 0 0 4px rgba(0,0,0,.18);border-radius: 0px;">
                                                <div class="card-body text-one py-3 " style="border-radius: 0px;">
                                                    <i class="fa fa-user font-size-40 icon-style"></i>
                                                    <h6 class="font-size font-weight-600 pt-3 text-one text-black">ACCOUNT DETAILS</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    
                                </div>

                            </div>
                            <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                                <?php if(@App\Order::count()==0): ?>
                                <div class="col-md-12 text-center">
                                    <h6>No Data.</h6>
                                    <p>Order Some Delicious Food </p>
                                    <img src="<?php echo e(asset('svg/orders.svg')); ?>" width="100"/><br>
                                <a href="<?php echo e(route('menu')); ?>" class="btn btn-sm  indigo" >Continue Shopping</a>

                                </div>
                                    
                                <?php else: ?>
                                <table class="table">
                                    <thead>
                                    <tr class="text-two text-black">
                                        <th class="ch-border"> ORDER</th>
                                        <th class="ch-border">DATE</th>
                                        <th class="ch-border">STATUS</th>
                                        <th class="ch-border">TOTAL</th>
                                        <th class="ch-border">TIMING</th>
                                        <th class="ch-border">ADDRESS</th>
                                    </tr>
                                    </thead>
                                    <tbody class="text-one font-size">
                                    <tr>
                                        <td class="text-black font-weight-600">#4937</td>
                                        <td>January 5, 2020</td>
                                        <td>Processing</td>
                                        <td><b class="color">&#x20B9; 299.00</b>  for 1 item</td>
                                        <td>
                                           20.00 Min
                                        </td>
                                        <td>
                                                <a href="https://goo.gl/maps/ciyNpBptPu5pbsgM6" class="font-weight-bold web-color" target="_blank">
                                         <i class="fa fa-map-marker"></i>  Get Directions
                                            </a>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                                <?php endif; ?>
                            </div>
                            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                                <table class="table">
                                    <thead>
                                    <tr class="text-two text-black">
                                        <th class="ch-border"> ORDER</th>
                                        <th class="ch-border">DATE</th>
                                        <th class="ch-border">STATUS</th>
                                        <th class="ch-border">TOTAL</th>
                                    </tr>
                                    </thead>
                                    <tbody class="text-one font-size">
                                    <tr>
                                        <td class="text-black font-weight-600">#4937</td>
                                        <td>January 5, 2020</td>
                                        <td>Compeleted</td>
                                        <td><b class="color">&#x20B9; 299.00</b>  for 1 item</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade show active" id="list-acc-details" role="tabpanel" aria-labelledby="list-settings-list">
                                <h3 class="text-two font-weight-400 ">My profile</h3>
                                <div class="col-md-6 mt-4">
                                <form method="POST" action="<?php echo e(route('prof')); ?>">
                                    <?php echo csrf_field(); ?>
                                        <div class="form-group">
                                            
                                            <div class="md-form">
                                                
                                                <input name="name" type="text" class="form-control" value="<?php echo e(Auth::user()->name); ?>">
                                                <label >Name</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="md-form">
                                                <label>Mobile</label>
                                                <input name="mobile" type="number" class="form-control" value="<?php echo e(Auth::user()->mobile_no); ?>">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-sm btn-block indigo" >Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\lnp\resources\views/home.blade.php ENDPATH**/ ?>