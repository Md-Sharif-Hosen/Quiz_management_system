@extends('forntend.layouts.website')
@section('maincontent')
    <section id="course-part" class="pt-115 pb-115">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-45">
                        <h2 style="color: #afd1ec;">Exam List</h2>
                    </div> <!-- section title-->
                </div>
            </div> <!-- row -->

            @foreach ($exam as $data)
                <div class="row col-md-4 d-inline-block">

                        <div class="singel-course-2" style="">
                            <div class="thum">
                                <div class="image">
                                    <a href=""><img src="/{{ $data->cover_image }}"
                                            style="width: 351px;
                                            height: 265px;"
                                            alt="Course"></a>
                                </div>
                                <div class="price">
                                    <a href=""> <span>Quizz</span></a>
                                </div>
                                <div class="course-teacher">
                                    <div class="sub"
                                        style="    position: absolute;
                                        bottom: 163px;
                                        right: 89px;
                                        z-index: 5;">
                                        <a href="">
                                            <h3 style="color: #251000">{{ $data->quizz_subject }}</h3>
                                        </a>
                                    </div>
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
@endsection
