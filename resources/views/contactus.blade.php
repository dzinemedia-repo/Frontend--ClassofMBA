@extends('layouts.app')
@section('content')
    {{-- hero section --}}
    <section class="py-60 hero_banner">
        <div class="container">
            <div class="row">
                <div class="text-center mb-lg-5">
                    <h1 class="heading mb-3">Contact Us</h1>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                        labore et dolore</p>
                </div>
            </div>
        </div>
    </section>
    {{-- contact section starts --}}
    <section class="py-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <span>Getting Touch</span>
                    <h1 class="sub-heading">Do you have a project in your mind?</h1>
                    <p class="my-3">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                        invidunt ut.</p>
                    <div class="mt-3">
                        <div class="d-flex">
                            <img class="me-3" src="assets/icons/Email.svg" alt="Email">
                            <div>
                                <p class="semi-bold">Email</p>
                                <a href="#" class="text-decoration-underline">support@essaydays.com</a>
                            </div>
                        </div>
                        <div class="d-flex my-4">
                            <img class="me-3" src="assets/icons/Phone.svg" alt="Phone">
                            <div>
                                <p class="semi-bold">Phone</p>
                                <a href="#" class="text-decoration-underline">+44 7742 214669</a>
                            </div>
                        </div>
                        <div class="d-flex">
                            <img class="me-3" src="assets/icons/LiveChat.svg" alt="LiveChat">
                            <div>
                                <p class="semi-bold">Live Chat</p>
                                <a href="#" class="text-decoration-underline">Open Live Chat</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <form action="" class="order_form">
                        <div class="row gy-4 form_area shadow-none">
                            <div class="col-lg-6">
                                <label for="">Name</label>
                                <input type="text" class="form-control" id="casettl" name="casettl" maxlength="255"
                                    value="" required="" placeholder="Full Name">
                            </div>
                            <div class="col-lg-6">
                                <label for="">Email</label>
                                <input type="email" class="form-control" id="casettl" name="casettl" maxlength="255"
                                    value="" required="" placeholder="someone@gmail.com">
                            </div>

                            <div class="col-lg-6">
                                <label for="">Inquiry Related to</label>
                                <input type="text" class="form-control" id="casettl" name="casettl" maxlength="255"
                                    value="" required="" placeholder="someone@gmail.com">
                            </div>

                            <div class="col-lg-6">
                                <label for="">Subject</label>
                                <input type="text" class="form-control" id="casettl" name="casettl" maxlength="255"
                                    value="" required="" placeholder="Enter Subject here">
                            </div>

                            <div class="col-lg-12">
                                <label for="">Inquiry Related to</label>
                                <textarea type="text" class="form-control" rows="10" id="casettl" name="casettl" maxlength="255"
                                    value="" required="" placeholder="Enter Subject here"></textarea>
                            </div>

<div class="text-lg-start text-center">
    <button class="primary_bg text-white btn">Send Message<img src="assets/icons/nextstep.svg" alt="nextstep"></button>
</div>






                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
