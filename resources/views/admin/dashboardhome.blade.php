@extends("admin.layouts.dashboard")

@section('content')
<div class="container" style="margin-top: 100px">
    <h1 class="text-center" style="color:#04573b; font-size:80px;">{{ Auth::user()->name }}</h1>
    <h2 class="text-center" style="color:#180202">Welcome to your Dashboard</h2>
</div>
@endsection
