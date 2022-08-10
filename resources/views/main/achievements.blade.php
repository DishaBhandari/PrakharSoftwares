@extends('main.layouts.master')
@section('title', 'About')
@section('content')
    </div>
    </div>
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
                        <h1 class="text-white fs-4 fs-md-5 mb-0 lh-1" data-zanim-xs='{"delay":0}'>Achievements</h1>
                        <div class="nav" aria-label="breadcrumb" role="navigation" data-zanim-xs='{"delay":0.1}'>
                            <ol class="breadcrumb fs-1 ps-0 fw-bold">
                                <li class="breadcrumb-item"><a class="text-white" href="#!">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Achievements</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
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
                <div class="row g-0">
                    <div class="col-lg-4 py-3 py-lg-0 position-relative" style="min-height:400px; background-position: top">
                        <div class="bg-holder rounded-ts-lg rounded-lg-bs-lg rounded-te-lg rounded-lg-te-0"
                            style="background-image:url({{ asset('main/assets/img/ceo.jpg') }});"></div>
                        <!--/.bg-holder-->
                    </div>
                    <div
                        class="col-lg-8 px-5 py-6 my-lg-0 bg-white rounded-lg-te-lg rounded-be-lg rounded-bs-lg rounded-lg-bs-0 d-flex align-items-center">
                        <div data-zanim-timeline="{}" data-zanim-trigger="scroll">
                            <h5 data-zanim-xs='{"delay":0}'>Message From CEO</h5>
                            <p class="my-4" data-zanim-xs='{"delay":0.1}'>Elixir co-operates with clients in solving
                                the hardest problems they face in their businesses—and the world. We do this by
                                channeling the diversity of our people and their thinking. </p><img
                                data-zanim-xs='{"delay":0.2}' src="{{ asset('main/assets/img/signature.png') }}"
                                alt="CEO" />
                            <h5 class="text-uppercase mt-3 fw-medium mb-1" data-zanim-xs='{"delay":0.3}'>renal scott
                            </h5>
                            <h6 class="text-500 fw-semi-bold" data-zanim-xs='{"delay":0.4}'>UK office</h6>
                        </div>
                    </div>
                </div>
                <div class="row mt-6">
                    <div class="col">
                        <h3 class="text-center fs-2 fs-md-3">Company Overview</h3>
                        <hr class="short"
                            data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}'
                            data-zanim-trigger="scroll" />
                    </div>
                    <div class="col-12">
                        <div class="bg-white px-3 mt-6 px-0 py-5 px-lg-5 rounded-3">
                            <h5>Earning the right</h5>
                            <p class="mt-3">As a first order business consulting firm, we help companies, foundations
                                and individuals make a difference. Our work gets to the heart of the matter. We break
                                silos because it takes more than any one check or policy or letter to tackle big issues
                                like economic security, human rights or climate sustainability. We prescribe a custom
                                formula of advocacy, collaboration, investment, philanthropy, policy and new ways of
                                doing business in order to help you make progress.</p>
                            <blockquote class="blockquote my-5 ms-lg-6" style="max-width: 700px;">
                                <h5 class="fw-medium ms-3 mb-0">But how do we do it? We like to call it earning the
                                    right, walking the talk and playing the game &hellip;</h5>
                            </blockquote>
                            <p class="column-lg-2 dropcap">Elixir serves to help people with creative ideas succeed. Our
                                platform empowers millions of people — from individuals and local artists to
                                entrepreneurs shaping the world’s most iconic businesses — to share their stories and
                                create an impactful, stylish, and easy-to-manage online presence. The Cambridge office
                                is the home of the Risk management practice. We work to assure the safe performance of
                                complex critical systems; develop safety leadership and culture; manage safety and risk
                                in high-hazard industries; understand complex project risks, measure and report risk
                                performance. We work across a wide range of industries and public sector organizations
                                that include upstream and downstream oil and gas; rail and road transportation;
                                construction; and gas utilities and distribution. We work worldwide in Europe, Middle
                                East and Asia, Africa and South America based out of our offices in Cambridge, UK and
                                Milan, Italy.</p>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->
        </section><!-- <section> close ============================-->
        <!-- ============================================-->



        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section>
            <div class="bg-holder overlay overlay-elixir"
                style="background-image:url({{ asset('main/assets/img/background-15.jpg') }});"></div>
            <!--/.bg-holder-->
            <div class="container">
                <div class="d-flex"><span class="me-3"> <img src="{{ asset('main/assets/img/checkmark.png') }}"
                            alt="checkmark" style="width: 55px" /></span>
                    <div class="flex-1">
                        <h2 class="text-warning fs-3 fs-lg-4">Take the right step,<br /><span class="text-white">do the
                                big things.</span></h2>
                        <div class="row mt-4 pe-lg-10">
                            <div class="overflow-hidden col-md-3" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                <div class="fs-3 fs-lg-4 mb-0 fw-bold text-white mt-lg-5 mt-3 lh-xs"
                                    data-zanim-xs='{"delay":0.1}' data-countup='{"endValue":52}'>52</div>
                                <h6 class="fs-0 text-white" data-zanim-xs='{"delay":0.2}'>Cases Solved</h6>
                            </div>
                            <div class="overflow-hidden col col-lg-3" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                <div class="fs-3 fs-lg-4 mb-0 fw-bold text-white mt-lg-5 mt-3 lh-xs"
                                    data-zanim-xs='{"delay":0.1}' data-countup='{"endValue":164}'>164</div>
                                <h6 class="fs-0 text-white" data-zanim-xs='{"delay":0.2}'>Trained Experts</h6>
                            </div>
                            <div class="w-100 d-flex d-lg-none"></div>
                            <div class="overflow-hidden col-md-3" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                <div class="fs-3 fs-lg-4 mb-0 fw-bold text-white mt-lg-5 mt-3 lh-xs"
                                    data-zanim-xs='{"delay":0.1}' data-countup='{"endValue":38}'>38</div>
                                <h6 class="fs-0 text-white" data-zanim-xs='{"delay":0.2}'>Branches</h6>
                            </div>
                            <div class="overflow-hidden col col-lg-3" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                <div class="fs-3 fs-lg-4 mb-0 fw-bold text-white mt-lg-5 mt-3 lh-xs"
                                    data-zanim-xs='{"delay":0.1}' data-countup='{"endValue":100}'>100</div>
                                <h6 class="fs-0 text-white" data-zanim-xs='{"delay":0.2}'>Satisfied Clients</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->
        </section><!-- <section> close ============================-->
        <!-- ============================================-->



        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section>
            <div class="container">
                <div class="text-center mb-5">
                    <h3 class="fs-2 fs-md-3">Global leadership</h3>
                    <hr class="short"
                        data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}'
                        data-zanim-trigger="scroll" />
                </div>
                <div class="row">
                    <div class="col-sm-6 col-lg-4    ">
                        <div class="card h-100"><img class="card-img-top"
                                src="{{ asset('main/assets/img/portrait-3.jpg') }}" alt="Reenal Scott" />
                            <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                <div class="overflow-hidden">
                                    <h5 data-zanim-xs='{"delay":0}'>Reenal Scott</h5>
                                </div>
                                <div class="overflow-hidden">
                                    <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'>Advertising
                                        Consultant</h6>
                                </div>
                                <div class="overflow-hidden">
                                    <p class="py-3 mb-0" data-zanim-xs='{"delay":0.2}'>Reenal Scott is the Founder and
                                        CEO of Elixir, which he started from his dorm room in 2013 with 3 people only.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mt-4 mt-sm-0  ">
                        <div class="card h-100"><img class="card-img-top"
                                src="{{ asset('main/assets/img/portrait-4.jpg') }}" alt="Lily Anderson" />
                            <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                <div class="overflow-hidden">
                                    <h5 data-zanim-xs='{"delay":0}'>Lily Anderson</h5>
                                </div>
                                <div class="overflow-hidden">
                                    <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'>Activation Consultant
                                    </h6>
                                </div>
                                <div class="overflow-hidden">
                                    <p class="py-3 mb-0" data-zanim-xs='{"delay":0.2}'>Lily leads Elixir UK and
                                        oversees the company’s Customer Operations teams supporting millions ofr users.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mt-4  mt-lg-0 ">
                        <div class="card h-100"><img class="card-img-top"
                                src="{{ asset('main/assets/img/portrait-5.jpg') }}" alt="Thomas Anderson" />
                            <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                <div class="overflow-hidden">
                                    <h5 data-zanim-xs='{"delay":0}'>Thomas Anderson</h5>
                                </div>
                                <div class="overflow-hidden">
                                    <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'>Change Management
                                        Consultant</h6>
                                </div>
                                <div class="overflow-hidden">
                                    <p class="py-3 mb-0" data-zanim-xs='{"delay":0.2}'>As the VP of People, Thomas’s
                                        focus lies in the development and optimization of talent retention.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mt-4   ">
                        <div class="card h-100"><img class="card-img-top"
                                src="{{ asset('main/assets/img/portrait-6.jpg') }}" alt="Legartha Mantana" />
                            <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                <div class="overflow-hidden">
                                    <h5 data-zanim-xs='{"delay":0}'>Legartha Mantana</h5>
                                </div>
                                <div class="overflow-hidden">
                                    <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'>Brand Management
                                        Consultant</h6>
                                </div>
                                <div class="overflow-hidden">
                                    <p class="py-3 mb-0" data-zanim-xs='{"delay":0.2}'>As General Counsel of Elixir,
                                        Tony oversees global legal activities and policies across all aspects.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mt-4   ">
                        <div class="card h-100"><img class="card-img-top"
                                src="{{ asset('main/assets/img/portrait-7.jpg') }}" alt="John Snow" />
                            <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                <div class="overflow-hidden">
                                    <h5 data-zanim-xs='{"delay":0}'>John Snow</h5>
                                </div>
                                <div class="overflow-hidden">
                                    <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'>Business Analyst</h6>
                                </div>
                                <div class="overflow-hidden">
                                    <p class="py-3 mb-0" data-zanim-xs='{"delay":0.2}'>John has overseen the meteoric
                                        growth while protecting scaling its uniquely creative and culture.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mt-4   ">
                        <div class="card h-100"><img class="card-img-top"
                                src="{{ asset('main/assets/img/portrait-1.jpg') }}" alt="Ragner Lothbrok" />
                            <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                <div class="overflow-hidden">
                                    <h5 data-zanim-xs='{"delay":0}'>Ragner Lothbrok</h5>
                                </div>
                                <div class="overflow-hidden">
                                    <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'>Business Consultant
                                    </h6>
                                </div>
                                <div class="overflow-hidden">
                                    <p class="py-3 mb-0" data-zanim-xs='{"delay":0.2}'>Ragner, SVP of Engineering,
                                        oversees Elixir’s vast engineering organization which drives the core
                                        programming.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->
        </section><!-- <section> close ============================-->
        <!-- ============================================-->



        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="bg-primary py-6 text-center text-md-start">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md">
                        <h4 class="text-white mb-0">If you have any query related investment... <br class="d-md-none" />we
                            are available 24/7</h4>
                    </div>
                    <div class="col-md-auto mt-md-0 mt-4"><a class="btn btn-light rounded-pill"
                            href="../contact.html">Contact Us</a></div>
                </div>
            </div><!-- end of .container-->
        </section><!-- <section> close ============================-->
        <!-- ============================================-->

    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->



@endsection
