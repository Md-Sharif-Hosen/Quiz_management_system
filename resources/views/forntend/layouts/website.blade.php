@include('forntend.layouts.header')
<!--====== HEADER PART ENDS ======-->

@yield('content')

{{-- <section id="slider-part-3" class="bg_cover"
    style="background-image: url({{ asset('assets/website') }}/images/slider/s-3.jpg)">
    <div class="container"> --}}
        @yield('maincontent')

        {{-- <div class="row justify-content-center">
            <div class="col-lg-10">

            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section> --}}

<!--====== FOOTER PART START ======-->
@include('forntend.layouts.footer')
