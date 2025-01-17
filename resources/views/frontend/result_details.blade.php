@extends('frontend.layouts.website')
@section('maincontent')
    <section id="slider-part-3" class=""
        style="background-image: url({{ asset('assets/website') }}/images/slider/s-3.jpg)">
        <section style=" background-color:#d2b895c2;border-radius: 41px">
            <div class="col-md-6 col-lg-12">
                <div class="container">
                    <div>
                        <h2 class="text-center">Subject:{{ $quiz->quizz_subject }}</h2>
                    </div>

                    <a class="btn btn-info justify-content-end" href="{{ route('result', $quiz->id) }}">
                        <h6>Back</h6>
                    </a>
                </div>
                <section style="    padding-left: 220px;
                padding-top: 55px;}">
                    @foreach ($result_details as $key => $data)
                        <div style="padding: 10px">
                            <ul>
                                <h4>{{ $key + 1 }}.{{ $data->question_title }}</h4>
                            </ul>
                            <ul>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox"
                                            {{ in_array($data->optionA, explode(',', $data->submit_answer)) ? 'checked disabled' : '' }}
                                            value="{{ $data->optionA }}" id="optionA">
                                        <label class="form-check-label"
                                            style="{{ in_array($data->optionA, explode(',', $data->submit_answer)) ? 'color: #2fffdc; font-weight: bold;' : '' }}"
                                            for="optionA">
                                            {{ $data->optionA }}
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="flexRadioDefault2"
                                            {{ in_array($data->optionB, explode(',', $data->submit_answer)) ? 'checked disabled' : '' }}
                                            value="{{ $data->optionB }}" id="optionB">
                                        <label class="form-check-label"
                                            style="{{ in_array($data->optionB, explode(',', $data->submit_answer)) ? 'color: #2fffdc; font-weight: bold;' : '' }}"
                                            for="optionB">
                                            {{ $data->optionB }}
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="flexRadioDefault2"
                                            {{ in_array($data->optionC, explode(',', $data->submit_answer)) ? 'checked disabled' : '' }}
                                            value="{{ $data->optionC }}" id="optionC">
                                        <label class="form-check-label"
                                            style="{{ in_array($data->optionC, explode(',', $data->submit_answer)) ? 'color: #2fffdc; font-weight: bold;' : '' }}"
                                            for="optionC">
                                            {{ $data->optionC }}
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="flexRadioDefault2"
                                            {{ in_array($data->optionD, explode(',', $data->submit_answer)) ? 'checked disabled' : '' }}
                                            value="{{ $data->optionD }}" id="optionD">
                                        <label class="form-check-label"
                                            style="{{ in_array($data->optionD, explode(',', $data->submit_answer)) ? 'color: #2fffdc; font-weight: bold;' : '' }}"
                                            for="optionD">
                                            {{ $data->optionD }}
                                        </label>
                                    </div>


                                    @if ($data->submit_answer == $data->answer)
                                        <h5 class="alrt" style="color:rgb(5, 165, 32)">Correct</h5>
                                    @else
                                        <div class="">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                <h5 style="color: #eb0606c2"> <b>Wrong</b></h5>
                                                <h5 style="color: #06eb12c2"> <b> Right Answer: {{ $data->answer }}</b>
                                                </h5>
                                            </label>
                                        </div>
                                    @endif
                                </li>
                            </ul>
                        </div>
                    @endforeach

                    {{-- {{ $result_details->links() }} --}}
                </section>
            </div>
            </div>
        </section>
    </section>
@endsection
