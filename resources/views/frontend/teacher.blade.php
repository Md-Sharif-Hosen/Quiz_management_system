@extends('frontend.layouts.website')
@section('maincontent')
<section id="teachers-part" class="pt-65 pb-120 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title mt-50 pb-25">
                    <h5>Top Tutors</h5>
                    <h2>Featured Teachers</h2>
                </div> <!-- section title -->
                <div class="teachers-2">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="teachers-2-singel mt-30">
                                <div class="thum">
                                    <img src="{{ asset('assets/website') }}/images/teachers/teacher-2/tc-1.jpg" alt="Teacher">
                                </div>
                                <div class="cont">
                                    <a href="{{ asset('assets/website') }}/teachers-singel.html"><h5>Mark anthem</h5></a>
                                    <p>JAVA Expert</p>
                                    <span><i class="fa fa-book"></i>10 Courses</span>
                                </div>
                            </div> <!-- teachers 2 singel -->
                        </div>
                        <div class="col-md-6">
                            <div class="teachers-2-singel mt-30">
                                <div class="thum">
                                    <img src="{{ asset('assets/website') }}/images/teachers/teacher-2/tc-2.jpg" alt="Teacher">
                                </div>
                                <div class="cont">
                                    <a href="{{ asset('assets/website') }}/teachers-singel.html"><h5>Hellen Mark</h5></a>
                                    <p>Laravel Expert</p>
                                    <span><i class="fa fa-book"></i>05 Courses</span>
                                </div>
                            </div> <!-- teachers 2 singel -->
                        </div>
                        <div class="col-md-6">
                            <div class="teachers-2-singel mt-30">
                                <div class="thum">
                                    <img src="{{ asset('assets/website') }}/images/teachers/teacher-2/tc-1.jpg" alt="Teacher">
                                </div>
                                <div class="cont">
                                    <a href="{{ asset('assets/website') }}/teachers-singel.html"><h5>Maria Noor</h5></a>
                                    <p>JAVA Expert</p>
                                    <span><i class="fa fa-book"></i>10 Courses</span>
                                </div>
                            </div> <!-- teachers 2 singel -->
                        </div>
                        <div class="col-md-6">
                            <div class="teachers-2-singel mt-30">
                                <div class="thum">
                                    <img src="{{ asset('assets/website') }}/images/teachers/teacher-2/tc-1.jpg" alt="Teacher">
                                </div>
                                <div class="cont">
                                    <a href="{{ asset('assets/website') }}/teachers-singel.html"><h5>Alan hen</h5></a>
                                    <p>Laravel Expert</p>
                                    <span><i class="fa fa-book"></i>05 Courses</span>
                                </div>
                            </div> <!-- teachers 2 singel -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- teachers 2 -->
            </div>
            <div class="col-lg-6 ">
                <div class="happy-student mt-55">
                    <div class="happy-title">
                        <h3>Happy Students</h3>
                    </div>
                    <div class="student-slied">
                        <div class="singel-student">
                            <img src="{{ asset('assets/website') }}/images/teachers/teacher-2/quote.png" alt="Quote">
                            <p>Aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet</p>
                            <h6>Mark anthem</h6>
                            <span>Bsc, Engineering</span>
                        </div> <!-- singel student -->

                        <div class="singel-student">
                            <img src="{{ asset('assets/website') }}/images/teachers/teacher-2/quote.png" alt="Quote">
                            <p>Aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet</p>
                            <h6>Mark anthem</h6>
                            <span>Bsc, Engineering</span>
                        </div> <!-- singel student -->

                        <div class="singel-student">
                            <img src="{{ asset('assets/website') }}/images/teachers/teacher-2/quote.png" alt="Quote">
                            <p>Aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet</p>
                            <h6>Mark anthem</h6>
                            <span>Bsc, Engineering</span>
                        </div> <!-- singel student -->
                    </div> <!-- student slied -->
                    <div class="student-image">
                        <img src="{{ asset('assets/website') }}/images/teachers/teacher-2/happy.png" alt="Image">
                    </div>
                </div> <!-- happy student -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>
@endsection
