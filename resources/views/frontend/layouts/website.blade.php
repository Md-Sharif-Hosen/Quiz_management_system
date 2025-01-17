@include('frontend.layouts.header')
<!--====== HEADER PART ENDS ======-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        }
    })
</script>


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
@include('frontend.layouts.footer')
