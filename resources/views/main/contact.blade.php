@extends('main.layouts.master')
@section('title', 'Contact')
@section('content')
    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section>
        <div class="bg-holder overlay"
            style="background-image:url({{ asset('main/assets/img/background-2.jpg') }});background-position:center bottom;">
        </div>
        <!--/.bg-holder-->
        <div class="container">
            <div class="row pt-6" data-inertia='{"weight":1.5}'>
                <div class="col-md-8 text-white" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="overflow-hidden">
                        <h1 class="text-white fs-4 fs-md-5 mb-0 lh-1" data-zanim-xs='{"delay":0}'>Contact</h1>
                        <div class="nav" aria-label="breadcrumb" role="navigation" data-zanim-xs='{"delay":0.1}'>
                            <ol class="breadcrumb fs-1 ps-0 fw-bold">
                                <li class="breadcrumb-item"><a class="text-white" href="#!">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->
    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->

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

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="bg-100">
            <div class="container">
                <div class="row align-items-stretch justify-content-center mb-4">
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="card h-100">
                            <div class="card-body px-5">
                                <h5 class="mb-3">Melbourne Office</h5>
                                <p class="mb-0 text-1100"> 121 King Street,<br />Melbourne 1200,<br />Australia</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="card h-100">
                            <div class="card-body px-5">
                                <h5 class="mb-3">Sydney Office</h5>
                                <p class="mb-0 text-1100"> 62 Collins Street West,<br />Sydney 3000, <br />Australia</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="card h-100">
                            <div class="card-body px-5">
                                <h5>Socials</h5><a class="d-inline-block mt-2" href="#!"><span
                                        class="fab fa-linkedin fs-2 me-2 text-primary"></span></a><a
                                    class="d-inline-block mt-2" href="#!"><span
                                        class="fab fa-twitter-square fs-2 mx-2 text-primary"></span></a><a
                                    class="d-inline-block mt-2" href="#!"><span
                                        class="fab fa-facebook-square fs-2 mx-2 text-primary"></span></a><a
                                    class="d-inline-block mt-2" href="#!"><span
                                        class="fab fa-google-plus-square fs-2 ms-2 text-primary"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body p-5 h-100">
                        <div class="googlemap" data-gmap="data-gmap" data-latlng="48.8583701,2.2922873,17"
                            data-scrollwheel="false" data-icon="assets/img/map-marker.png" data-zoom="17"
                            data-theme="Tripitty">
                            <div class="marker-content py-3">
                                <h5>Eiffel Tower</h5>
                                <p class="mb-0">Gustave Eiffel's iconic, wrought-iron 1889 tower,<br /> with steps and
                                    elevators to
                                    observation decks.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body h-100 p-5">
                        <h5 class="mb-3">Write to us</h5>
                        <form>
                            <div class="mb-4"><input class="form-control bg-white" type="text" placeholder="Your Name"
                                    required="required" /></div>
                            <div class="mb-4"><input class="form-control bg-white" type="email" placeholder="Email"
                                    required="required" /></div>
                            <div class="mb-4">
                                <textarea class="form-control bg-white" rows="11" placeholder="Enter your descriptions here..."
                                    required="required"></textarea>
                            </div><button class="btn btn-md-lg btn-primary" type="Submit"> <span
                                    class="color-white fw-600">Send
                                    Now</span></button>
                        </form>
                    </div>
                </div>
            </div><!-- end of .container-->
        </section><!-- <section> close ============================-->
        <!-- ============================================-->

    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




@endsection
