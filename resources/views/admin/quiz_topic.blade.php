@extends('admin.layouts.dashboard')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2 class="text-center">Quizz Topic And Question list</h2>
            </div>
            <div class="card-body">
                @foreach ($quiz_topic as $data )
                <div class="card row col-md-3 d-inline-block" style="height:150px;width:300px; margin:10px">
                   <h4 class="text-center">{{ $data->quizz_subject }}</h4>
                   <h6 class="text-center"><a href="{{ route('quiz_topic_question',$data->id) }}" class="btn btn-outline-info">View Question</a></h6>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
