@extends('layouts.app')
@section('content')
    <section class="py-60 hero_banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                        <div class=" text-center">
                            <h1 class="sub-heading">Welcome Back</h1>
                            <p class="semi-bold ">Login to your account</p>
                        </div>
                        <div class="row">
                      <form action="" class="my-3 form">
                        <div class="col-lg-12">
                            <input type="text" class="form-control mb_12" placeholder="Email">
                        </div>
                        <div class="col-lg-12 password_field">
                            <input type="password" class="form-control mb_12" id="password" placeholder="Password">
                            <i class="bi bi-eye-slash password_icon togglePassword" onclick="passwordshowhide()"></i>
                        </div>
                        <div class="text-end my-3">
                            <a href="{{ route('forget_password') }}" class="text-decoration-underline font_md font-14">Forget Password?</a>
                        </div>
                        <button class="btn btn-md primary_bg text-white semi-bold w-100">Login</button>
                        <div class="text-center mt-2">
                          <span>Don’t have an account? </span> <a href="{{ route('register') }}" class="font-14 font_md text_secondary text-decoration-underline">SIGNUP</a>
                        </div>
                      </form>
                        </div>
                </div>
            </div>
        </div>
    </section>
@endsection
