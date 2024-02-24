@include('admin.layouts.header')
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


<!-- ========== Left Sidebar Start ========== -->
@include('admin.layouts.sidebar')
<!-- Left Sidebar End -->
<div class="main-content">
    <div class="container" style="margin-top: 100px">
        @yield('content')
    </div>

    @include('admin.layouts.footer')
