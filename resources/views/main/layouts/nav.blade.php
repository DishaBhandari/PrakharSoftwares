<style>
    @media only screen and (min-width: 600px) {
        .navbar-expand-lg .navbar-nav .dropdown-menu {
            position: absolute;
            left: 100%;
        }

        .dropdown0>.dropdown-menu {
            position: absolute;
            left: 50% !important;
        }
    }
</style>
<div class="bg-primary py-3 d-none d-sm-block text-white fw-bold">
    <div class="container">
        <div class="row align-items-center gx-4">
            <div class="col-auto d-none d-lg-block fs--1"><span class="fas fa-map-marker-alt text-warning me-2"
                    data-fa-transform="grow-3"></span>1010 Avenue, New York, NY 10018 US. </div>
            <div class="col-auto ms-md-auto order-md-2 d-none d-sm-flex fs--1 align-items-center"><span
                    class="fas fa-clock text-warning me-2" data-fa-transform="grow-3"></span>Mon-Sat, 8.00-18.00.
                Sunday CLOSED</div>
            <div class="col-auto"><span class="fas fa-phone-alt text-warning" data-fa-transform="shrink-3"></span><a
                    class="ms-2 fs--1 d-inline text-white fw-bold" href="tel:2123865575">212 386 5575, 212 386
                    5576</a></div>
        </div>
    </div>
</div>
<div class="sticky-top navbar-elixir" style="margin-bottom: 0px;">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="index-2.html"><img src="{{ asset('main/assets/img/logo-dark.png') }}"
                        style="height: 63px !important" alt="logo" /></a><button class="navbar-toggler p-0"
                    type="button" data-bs-toggle="collapse" data-bs-target="#primaryNavbarCollapse"
                    aria-controls="primaryNavbarCollapse" aria-expanded="false" aria-label="Toggle navigation"><span
                        class="hamburger hamburger--emphatic"><span class="hamburger-box"><span
                                class="hamburger-inner"></span></span></span></button>
                <div class="collapse navbar-collapse " id="primaryNavbarCollapse">
                    <ul class="navbar-nav py-3 py-lg-0 mt-1 mb-2 my-lg-0 ms-lg-n1">
                        @php
                            echo $nav;
                        @endphp
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
