<form action="{{ route('exam.store') }}" method="post">
    @csrf
    <section>
                <ul>
                    <li>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox"
                                name="submit_answer[{{ $key }}][]"
                                value=" {{ $data->optionA }}" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                {{ $data->optionA }}
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox"
                                name="submit_answer[{{ $key }}][]"
                                value=" {{ $data->optionB }}" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                {{ $data->optionB }}
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox"
                                name="submit_answer[{{ $key }}][]"
                                value=" {{ $data->optionC }}" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                {{ $data->optionC }}
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox"
                                name="submit_answer[{{ $key }}][]"
                                value=" {{ $data->optionD }}" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                {{ $data->optionD }}
                            </label>
                        </div>
                    </li>
                </ul>
            
        @endforeach
        <ul style="margin-top:20px"> <button type="submit" class="btn btn-primary">Submit</button>
        </ul>
    </section>
</form>