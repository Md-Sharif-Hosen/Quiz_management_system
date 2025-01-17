@extends('forntend.layouts.website')
@section('maincontent')
<section id="slider-part-3" class="bg_cover"
    style="background-image: url({{ asset('assets/website') }}/images/slider/s-3.jpg)">
    <div class="container ">
        <div class="card col-md-12" style=" background-color:#e1d3bfc2;border-radius: 41px">
            <div class="card-header">
                <h2 class="text-center" >Helllo! <span style="color: #470000c2"> {{ Auth::user()->name }}</span> </h2>
                <div>
                 <a href="{{ route('home') }}" class="btn btn-info float-lg-right"><b>Back to Home</b></a>
                 </div>
            </div>
            <div class="card-body text-center">
                <h2 class="text-center">Your
                        {{ $quiz_subject->quizz_subject }}
                         quiz result is here.</h2>
                        <br>
                        <h5>Total Question: {{ $question }}</h5>
                        <br>
                        <h5>Correct Answer: {{ $result }}</h5>
                        <br>
                        <h5>Incorrect Answer: {{ $incorrect }}</h5>
                        <br>
                        <h5>Passing Rate: {{$percentage}}%</h5>
                        <br>
                        <h5>
                            <a class="btn btn-info" href="{{ route('result_details',$quiz_subject->id) }}">view details</a>

                        </h5>
                    </div>
        </div>
    </div>
</section>
@endsection
