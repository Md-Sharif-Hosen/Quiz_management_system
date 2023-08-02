@extends('forntend.layouts.website')
@section('maincontent')
<section style=" background-color:#d2b895c2;border-radius: 41px">
    <div class="col-md-6 col-lg-12">
        <div class="container">
            <div>
                <h2 class="text-center">Subject:</h2>
            </div>
                <section style="    padding-left: 220px;
                padding-top: 55px;}">
                        <input type="hidden" name="ques_id[]" value="">
                        <div style="padding: 10px">
                            <ul>
                                <h4></h4>
                            </ul>
                            <ul>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox"
                                            value="" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            {{-- {{ $data->optionA }} --}}
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox"
                                            value="" id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            {{-- {{ $data->optionB }} --}}
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox"
                                            value="" id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            {{-- {{ $data->optionC }} --}}
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox"
                                            value="" id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            {{-- {{ $data->optionD }} --}}
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                </section>
        </div>
    </div>
</section>

@endsection
