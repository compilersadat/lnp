@extends('layouts.layout')
@section('content')
<section  style="background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('svg/back2.jpeg'); background-size: cover;">
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
                    <img src="{{asset('svg/resturant/contactside.jpg')}}" class="img-fluid img">
                </div>
                <div class="col-md-6 ml-5">
                    <h3 class="h3-responsive h3 pizza web-color pb-4">Conatct Us</h3>
                    <form class="text-center" style="color: #757575;" action="#!">

                        <!-- Email -->
                        <div class="form-row">
                            <div class="col-6">
                                <div class="md-form ">
                                    <input type="text" id="" name="firstname" placeholder="Enter First Name" class="form-control text-center   btn-inside_se" style="border:none;">
                                </div>
                            </div>
                            <div class="col-6">
                                <!-- Password -->
                                <div class="md-form">
                                    <input type="text" id="" name="lastname" placeholder="Enter Last Name" class="form-control text-center   btn-inside_se" style="border:none;">

                                </div>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="col-6">
                                <div class="md-form">
                                    <input type="email" id="" name="mail" placeholder="Enter Your Email" class="form-control text-center   btn-inside_se" style="border:none;">

                                </div>
                            </div>
                            <div class="col-6">
                                <div class="md-form">
                                    <input type="text" id="" name="Subject" placeholder="Enter subject" class="form-control text-center   btn-inside_se" style="border:none;">

                                </div>
                            </div>
                        </div>
                            <textarea class="form-control  text-center   btn-inside" id="messege"  placeholder="Enter Messege"  style="border:none;height: 13rem;"></textarea>
                        <div class="text-left">
                            <button class="btn btn-shadow px-5 font-weight-bold" style="color: #002E50!important;">Submit</button>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41288302.6806295!2d-130.11358188775674!3d50.83045994806638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4b0d03d337cc6ad9%3A0x9968b72aa2438fa5!2sCanada!5e0!3m2!1sen!2sin!4v1583748186234!5m2!1sen!2sin"  frameborder="0" s allowfullscreen="" style="width: 100%!important;border: 0;height: 350px;"></iframe>
@endsection
