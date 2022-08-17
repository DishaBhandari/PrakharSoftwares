@extends('main.layouts.master')
@section('title', 'Home')
@section('content')
    </div>
    </div>
    <style>
        .carousel__button svg g,
        .carousel__button svg circle,
        .carousel__button svg path,
        .fancybox__counter span {
            color: white !important;
        }

        .fancy img {
            transition: 2s ease;
        }

        .fancy {
            overflow: hidden !important;
            display: inline-block;
            border-radius: 0.625rem;
        }

        .fancy img:hover {
            transform: scale(1.2);
        }

        /* .fancybox__toolbar__items--left {
                                                                                                                                                                                                                                                                                                display: none !important;
                                                                                                                                                                                                                                                                                            } */
    </style>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="preloader" id="preloader">
            <div class="loader">
                <div class="line-scale">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
        <section class="py-0">
            <div class="swiper theme-slider min-vh-100"
                data-swiper='{"loop":true,"allowTouchMove":false,"autoplay":{"delay":5000},"effect":"fade","speed":800}'>
                <div class="swiper-wrapper">
                    @foreach ($slide as $item)
                        <div class="swiper-slide" data-zanim-timeline="{}">
                            <div class="bg-holder"
                                style="background-image:url({{ asset('Home_Slide/') . '/' . $item->bannerimg }});">
                            </div>
                            <!--/.bg-holder-->
                            <div class="container">
                                <div class="row min-vh-100 py-8 align-items-center" data-inertia='{"weight":1.5}'>
                                    <div class="col-sm-8 col-lg-7 px-5 px-sm-3">
                                        <div class="overflow-hidden">
                                            <h1 class="fs-4 fs-md-5 lh-1" data-zanim-xs='{"delay":0}'>{{ $item->heading }}
                                            </h1>
                                        </div>
                                        <div class="overflow-hidden">
                                            <p class="text-primary pt-4 mb-5 fs-1 fs-md-2 lh-xs"
                                                data-zanim-xs='{"delay":0.1}'>
                                                {{ $item->desc }}</p>
                                        </div>
                                        <div class="overflow-hidden">
                                            <div data-zanim-xs='{"delay":0.2}'><a class="btn btn-primary me-3 mt-3"
                                                    href="{{ $item->link1 }}">{{ $item->linktext1 }}<span
                                                        class="fas fa-chevron-right ms-2"></span></a><a
                                                    class="btn btn-warning mt-3"
                                                    href="{{ $item->link2 }}">{{ $item->linktext2 }}<span
                                                        class="fas fa-chevron-right ms-2"></span></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-nav">
                    <div class="swiper-button-prev"><span class="fas fa-chevron-left"></span></div>
                    <div class="swiper-button-next"><span class="fas fa-chevron-right"></span></div>
                </div>
            </div>
        </section>

        <!-- ============================================-->
        <!-- Home About Section ============================-->
        <section class="bg-white text-center">
            @foreach ($about as $item)
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-10 col-md-6">
                            <h3 class="fs-2 fs-lg-3">{{ $item->heading }}</h3>
                            <p class="px-lg-4 mt-3">{{ $item->desc }}</p>
                            <hr class="short"
                                data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}'
                                data-zanim-trigger="scroll" />
                        </div>
                    </div>
                    <div class="row mt-4 mt-md-5">
                        <div class="col-sm-6 col-lg-3 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                            <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><span
                                    class="far fa-chart-bar"></span>
                            </div>
                            <h5 class="mt-4" data-zanim-xs='{"delay":0.1}'>{{ $item->heading1 }}g</h5>
                            <p class="mb-0 mt-3 px-3" data-zanim-xs='{"delay":0.2}'>{{ $item->desc1 }}</p>
                        </div>
                        <div class="col-sm-6 col-lg-3 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                            <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><span class="far fa-bell"></span>
                            </div>
                            <h5 class="mt-4" data-zanim-xs='{"delay":0.1}'>{{ $item->heading2 }}</h5>
                            <p class="mb-0 mt-3 px-3" data-zanim-xs='{"delay":0.2}'>{{ $item->desc2 }}</p>
                        </div>
                        <div class="col-sm-6 col-lg-3 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                            <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><span
                                    class="far fa-lightbulb"></span>
                            </div>
                            <h5 class="mt-4" data-zanim-xs='{"delay":0.1}'>{{ $item->heading3 }}</h5>
                            <p class="mb-0 mt-3 px-3" data-zanim-xs='{"delay":0.2}'>{{ $item->desc3 }}</p>
                        </div>
                        <div class="col-sm-6 col-lg-3 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                            <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><span class="fas fa-headset"></span>
                            </div>
                            <h5 class="mt-4" data-zanim-xs='{"delay":0.1}'>{{ $item->heading4 }}</h5>
                            <p class="mb-0 mt-3 px-3" data-zanim-xs='{"delay":0.2}'>{{ $item->desc4 }}</p>
                        </div>
                    </div>
                </div><!-- end of .container-->
            @endforeach
        </section><!-- Home About Section close ============================-->
        <!-- ============================================-->






        <!-- ============================================-->
        <!-- Home Services begin ============================-->
        <section class="bg-100">
            <div class="container">
                <div class="text-center mb-6">
                    <h3 class="fs-2 fs-md-3">Our Services</h3>
                    <hr class="short"
                        data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}'
                        data-zanim-trigger="scroll" />
                </div>
                <div class="row g-0 position-relative mb-4 mb-lg-0">
                    <div class="col-lg-6 py-3 py-lg-0 mb-0 position-relative" style="min-height:400px;">
                        <div class="bg-holder rounded-ts-lg rounded-te-lg rounded-lg-te-0  "
                            style="background-image:url({{ asset('main/assets/img/6.jpg') }});"></div>
                        <!--/.bg-holder-->
                    </div>
                    <div
                        class="col-lg-6 px-lg-5 py-lg-6 p-4 my-lg-0 bg-white rounded-bs-lg rounded-lg-bs-0 rounded-be-lg rounded-lg-be-0 rounded-lg-te-lg ">
                        <div class="elixir-caret d-none d-lg-block"></div>
                        <div class="d-flex align-items-center h-100">
                            <div data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                <div class="overflow-hidden">
                                    <h5 data-zanim-xs='{"delay":0}'>Business Consulting</h5>
                                </div>
                                <div class="overflow-hidden">
                                    <p class="mt-3" data-zanim-xs='{"delay":0.1}'>As one of the world’s largest
                                        accountancy networks, elixir helps a diverse range of clients with a diverse
                                        range of needs.This is especially true of our Advisory Practice, which provides
                                        corporate finance and transaction services, business restructuring.</p>
                                </div>
                                <div class="overflow-hidden">
                                    <div data-zanim-xs='{"delay":0.2}'><a class="d-flex align-items-center"
                                            href="#!">Learn More<div class="overflow-hidden ms-2"><span
                                                    class="d-inline-block"
                                                    data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'>&xrarr;</span>
                                            </div></a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row g-0 position-relative mb-4 mb-lg-0">
                    <div class="col-lg-6 py-3 py-lg-0 mb-0 position-relative order-lg-2" style="min-height:400px;">
                        <div class="bg-holder rounded-ts-lg rounded-te-lg rounded-lg-te-0  rounded-lg-ts-0"
                            style="background-image:url({{ asset('main/assets/img/7.jpg') }});"></div>
                        <!--/.bg-holder-->
                    </div>
                    <div
                        class="col-lg-6 px-lg-5 py-lg-6 p-4 my-lg-0 bg-white rounded-bs-lg rounded-lg-bs-0 rounded-be-lg  rounded-lg-be-0">
                        <div class="elixir-caret d-none d-lg-block"></div>
                        <div class="d-flex align-items-center h-100">
                            <div data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                <div class="overflow-hidden">
                                    <h5 data-zanim-xs='{"delay":0}'>Tax consulting</h5>
                                </div>
                                <div class="overflow-hidden">
                                    <p class="mt-3" data-zanim-xs='{"delay":0.1}'>Elixir serves clients across the
                                        country and around the world as they navigate an increasingly complex tax
                                        landscape. Our tax professionals draw on deep experience and industry-specific
                                        knowledge to deliver clients the insights and innovation they need.</p>
                                </div>
                                <div class="overflow-hidden">
                                    <div data-zanim-xs='{"delay":0.2}'><a class="d-flex align-items-center"
                                            href="#!">Learn More<div class="overflow-hidden ms-2"><span
                                                    class="d-inline-block"
                                                    data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'>&xrarr;</span>
                                            </div></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-0 position-relative mb-4 mb-lg-0">
                    <div class="col-lg-6 py-3 py-lg-0 mb-0 position-relative" style="min-height:400px;">
                        <div class="bg-holder rounded-ts-lg rounded-te-lg rounded-lg-te-0 rounded-lg-ts-0 rounded-bs-0 rounded-lg-bs-lg "
                            style="background-image:url({{ asset('main/assets/img/8.jpg') }});"></div>
                        <!--/.bg-holder-->
                    </div>
                    <div
                        class="col-lg-6 px-lg-5 py-lg-6 p-4 my-lg-0 bg-white rounded-bs-lg rounded-lg-bs-0 rounded-be-lg  ">
                        <div class="elixir-caret d-none d-lg-block"></div>
                        <div class="d-flex align-items-center h-100">
                            <div data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                <div class="overflow-hidden">
                                    <h5 data-zanim-xs='{"delay":0}'>Advisory</h5>
                                </div>
                                <div class="overflow-hidden">
                                    <p class="mt-3" data-zanim-xs='{"delay":0.1}'>To help you understand what this
                                        road looks like, we surveyed 1165 digital marketers across Europe and North
                                        America to explore current trends and priorities in digital marketing.</p>
                                </div>
                                <div class="overflow-hidden">
                                    <div data-zanim-xs='{"delay":0.2}'><a class="d-flex align-items-center"
                                            href="#!">Learn More<div class="overflow-hidden ms-2"><span
                                                    class="d-inline-block"
                                                    data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'>&xrarr;</span>
                                            </div></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-0 position-relative mb-4 mb-lg-0">
                    <div class="col-lg-6 py-3 py-lg-0 mb-0 position-relative order-lg-2" style="min-height:400px;">
                        <div class="bg-holder rounded-ts-lg rounded-te-lg rounded-lg-te-0 rounded-lg-ts-0 rounded-bs-0 rounded-lg-bs-lg "
                            style="background-image:url({{ asset('main/assets/img/8.jpg') }});"></div>
                        <!--/.bg-holder-->
                    </div>
                    <div
                        class="col-lg-6 px-lg-5 py-lg-6 p-4 my-lg-0 bg-white rounded-bs-lg rounded-lg-bs-0 rounded-be-lg  ">
                        <div class="elixir-caret d-none d-lg-block"></div>
                        <div class="d-flex align-items-center h-100">
                            <div data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                <div class="overflow-hidden">
                                    <h5 data-zanim-xs='{"delay":0}'>Advisory</h5>
                                </div>
                                <div class="overflow-hidden">
                                    <p class="mt-3" data-zanim-xs='{"delay":0.1}'>To help you understand what this
                                        road looks like, we surveyed 1165 digital marketers across Europe and North
                                        America to explore current trends and priorities in digital marketing.</p>
                                </div>
                                <div class="overflow-hidden">
                                    <div data-zanim-xs='{"delay":0.2}'><a class="d-flex align-items-center"
                                            href="#!">Learn More<div class="overflow-hidden ms-2"><span
                                                    class="d-inline-block"
                                                    data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'>&xrarr;</span>
                                            </div></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">

                    <a class="bg-success text-black btn col-4 mt-5 mx-auto" href="Gallary">Show More</a>
                </div>
            </div><!-- end of .container-->

        </section><!-- Home Services close ============================-->
        <!-- ============================================-->
        <!-- ============================================-->
        <!-- Home Gallry begin ============================-->
        <section class="bg-white  text-center">
            <div class="container">
                <div class="text-center mb-6">
                    <h3 class="fs-2 fs-md-3">Gallary</h3>
                    <hr class="short"
                        data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}'
                        data-zanim-trigger="scroll" />
                </div>
                <div class="row" id="gallery ">
                    <div class="col-sm-6 col-lg-4    ">
                        <div class="h-100">
                            <a class="fancy" href="{{ asset('main/assets/img/portrait-3.jpg') }}"><img class="card-img"
                                    src="{{ asset('main/assets/img/portrait-3.jpg') }}" alt="Reenal Scott" /></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mt-4 mt-sm-0  ">
                        <div class="h-100">
                            <a class="fancy" href="{{ asset('main/assets/img/portrait-4.jpg') }}">
                                <img class="card-img" src="{{ asset('main/assets/img/portrait-4.jpg') }}"
                                    alt="Lily Anderson" /></a>

                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mt-4  mt-lg-0 ">
                        <div class="h-100">
                            <a class="fancy" href="{{ asset('main/assets/img/portrait-5.jpg') }}">
                                <img class="card-img" src="{{ asset('main/assets/img/portrait-5.jpg') }}"
                                    alt="Thomas Anderson" /></a>


                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mt-4   ">
                        <div class="h-100">
                            <a class="fancy" href="{{ asset('main/assets/img/portrait-6.jpg') }}">
                                <img class="card-img" src="{{ asset('main/assets/img/portrait-6.jpg') }}"
                                    alt="Legartha Mantana" />
                            </a>


                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mt-4   ">
                        <div class="h-100">
                            <a class="fancy" href="{{ asset('main/assets/img/portrait-7.jpg') }}">
                                <img class="card-img" src="{{ asset('main/assets/img/portrait-7.jpg') }}"
                                    alt="John Snow" />
                            </a>

                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mt-4   ">
                        <div class="h-100">
                            <a class="fancy" href="{{ asset('main/assets/img/portrait-1.jpg') }}">
                                <img class="card-img" src="{{ asset('main/assets/img/portrait-1.jpg') }}"
                                    alt="Ragner Lothbrok" />
                            </a>

                        </div>
                    </div>
                    <a class="bg-success text-black btn col-4 mt-5 mx-auto" href="Gallary">Show More</a>
                </div>
            </div><!-- end of .container-->
        </section><!-- Home Gallry close ============================-->
        <!-- ============================================-->





        <!-- ============================================-->
        <!--Home why begin ============================-->
        <section>
            <div class="container">
                <div class="text-center mb-7">
                    <h3 class="fs-2 fs-md-3">Why Choose Prakhar Softwares Solution</h3>
                    <hr class="short"
                        data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}'
                        data-zanim-trigger="scroll" />
                </div>
                <div class="row">
                    <div class="col-lg-6 pe-lg-3"><img class="rounded-3 img-fluid"
                            src="{{ asset('main/assets/img/why-choose-us.jpg') }}" alt="about" /></div>
                    <div class="col-lg-6 px-lg-5 mt-6 mt-lg-0" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="overflow-hidden">
                            <div class="px-4 px-sm-0" data-zanim-xs='{"delay":0}'>
                                <h5 class="fs-0 fs-lg-1"><span class="fas fa-comment-dots fs-1 me-2"
                                        data-fa-transform="flip-h"></span>We Are Professional</h5>
                                <p class="mt-3">We resource, train, speak, mentor and encourage; marketplace leaders,
                                    business owners and career professionals to be effective in the workplace.</p>
                            </div>
                        </div>
                        <div class="overflow-hidden">
                            <div class="px-4 px-sm-0 mt-5" data-zanim-xs='{"delay":0}'>
                                <h5 class="fs-0 fs-lg-1"><span class="fas fa-palette fs-1 me-2"
                                        data-fa-transform="shrink-1"></span>We Are Creative</h5>
                                <p class="mt-3">With so many factors to consider when deciding how to characterize
                                    your company , wouldn’t it be great to have a group of forward-thinking,
                                    well-informed individuals on board who know what they’re doing?</p>
                            </div>
                        </div>
                        <div class="overflow-hidden">
                            <div class="px-4 px-sm-0 mt-5" data-zanim-xs='{"delay":0}'>
                                <h5 class="fs-0 fs-lg-1"><span class="fas fa-stopwatch fs-1 me-2"
                                        data-fa-transform="grow-1"></span>24/7 Great Support</h5>
                                <p class="mt-3">Design clever and compelling marketing strategies, improve product
                                    positioning, and drive conversion rates, Elixir is all time available to guide you.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->
        </section><!-- Home why close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- Home Enqury begin ============================-->
        <section class="bg-primary">
            <div class="container">
                <div class="row align-items-center text-white">
                    <div class="col-lg-4">
                        <div class="border border-2 border-warning p-4 py-lg-5 text-center rounded-3"
                            data-zanim-timeline="{}" data-zanim-trigger="scroll">
                            <div class="overflow-hidden">
                                <h4 class="text-white" data-zanim-xs='{"delay":0}'>Request a call back</h4>
                            </div>
                            <div class="overflow-hidden">
                                <p class="px-lg-1 text-100 mb-0" data-zanim-xs='{"delay":0.1}'>Would you like to speak
                                    to one of our financial advisers over the phone? Just submit your details and we’ll
                                    be in touch shortly. You can also email us if you would prefer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 ps-lg-5 mt-6 mt-lg-0">
                        <h5 class="text-white">I would like to discuss:</h5>
                        <form class="mt-4" method="post">
                            <div class="row">
                                <div class="col-6"><input class="form-control" type="hidden" name="to"
                                        value="username@domain.extension" /><input class="form-control" type="text"
                                        placeholder="Your Name" aria-label="Your Name" /></div>
                                <div class="col-6"><input class="form-control" type="text"
                                        placeholder="Phone Number" aria-label="Phone Number" /></div>
                                <div class="col-6 mt-4"><input class="form-control" type="text" placeholder="Subject"
                                        aria-label="Subject" /></div>
                                <div class="col-6 mt-4"><button class="btn btn-warning w-100"
                                        type="submit">Submit</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- end of .container-->
        </section><!-- Home Enqury close ============================-->
        <!-- ============================================-->





        <!-- ============================================-->
        <!-- Home testimonial begin ============================-->
        <section class="bg-white">
            <div class="container">
                <div class="swiper theme-slider" data-swiper='{"loop":true,"slidesPerView":1,"autoplay":{"delay":5000}}'>
                    <div class="swiper-wrapper">
                        @foreach ($test as $item)
                            <div class="swiper-slide">
                                <div class="row px-lg-8">
                                    <div class="col-4 col-md-3 mx-auto"><img class="rounded-3 mx-auto img-fluid"
                                            src="{{ asset('testimonial/' . $item->image) }}" alt="Member" /></div>
                                    <div class="col-md-9 mt-4 mt-md-0 px-4 px-sm-3">
                                        <p class="lead">{{ $item->desc }}</p>
                                        <h6 class="fs-0 mb-1 mt-4">{{ $item->name }}</h6>
                                        <p class="mb-0 text-500">{{ $item->info }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-nav">
                        <div class="swiper-button-prev icon-item icon-item-lg"><span
                                class="fas fa-chevron-left fs--2"></span></div>
                        <div class="swiper-button-next icon-item icon-item-lg"><span
                                class="fas fa-chevron-right fs--2"></span></div>
                    </div>
                </div>
            </div><!-- end of .container-->
        </section><!-- Home testimonial close ============================-->
        <!-- ============================================-->

        <div class="bg-200 py-6">
            <div class="container">
                <div class="row align-items-center" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="col-4 col-md-2 my-3 overflow-hidden"><img class="img-fluid"
                            src="{{ asset('main/assets/img/partner/logo2.png') }}" alt="partnerco" data-zanim-xs="{}" />
                    </div>
                    <div class="col-4 col-md-2 my-3 overflow-hidden"><img class="img-fluid"
                            src="{{ asset('main/assets/img/partner/logo1.png') }}" alt="tvc" data-zanim-xs="{}" />
                    </div>
                    <div class="col-4 col-md-2 my-3 overflow-hidden"><img class="img-fluid"
                            src="{{ asset('main/assets/img/partner/logo6.png') }}" alt="arcade" data-zanim-xs="{}" />
                    </div>
                    <div class="col-4 col-md-2 my-3 overflow-hidden"><img class="img-fluid"
                            src="{{ asset('main/assets/img/partner/logo3.png') }}" alt="bearbrand" data-zanim-xs="{}" />
                    </div>
                    <div class="col-4 col-md-2 my-3 overflow-hidden"><img class="img-fluid"
                            src="{{ asset('main/assets/img/partner/logo5.png') }}" alt="fast brothers"
                            data-zanim-xs="{}" /></div>
                    <div class="col-4 col-md-2 my-3 overflow-hidden"><img class="img-fluid"
                            src="{{ asset('main/assets/img/partner/logo4.png') }}" alt="harculis beards"
                            data-zanim-xs="{}" /></div>
                </div>
            </div>
        </div>


    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




@endsection
@section('script')
    <script>
        Fancybox.bind(".fancy", {
            groupAll: true,
        });
    </script>
@endsection
