@extends('forntend.layouts.website')
@section('maincontent')
    <div class="container ">
            <div class="card col-md-6">
                <div class="card-header">
                    <h2 class="text-center">Mr.{{ Auth::user()->name }} <br> Your result is here.</h2>
                </div>
                <div class="card-body text-center">
                    <h6>Total Quizz: {{ $question }}</h6>
                    <br>
                    <h6>Correct Answer: {{ $result }}</h6>
                    <br>
                    <h6>Incorrect Answer: {{ $incorrect }}</h6>
                </div>
            </div>
    </div>
@endsection
