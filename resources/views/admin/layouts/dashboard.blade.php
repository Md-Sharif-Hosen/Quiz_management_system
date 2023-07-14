@include('admin.layouts.header')

        <!-- ========== Left Sidebar Start ========== -->
@include('admin.layouts.sidebar')
        <!-- Left Sidebar End -->
        <div class="main-content">
            <div class="container" style="margin-top: 100px">

                @yield('content')
            </div>

@include('admin.layouts.footer')
