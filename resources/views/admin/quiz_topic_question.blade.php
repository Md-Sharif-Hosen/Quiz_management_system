@extends('admin.layouts.dashboard')
@section('content')
    <section>
        <div class="container">
            <div class="col-md-6 col-lg-12">
                <div>
                    <h2 class="text-center">Subject:{{ $quiz->quizz_subject }}</h2>
                </div>
                <div >
                    <a href="{{ route('quiz') }}" class="btn btn-info">Back</a>
                </div>
            </div>
            <div class="justify-content-center p-5" style="margin-left: 80px">
                @foreach ($question as $key => $data)
                    <input type="hidden" name="ques_id[]" value="{{ $data->id }}">
                    <div style="padding: 10px">
                        <ul>
                            <h4>{{ $key + 1 }}. {{ $data->question_title }}</h4>
                        </ul>
                        <ul>
                            <ol>
                                <div class="form-check">

                                    <label class="form-check-label" for="flexRadioDefault1">
                                        1. {{ $data->optionA }}
                                    </label>
                                </div>
                                <div class="form-check">

                                    <label class="form-check-label" for="flexRadioDefault2">
                                        2. {{ $data->optionB }}
                                    </label>
                                </div>
                                <div class="form-check">

                                    <label class="form-check-label" for="flexRadioDefault2">
                                        3. {{ $data->optionC }}
                                    </label>
                                </div>
                                <div class="form-check">

                                    <label class="form-check-label" for="flexRadioDefault2">
                                        4. {{ $data->optionD }}
                                    </label>
                                </div>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Answer: {{ $data->answer }}
                                </label>
                            </ol>
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
