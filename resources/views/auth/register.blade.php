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
                        <form class="text-center" style="color: #757575;" action="{{route('register')}}" method="POST">
                            @csrf
                                <!-- Email -->
                                <div class="md-form ">
                                    <input type="text" name="name" placeholder="Enter Full Name" class="form-control text-center   btn-inside_se" style="border:none;">
                                    @if ($errors->has('name'))
                                    <span class="p-0 m-0 text-danger text-left mb-4"> <strong>{{ $errors->first('name') }}</strong></span>
                                    @endif
                                </div>
                                <div class="md-form ">
                                    <input type="email" id="" name="email" placeholder="Enter Email" class="form-control text-center   btn-inside_se" style="border:none;">
                                    @if ($errors->has('email'))
                                    <span class="p-0 m-0 text-danger text-left mb-4"> <strong>{{ $errors->first('email') }}</strong></span>
                                    @endif
                                </div>
                                <div class="md-form ">
                                    <input type="text" id="" name="mobile" placeholder="Enter Mobile Number" class="form-control text-center   btn-inside_se" style="border:none;">
                                    @if ($errors->has('mobile'))
                                    <span class="p-0 m-0 text-danger text-left mb-4"> <strong>{{ $errors->first('mobile') }}</strong></span>
                                    @endif
                                </div>
                                <!-- Password -->
                                <div class="md-form">
                                    <input type="password" name="password" placeholder="Create Password" class="form-control text-center   btn-inside_se" style="border:none;">
                                    @if ($errors->has('password'))
                                    <span class="p-0 m-0 text-danger text-left mb-4"> <strong>{{ $errors->first('password') }}</strong></span>
                                    @endif
                                </div>
                                <div class="md-form">
                                    <input type="password" name="password_confirmation" placeholder="Confirm Password" class="form-control text-center   btn-inside_se" style="border:none;">
                                    @if ($errors->has('password_confirmation'))
                                    <span class="p-0 m-0 text-danger text-left mb-4"> <strong>{{ $errors->first('password_confirmation') }}</strong></span>
                                    @endif
                                </div>



                                <!-- Sign in button -->
                                <button class="btn btn-shadow my-4  btn-block font-weight-bold" type="submit" style="color: #002E50!important;">Sign Up</button>
                            </form>
                                <div class="d-flex justify-content-around">

                                    <div class="">
                                        <p> <a href="{{url('login')}}" class="web-color font-weight-bold">Already Have an Account?
                                            </a>
                                        </p>
                                    </div>

                                </div>
                                <!-- Register -->


                                <!-- Social login -->
                                <p class="web-color text-center">or sign up with:</p>
                            <div class=" text-center">
                                <a href="{{url('/redirect/facebook')}}" class="btn-floating text-center  btn-fb login_btn pt-1 btn-sm">
                                    <i class="fa fa-facebook-f  pt-2 mt-1" style=" color:#3b5998!important ;"></i>
                                </a>
                                <a href="{{url('/redirect/google')}}" class="btn-floating text-center btn-gplus login_btn  btn-sm">
                                    <i class="fa fa-google-plus  pt-2 mt-1 text-center" style=" color:#dd4b39!important ;"></i>
                                </a>
                            </div>






                            <!-- Form -->

                        </div>

                    </div>
                    <!-- Material form login -->
                </div>
            </div>
        </div>
    </section>

@endsection
