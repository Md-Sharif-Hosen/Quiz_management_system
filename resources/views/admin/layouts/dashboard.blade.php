@include('admin.layouts.header')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 500,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
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
