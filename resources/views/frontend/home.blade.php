@extends('frontend.layouts.website')

@section('content')
    {{-- <section id="slider-part-3" class="bg_cover"  style="background-image: url({{ asset('assets/website') }}/images/slider/s-3.jpg)"> --}}

    <link rel="stylesheet" href="{{ asset('assets/website') }}/css/profile.css">
    <section class="bg-light bg_cover" style="background-image: url({{ asset('assets/website') }}/images/background.webp)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-4 mb-sm-5">
                    <div class="card card-style1 border-0">
                        @if (session()->get('message'))
                            <script>
                                Toast.fire({
                                    icon: "success",
                                    title: '{{ session()->get('message') }}'
                                })
                            </script>
                        @endif
                        <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                            <div class="row align-items-center">
                                <div class="col-lg-6 mb-4 mb-lg-0">
                                    <img src="/{{ Auth::user()->image }}" alt="...">
                                </div>
                                <div class="col-lg-6 px-xl-10">
                                    <div class="bg-secondary d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded">
                                        <h3 class="h2 text-white mb-0">{{ Auth::user()->name }}</h3>
                                        {{-- @dd(Auth::user()->load("user_role")); --}}


                                        <span class="text-primary">{{ Auth::user()->load('user_role')->user_role->title }}
                                        </span>
                                    </div>
                                    <ul class=" mb-1-9 "
                                        style="    font-size: 20px;
                                    margin-left: 2px;
                                    margin-top: 5px;
                                    color: #86b2b6db;">
                                        <li class="mb-2 mb-xl-3 display-28"><span
                                                class="display-26 text-secondary me-2 font-weight-600">Name</span>
                                            {{ Auth::user()->name }}</li>
                                        <li class="mb-2 mb-xl-3 display-28"><span
                                                class="display-26 text-secondary me-2 font-weight-600">Email:</span>
                                            {{ Auth::user()->email }}</li>
                                        <li class="mb-2 mb-xl-3 display-28"><span
                                                class="display-26 text-secondary me-2 font-weight-600">Phone Number:</span>
                                            {{ Auth::user()->phone_number }}</li>

                                    </ul>

                                    <div class="d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 "
                                        style="background-color: #236d6c;border-radius:144px">
                                        <h3 class="h2"><a href="{{ route('examlist') }}" class="quiz">Quizz
                                                <br>Test</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-4  card card-style1">
                    <div>
                        <span class="section-title text-primary mb-3 mb-sm-4">Your Quiz Test Result</span>
                    </div>
                    <table class="table  table-striped table-bordered">
                        <thead
                            style="
                     font-size: 16px;
                     font-weight: 400;
                     line-height: 28px;
                     color: #ffffff;
                     margin: 0px;">

                            <tr>
                                <th>Subject</th>
                                <th>Marks</th>
                            </tr>
                        </thead>
                        <tbody
                            style="
                        font-size: 16px;
                        font-weight: 400;
                        line-height: 28px;
                        color: #ffffff;
                        margin: 0px;">
                            @foreach ($quiz_result as $data)
                                <tr>
                                    <td>{{ $data->quizz_subject }}</td>
                                    <td>{{ $data->marks }} Out off {{ $data->questions }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-12 mb-4 mb-sm-5 card card-style1">
                    <div>
                        <span class="section-title text-primary mb-3 mb-sm-4">About Me</span>
                        <p class="P"
                            style="
                                font-size: 16px;
                                font-weight: 400;
                                line-height: 28px;
                                color: #ffffff;
                                margin: 0px;">
                            Edith is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                            type and scrambled it to make a type specimen book.
                            It is a long established fact that a reader will be distracted by the readable content of a page
                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                            distribution of letters, as opposed.
                        </p>

                    </div>
                </div>
                {{-- <div class="col-lg-12
                            card card-style1">
                    <div class="row">
                        <div class="col-lg-12 mb-4 mb-sm-5">
                            <div class="mb-4 mb-sm-5">
                                <span class="section-title text-primary mb-3 mb-sm-4">Skill</span>
                                <div class="progress-text">
                                    <div class="row">
                                        <div class="col-6">Driving range</div>
                                        <div class="col-6 text-end">80%</div>
                                    </div>
                                </div>
                                <div class="custom-progress progress progress-medium mb-3" style="height: 4px;">
                                    <div class="animated custom-bar progress-bar slideInLeft bg-colors" style="width:80%"
                                        aria-valuemax="100" aria-valuemin="0" aria-valuenow="10" role="progressbar"></div>
                                </div>
                                <div class="progress-text">
                                    <div class="row">
                                        <div class="col-6">Short Game</div>
                                        <div class="col-6 text-end">90%</div>
                                    </div>
                                </div>
                                <div class="custom-progress progress progress-medium mb-3" style="height: 4px;">
                                    <div class="animated custom-bar progress-bar slideInLeft bg-colors" style="width:90%"
                                        aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" role="progressbar"></div>
                                </div>
                                <div class="progress-text">
                                    <div class="row">
                                        <div class="col-6">Side Bets</div>
                                        <div class="col-6 text-end">50%</div>
                                    </div>
                                </div>
                                <div class="custom-progress progress progress-medium mb-3" style="height: 4px;">
                                    <div class="animated custom-bar progress-bar slideInLeft bg-colors" style="width:50%"
                                        aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" role="progressbar"></div>
                                </div>
                                <div class="progress-text">
                                    <div class="row">
                                        <div class="col-6">Putting</div>
                                        <div class="col-6 text-end">60%</div>
                                    </div>
                                </div>
                                <div class="custom-progress progress progress-medium" style="height: 4px;">
                                    <div class="animated custom-bar progress-bar slideInLeft bg-colors" style="width:60%"
                                        aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" role="progressbar"></div>
                                </div>
                            </div>
                            <div>
                                <span class="section-title text-primary mb-3 mb-sm-4">Education</span>
                                <p
                                    style="
                                    font-size: 16px;
                                    font-weight: 400;
                                    line-height: 28px;
                                    color: #ffffff;
                                    margin: 0px;">
                                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                                    default model text, and a search for 'lorem ipsum' will uncover many web sites still
                                    There are many variations of passages of Lorem Ipsum available, but
                                    the majority have suffered alteration in some form, by injected humour.class="mb-1-9"
                                    in their infancy.</p>

                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
@endsection
