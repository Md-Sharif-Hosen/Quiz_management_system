@extends('forntend.layouts.website')
@section('maincontent')
    <section style=" background-color:#d2b895c2;border-radius: 41px">
        <div class="col-md-6 col-lg-12">
            <div class="container">
                <div>
                    <h2 class="text-center">Subject:{{ $quiz->quizz_subject }}</h2>
                </div>

                <form action="{{ route('exam.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="quiz_id" value="{{ $quiz->id }}">
                    <section style="    padding-left: 220px;
                    padding-top: 55px;}">

                        @foreach ($question as $key => $data)
                        {{-- <input type="text" name="quiz_id" value="{{ $data->quiz_id }}"> --}}
                            <input type="hidden" name="ques_id[]" value="{{ $data->id }}">
                            {{-- <input type="hidden" name="answer{{ $key + 1 }}" value="0"> --}}
                            <div style="padding: 10px">
                                <ul>
                                    <h4>{{ $key + 1 }}. {{ $data->question_title }}</h4>
                                    {{-- <select name="quiz_id" id="">
                                    <option value="{{ $data->quiz_id }}">{{ $data->quiz_id }}</option>
                                </select> --}}
                                </ul>
                                <ul>
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="submit_answer[]"
                                                value=" {{ $data->optionA }}" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                {{ $data->optionA }}
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="submit_answer[]"
                                                value=" {{ $data->optionB }}" id="flexRadioDefault2">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                {{ $data->optionB }}
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="submit_answer[]"
                                                value=" {{ $data->optionC }}" id="flexRadioDefault2">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                {{ $data->optionC }}
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="submit_answer[]"
                                                value=" {{ $data->optionD }}" id="flexRadioDefault2">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                {{ $data->optionD }}
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        @endforeach
                        <ul style="margin-top:20px"> <button type="submit" class="btn btn-primary">Submit</button></ul>
                    </section>
                </form>
            </div>
        </div>
    </section>
@endsection
