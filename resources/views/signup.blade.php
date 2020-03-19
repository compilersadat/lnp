@extends('layouts.layout')
@section('content')
    <section class="my-5 py-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <!-- Material form login -->
                    <div class="card card_style">



                        <!--Card content-->
                        <div class="card-body px-lg-5 pt-0">
                            <h3 class=" h3 h3-responsive web-color pizza font-weight-bold text-center py-4">
                                <strong>Create Account</strong>
                            </h3>
                            <!-- Form -->
                            <form class="text-center" style="color: #757575;" action="#!">

                                <!-- Email -->
                                <div class="md-form ">
                                    <input type="text" name="name" placeholder="Enter Full Name" class="form-control text-center   btn-inside_se" style="border:none;">
                                </div>
                                <div class="md-form ">
                                    <input type="email" id="" name="email" placeholder="Enter Email" class="form-control text-center   btn-inside_se" style="border:none;">
                                </div>
                                <div class="md-form ">
                                    <input type="text" id="" name="mobile" placeholder="Enter Mobile Number" class="form-control text-center   btn-inside_se" style="border:none;">
                                </div>
                                <!-- Password -->
                                <div class="md-form">
                                    <input type="password" name="pass" placeholder="Create Password" class="form-control text-center   btn-inside_se" style="border:none;">

                                </div>



                                <!-- Sign in button -->
                                <button class="btn btn-shadow my-4  btn-block font-weight-bold" type="submit" style="color: #002E50!important;">Sign Up</button>
                                <div class="d-flex justify-content-around">

                                    <div class="">
                                        <p> <a href="{{url('login')}}" class="web-color font-weight-bold">Already Have an Account?
                                            </a>
                                        </p>
                                    </div>

                                </div>
                                <!-- Register -->


                                <!-- Social login -->
                                <p class="web-color">or sign up with:</p>
                                <a type="button" class="btn-floating btn-fb login_btn pt-1 btn-sm">
                                    <i class="fa fa-facebook-f  pt-2 mt-1" style=" color:#3b5998!important ;"></i>
                                </a>
                                <a type="button" class="btn-floating btn-gplus login_btn  btn-sm">
                                    <i class="fa fa-google-plus  pt-2 mt-1 text-center" style=" color:#dd4b39!important ;"></i>
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

@endsection
