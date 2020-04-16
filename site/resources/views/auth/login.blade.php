@extends('layouts.layout')
@section('content')
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
                        <form class="text-center" style="color: #757575;" action="{{route('login')}}" method="POST">
                            @csrf
                                <!-- Email -->
                                <div class="md-form ">
                                    <input type="email" id="" name="email" placeholder="Enter Email" class="form-control text-center   btn-inside_se {{ $errors->has('email') ? ' is-invalid' : '' }}" style="border:none;" value="{{old('email')}}">
                                    @if ($errors->has('email'))
                                    <span class="p-0 m-0 text-danger text-left mb-4"> <strong>{{ $errors->first('email') }}</strong></span>
                                    @endif
                                </div>

                                <!-- Password -->
                                <div class="md-form">
                                    <input type="password" id="" name="password" placeholder="Enter Password" class="form-control text-center   btn-inside_se {{ $errors->has('password') ? ' is-invalid' : '' }}" style="border:none;">
                                    @if ($errors->has('password'))
                                    <span class="p-0 m-0 text-danger text-left mb-4"> <strong>{{ $errors->first('password') }}</strong></span>
                                    @endif
                                </div>
                                 <p class="text-left ml-3">
                                <!-- Forgot password -->
                                    <a href="{{route('password.request')}}" class="web-color text-left font-weight-bold">Forgot password ?</a>
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
                                        <a href="{{url('register')}}" class="text-success font-weight-bold">Create one here.</a>
                                    </div>

                                </div>
                                <!-- Register -->


                                <!-- Social login -->
                                <p class="web-color">or sign in with:</p>
                            <a href="{{url('/redirect/facebook')}}"   class="btn-floating btn-fb login_btn pt-1 btn-sm">
                                    <i class="fa fa-facebook-f  pt-2 mt-1" style=" color:#3b5998!important ;"></i>
                                </a>
                                <a href="{{url('/redirect/google')}}" class="btn-floating btn-gplus login_btn  btn-sm">
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

@endsection
