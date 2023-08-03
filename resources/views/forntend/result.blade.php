@extends('forntend.layouts.website')
@section('maincontent')
    <div class="container ">
        <div class="card col-md-12" style=" background-color:#e1d3bfc2;border-radius: 41px">
            <div class="card-header">
                <h2 class="text-center" >Helllo! <span style="color: #470000c2"> {{ Auth::user()->name }}</span> </h2>
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
@endsection
