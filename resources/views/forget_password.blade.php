@extends('layouts.app')
@section('content')
    <section class="py-60 hero_banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                        <div class=" text-center">
                            <h1 class="sub-heading">Forget Password?</h1>
                            <p class="semi-bold">No worries, we’ll send you reset instructions.</p>
                        </div>
                        <div class="row">
                      <form action="" class="my-3">
                        <div class="col-lg-12">
                            <input type="text" class="form-control mb_12" placeholder="Enter your Email">
                        </div>

                        <div class="text-end my-3">
                        </div>
                        <a href="{{ ('checkMail') }}" class="btn btn-md primary_bg text-white semi-bold w-100">Reset Password</a>
                        <div class="text-center mt-2">
                        <a href="{{ route('user_login') }}" class="font-14 font_md text_secondary text-decoration-underline">Back to Log in</a>
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
