@extends('forntend.layouts.website')


@section('maincontent')
    <section id="slider-part-3" class="bg_cover" style="background-color:#000000d9">
        <section id="course-part" class="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-title pb-45">
                            <h2 style="color: #afd1ec;" class="float-right">Quiz List</h2>
                            <br>
                        </div> <!-- section title-->
                    </div> <!-- row -->

                </div>

                @foreach ($quizes as $data)
                    {{-- @dd($data) --}}
                    <div class="row col-md-4 d-inline-block mr-10">

                        <div class="singel-course-2" style="">
                            <div class="thum">
                                <div class="image">
                                    <img src="/{{ $data->cover_image }}"
                                        style="width: 351px;
                                height: 265px;" alt="Course">
                                    <div class="sub" style="">
                                        <h2 class="title" style="color: #fff1e6;">{{ $data->quizz_subject }}</h2>
                                        <div class="price">
                                            <form class="btn" action="{{ route('quiz_userid') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="quiz_id" value="{{ $data->id }}">
                                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                                <button type="submit" onclick="return confirm('Do you want Start Quizz')"
                                                    class="btn btn-outline-info">Start Quiz</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-teacher">

                                    <h6
                                        style="color: #afd1ec;
                            position: absolute;
                            bottom: 17px;
                            right: 5px;
                            z-index: 5;">
                                        Class: <br>
                                        @if ($data->class_name_relation)
                                            {{ $data->class_name_relation->class_name }}
                                        @endif
                                    </h6>
                                    <div class="teacher" style="">
                                        <h6 style=" color:#afd1ec">Teacher: <br> {{ $data->teacher }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach

            </div> <!-- container -->
        </section>
    </section>
@endsection
