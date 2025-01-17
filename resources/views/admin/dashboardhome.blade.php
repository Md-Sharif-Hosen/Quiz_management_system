@extends('admin.layouts.dashboard')

@section('content')
    <div class="container" style="margin-top: 100px">
        <h1 class="text-center" style="color:#04573b; font-size:80px;">{{ Auth::user()->name }}</h1>
        <h2 class="text-center" style="color:#180202">Welcome to your Dashboard</h2>
    </div>
    @if (session()->get('message'))
        <script>
            Toast.fire({
                icon: "success",
                title: '{{ session()->get('message') }}'
            });
        </script>
    @endif
    <div class="container-fluid">
        <div class="row crypto-sales" style="margin-top: 100px">
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body" style="background-color: #b19d9d; border-radius: 7px; height: 135px;">
                        <div class="d-flex align-items-center">
                            <i class="cc BTC text-warning"></i>
                            <div class="ml-2">
                                <span class="text-dark font-medium"><b>Total Student:{{ $all_student }}</b> </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body" style="background-color: #f46666; border-radius: 7px; height: 135px;">
                        <div class="d-flex align-items-center">
                            <i class="cc ETH text-info"></i>
                            <div class="ml-2">
                                <span class="text-dark font-medium"><b>Quiz Attend:{{ $attend_quiz }}</b></span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            {{-- <div class="col-md-6 col-lg-3"> 
                <div class="card">
                    <div class="card-body" style="background-color: #9ed1a7; border-radius: 7px; height: 135px;">
                        <div class="d-flex align-items-center">
                            <i class="cc ETH text-info"></i>
                            <div class="ml-2">
                                <span class="text-dark font-medium">High Score</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                           <h3 class="mb-0">&#2547; </h3>
                            </div>
                        </div>
                    </div>
             </div> --}}
            
           <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body" style="background-color: #9ed1a7; border-radius: 7px;  height: 135px;">
                            <div class="d-flex align-items-center">
                                <i class="cc ETH text-info"></i>
                                <div class="ml-2">
                                    <span class="text-dark font-medium">Total Quiz:{{ $total_quiz }}</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <h3 class="mb-0"></h3>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>

        </div>
    @endsection
