<style>
    @media only screen and (min-width: 600px) {
        .navbar-expand-lg .navbar-nav .dropdown-menu {
            position: absolute;
            left: 50%;
        }
    }
</style>
<nav class="navbar navbar-expand-lg"> <a class="navbar-brand" href="index-2.html"><img
            src="{{ asset('main/assets/img/logo-dark.png') }}" style="height: 63px !important" alt="logo" /></a><button
        class="navbar-toggler p-0" type="button" data-bs-toggle="collapse" data-bs-target="#primaryNavbarCollapse"
        aria-controls="primaryNavbarCollapse" aria-expanded="false" aria-label="Toggle navigation"><span
            class="hamburger hamburger--emphatic"><span class="hamburger-box"><span
                    class="hamburger-inner"></span></span></span></button>
    <div class="collapse navbar-collapse" id="primaryNavbarCollapse">
        <ul class="navbar-nav py-3 py-lg-0 mt-1 mb-2 my-lg-0 ms-lg-n1">
            @php
            echo $nav;
            @endphp
        </ul>
    </div>
</nav>