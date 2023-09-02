@extends('admin.layouts.dashboard')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2 class="text-center">Quizz Topic And Question list</h2>
            </div>
            <div class="card-body">
                @foreach ($quiz_topic as $data )
                <div class="card row col-md-3 d-inline-block" style="height:150px;width:300px; margin:10px;background-color: #eac5c5;  ">
                   <h4 class="text-center">{{ $data->quizz_subject }}</h4>
                   <h5 class="text-center">total Examiner: @if ($data->quiz_submit_user)
                    {{ $data->quiz_submit_user->where("quiz_id",$data->id)->pluck('user_id')->unique()->count('user_id')}}<a href="{{ route('quiz_examiner',$data->id) }}" class="btn btn-outline-info">view</a></h5><a href="{{ route('quiz_examiner',$data->id) }}" class="btn btn-outline-info">view</a></h4>
                   @endif
                   <h5 class="text-center">Question:<a href="{{ route('quiz_topic_question',$data->id) }}" class="btn btn-outline-info">View</a></h5>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
