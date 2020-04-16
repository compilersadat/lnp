<?php $__env->startSection('content'); ?>
<section class="mt-5 pt-5"  style="background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('svg/back2.jpeg'); background-size: cover;">
    <div class="container text-center py-5">
        <div class="row justify-content-center white-text py-4">
            <div class="col-md-6">
                <h5 class="h5-responsive h5 ">
                    Contact
                </h5>
                <h2 class=" h2-responsive h2">
                    Are Easy To Find
                </h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur consequatur dicta ex facilis</p>
            </div>
        </div>

    </div>
</section>
    <section class="my-5 py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5 pt-5">
                    <img src="<?php echo e(asset('svg/resturant/contactside.jpg')); ?>" class="img-fluid img">
                </div>
                <div class="col-md-6 ml-5">
                    <h3 class="h3-responsive h3 pizza web-color pb-4">Conatct Us</h3>
                    <form class="" style="color: #757575;" id="contact-form" name="contact-form" action="<?php echo e(route('mail')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        

                        <!-- Email -->
                        <div class="form-row">
                            <div class="col-10">
                                <div class="md-form ">
                                    <input type="text" id="name" name="name" placeholder="Enter Full Name" class="form-control px-5   btn-inside_se" style="border:none;">
                                </div>
                            </div>
                           

                        </div>
                        <div class="form-row">
                            <div class="col-6">
                                <div class="md-form">
                                    <input type="email" id="email" name="email" placeholder="Enter Your Email" class="form-control text-center   btn-inside_se" style="border:none;">

                                </div>
                            </div>
                            <div class="col-6">
                                <div class="md-form">
                                    <input type="text"  id="subject" name="Subject" placeholder="Enter subject" class="form-control text-center   btn-inside_se" style="border:none;">

                                </div>
                            </div>
                        </div>
                            <textarea class="form-control  px-5 pt-3  btn-inside" id="message" name="message"  placeholder="Enter Messege"  style="border:none;height: 13rem;"></textarea>
                        <div class="text-left">
                            <button class="btn btn-shadow px-5 font-weight-bold" type="submit" style="color: #002E50!important;">Submit</button>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41288302.6806295!2d-130.11358188775674!3d50.83045994806638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4b0d03d337cc6ad9%3A0x9968b72aa2438fa5!2sCanada!5e0!3m2!1sen!2sin!4v1583748186234!5m2!1sen!2sin"  frameborder="0" s allowfullscreen="" style="width: 100%!important;border: 0;height: 350px;"></iframe>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/concordw/public_html/site/resources/views/contactus.blade.php ENDPATH**/ ?>