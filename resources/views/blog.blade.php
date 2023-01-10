@extends('layouts.app')
@section('content')
    <section class="py-60 pb-100 py-mobile hero_banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center mx-auto">
                    <h1 class="heading mb-2">Blogs</h1>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    </p>
                </div>

            </div>
        </div>
    </section>
    {{-- blog thumbnail --}}
    <section class="py-40 pb-0 blog_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <a href="{{ route('blog_details') }}" class="">
                        <div class="mb-lg-5 blog_link">
                            <img class="img-fluid blog_thumbnail" src="assets/images/bligBanner.webp" height="175px"
                                width="100%" alt="bligBanner">
                            <div class="hero_blog">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <span class="text_secondary font-13">Web Design</span>
                                        <span class="primary_text font-13 ms-4">14 April 2022</span>
                                    </div>
                                    {{-- social links --}}
                                    <div>
                                        <a href="#"><img src="assets/icons/facebookblog.svg" alt="facebookblog"></a>
                                        <a href="#"><img src="assets/icons/twitterblog.svg" alt="twitterblog"></a>
                                        <a href="#"><img src="assets/icons/in.svg" alt="linkedin"></a>
                                    </div>
                                </div>
                                <h3 class="card-hd mt-3">Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr,
                                    Sed
                                    Diam.</h3>
                                <p class="font-13 words_limit">Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr, Sed Diam
                                    Nonumy Eirmod Tempor Invidunt Ut Labore Et Dolore Magna Aliquyam Erat, Sed Diam
                                    Voluptua.</p>
                                <a class="text-primary read_more semi-bold" href="#">Read more</a>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('blog_details') }}" class="">
                        <div class="mb-lg-5 blog_link">
                            <img class="img-fluid blog_thumbnail" src="assets/images/bligBanner.webp" height="175px"
                                width="100%" alt="bligBanner">
                            <div class="hero_blog">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <span class="text_secondary font-13">Web Design</span>
                                        <span class="primary_text font-13 ms-4">14 April 2022</span>
                                    </div>
                                    {{-- social links --}}
                                    <div>
                                        <a href="#"><img src="assets/icons/facebookblog.svg" alt="facebookblog"></a>
                                        <a href="#"><img src="assets/icons/twitterblog.svg" alt="twitterblog"></a>
                                        <a href="#"><img src="assets/icons/in.svg" alt="linkedin"></a>
                                    </div>
                                </div>
                                <h3 class="card-hd mt-3">Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr,
                                    Sed
                                    Diam.</h3>
                                <p class="font-13 words_limit">Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr, Sed Diam
                                    Nonumy Eirmod Tempor Invidunt Ut Labore Et Dolore Magna Aliquyam Erat, Sed Diam
                                    Voluptua.</p>
                                <a class="text-primary read_more semi-bold" href="#">Read more</a>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('blog_details') }}" class="">
                        <div class="mb-lg-5 blog_link">
                            <img class="img-fluid blog_thumbnail" src="assets/images/bligBanner.webp" height="175px"
                                width="100%" alt="bligBanner">
                            <div class="hero_blog">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <span class="text_secondary font-13">Web Design</span>
                                        <span class="primary_text font-13 ms-4">14 April 2022</span>
                                    </div>
                                    {{-- social links --}}
                                    <div>
                                        <a href="#"><img src="assets/icons/facebookblog.svg" alt="facebookblog"></a>
                                        <a href="#"><img src="assets/icons/twitterblog.svg" alt="twitterblog"></a>
                                        <a href="#"><img src="assets/icons/in.svg" alt="linkedin"></a>
                                    </div>
                                </div>
                                <h3 class="card-hd mt-3">Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr,
                                    Sed
                                    Diam.</h3>
                                <p class="font-13 words_limit">Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr, Sed Diam
                                    Nonumy Eirmod Tempor Invidunt Ut Labore Et Dolore Magna Aliquyam Erat, Sed Diam
                                    Voluptua.</p>
                                <a class="text-primary read_more semi-bold" href="#">Read more</a>
                            </div>
                        </div>
                    </a>

                </div>
                <div class="col-lg-4 mx-auto">
                    {{-- search box --}}
                    <input class="form-control w-100 search" type="search" name="" id=""
                        placeholder="Search Here">
                    {{-- first side card --}}
                    <div class="p-3 text-center equal_shadow mt-3">
                        <img src="assets/images/whatToWrite.svg" alt="whatToWrite">
                        <h3 class="card-hd my-2">Don't Know What to Write?</h3>
                        <p>Hire class of mba to get your customized papers done within 12 hours. Your content will
                            be written by one of our expert tutors.</p>
                    </div>
                    {{-- second side card --}}
                    <div class="p-3 equal_shadow mt-3 top_blog_list">
                        <h3 class="card-hd my-2">Our Top Blog Posts</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">7 Must-Have Qualities of a Word Counter</a></li>
                            <li><a href="#">Types of Research – A Complete Guide</a></li>
                            <li><a href="#">All The Nitty-Gritty You Need To Know About A Personal Essay</a>
                            </li>
                            <li><a href="#">Research Paper Outline – everything you need to know</a></li>
                            <li><a href="#">How To Write A Narrative Essay Outline?</a></li>
                            <li><a href="#">How To Write A Leadership Essay?</a></li>
                            <li><a href="#">How To Write A Comparison Essay</a></li>
                            <li><a href="#">Best Argumentative Essay Examples</a></li>
                            <li><a href="#">Every Information On How To Write A Dissertation Discussion?</a>
                            </li>
                        </ul>
                    </div>
                    {{-- last card --}}
                    <div class="p-3 text-center equal_shadow mt-3">
                        <img src="assets/images/ReadOurGuide.svg" width="156px" height="144px" alt="ReadOurGuide">
                        <h3 class="card-hd my-2">Read Now our Research Paper Writing Guide</h3>
                        <p>Hire class of mba to get your customized papers done within 12 hours. Your content will
                            be written by one of our expert tutors.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- order now --}}
    @include('ordernow')
@endsection
