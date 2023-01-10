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
    <section class="py-60 pb-0 blog_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="mb-5">
                        <img class="img-fluid blog_thumbnail rounded rounded-4" src="assets/images/bligBanner.webp"
                            height="175px" width="100%" alt="bligBanner">
                        <article>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis accusamus voluptatem
                                repellendus enim nobis eum laborum incidunt ipsa expedita quaerat sequi consequuntur odit
                                ducimus nisi harum itaque quam tempora cum nemo, excepturi hic culpa ullam? Consequuntur et
                                quo aliquid magnam modi neque est, dolor minus cumque necessitatibus, error, repudiandae ea.
                            </p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio repellendus odit libero in atque praesentium facilis cupiditate nulla ipsam porro?</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, reiciendis sapiente? Dolorum et quasi consequuntur voluptate porro optio officiis consectetur! Iusto ab inventore doloremque natus laboriosam iste aut exercitationem quos illum officiis? Officia culpa exercitationem quasi facilis mollitia error pariatur possimus aperiam numquam modi, corrupti architecto ipsa ad totam quibusdam nostrum incidunt asperiores ea quas expedita adipisci nemo! Nostrum, eum?</p>
                            <h2 class="card-hd my-3">Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr, Sed Diam.</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis accusamus voluptatem
                                repellendus enim nobis eum laborum incidunt ipsa expedita quaerat sequi consequuntur odit
                                ducimus nisi harum itaque quam tempora cum nemo, excepturi hic culpa ullam? Consequuntur et
                                quo aliquid magnam modi neque est, dolor minus cumque necessitatibus, error, repudiandae ea.
                            </p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio repellendus odit libero in atque praesentium facilis cupiditate nulla ipsam porro?</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, reiciendis sapiente? Dolorum et quasi consequuntur voluptate porro optio officiis consectetur! Iusto ab inventore doloremque natus laboriosam iste aut exercitationem quos illum officiis? Officia culpa exercitationem quasi facilis mollitia error pariatur possimus aperiam numquam modi, corrupti architecto ipsa ad totam quibusdam nostrum incidunt asperiores ea quas expedita adipisci nemo! Nostrum, eum?</p>
                            <h2 class="card-hd my-3">Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr, Sed Diam.</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis accusamus voluptatem
                                repellendus enim nobis eum laborum incidunt ipsa expedita quaerat sequi consequuntur odit
                                ducimus nisi harum itaque quam tempora cum nemo, excepturi hic culpa ullam? Consequuntur et
                                quo aliquid magnam modi neque est, dolor minus cumque necessitatibus, error, repudiandae ea.
                            </p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio repellendus odit libero in atque praesentium facilis cupiditate nulla ipsam porro?</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, reiciendis sapiente? Dolorum et quasi consequuntur voluptate porro optio officiis consectetur! Iusto ab inventore doloremque natus laboriosam iste aut exercitationem quos illum officiis? Officia culpa exercitationem quasi facilis mollitia error pariatur possimus aperiam numquam modi, corrupti architecto ipsa ad totam quibusdam nostrum incidunt asperiores ea quas expedita adipisci nemo! Nostrum, eum?</p>
                            <h2 class="card-hd my-3">Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr, Sed Diam.</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis accusamus voluptatem
                                repellendus enim nobis eum laborum incidunt ipsa expedita quaerat sequi consequuntur odit
                                ducimus nisi harum itaque quam tempora cum nemo, excepturi hic culpa ullam? Consequuntur et
                                quo aliquid magnam modi neque est, dolor minus cumque necessitatibus, error, repudiandae ea.
                            </p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio repellendus odit libero in atque praesentium facilis cupiditate nulla ipsam porro?</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, reiciendis sapiente? Dolorum et quasi consequuntur voluptate porro optio officiis consectetur! Iusto ab inventore doloremque natus laboriosam iste aut exercitationem quos illum officiis? Officia culpa exercitationem quasi facilis mollitia error pariatur possimus aperiam numquam modi, corrupti architecto ipsa ad totam quibusdam nostrum incidunt asperiores ea quas expedita adipisci nemo! Nostrum, eum?</p>
                        </article>
                    </div>




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
