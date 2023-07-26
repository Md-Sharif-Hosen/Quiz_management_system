@extends('forntend.layouts.website')
@section('maincontent')
    <section>
        <div class="col-md-6 col-lg-12">
            <div class="container" style="background-color: rgb(144, 149, 163)">
                <div>
                    <h2 class="text-center">{{ $quiz->quizz_subject }}</h2>
                </div>
                <div class="col-md-4">
                    <ul><h3>hello world</h3></ul>
                    <ul><li>checked</li></ul>
                    <ul><li>checked</li></ul>
                    <ul><li>checked</li></ul>
                    <ul><li>checked</li></ul>
                </div>
            </div>
        </div>
    </section>
@endsection
