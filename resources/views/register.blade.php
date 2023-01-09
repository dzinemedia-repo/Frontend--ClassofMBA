@extends('layouts.app')
@section('content')
    <section class="py-60 hero_banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                        <div class=" text-center">
                            <h1 class="sub-heading">Register Now!</h1>
                            <p class="semi-bold ">Create your account</p>
                        </div>
                        <div class="row">
                      <form action="" class="my-3">
                        <div class="col-lg-12">
                            <input type="text" class="form-control mb_12" placeholder="Your Name">
                        </div>
                        <div class="col-lg-12">
                            <input type="text" class="form-control mb_12" placeholder="Your Phone">
                        </div>
                        <div class="col-lg-12">
                            <input type="text" class="form-control mb_12" placeholder="Your Email">
                        </div>
                          <div class="col-lg-12">
                            <input type="text" class="form-control mb_12" placeholder="Your Password">
                        </div>
                        <div class="col-lg-12 password_field">
                            <input type="password" class="form-control mb_12" id="password" placeholder="Password">
                            <i class="bi bi-eye-slash password_icon togglePassword" onclick="passwordshowhide()"></i>
                        </div>
                        <div class="text-end my-3">
                        </div>
                        <button class="btn btn-md primary_bg text-white semi-bold w-100">Create Account</button>
                        <div class="text-center mt-2">
                          <span>Already have an account?  </span> <a href="{{ route('user_login') }}" class="font-14 font_md text_secondary text-decoration-underline">LOGIN</a>
                        </div>
                      </form>
                        </div>



                    <form action="">

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
