@extends('layouts.app')
@section('content')
    <section class="py-60 hero_banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                        <div class=" text-center">
                            <h1 class="sub-heading mb-2">Welcome Back</h1>
                            <p class="semi-bold">We sent a password reset link to example@mail.com</p>
                        </div>
                        <div class="row">
                      <form action="" class="my-3">


                        <button class="btn btn-md primary_bg text-white semi-bold w-100">Open Mail</button>
                        <div class="text-center mt-2">
                          <span>Back to </span> <a href="{{ route('user_login') }}" class="font-14 font_md text_secondary text-decoration-underline">Login</a>
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
