@extends('admin.layouts.dashboard')
@section('content')
    <div class="container">
        <div class="col-md-6 ">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Candidate list</h2>
                </div>
                <div>
                    <a href="{{ route('quiz') }}" class="btn btn-info float-end">Back</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-responsive">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Subject</th>
                                <th>Marks</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @php

                                $result = 0;
                                // dd($quiz_result->toArray());
                            @endphp --}}
                            @foreach ($quiz_result as $data)
                                <tr>
                                    <td>

                                        {{-- @dd($data->user_relation->toArray()) --}}
                                        {{ $data->user_name }}

                                    </td>
                                    <td>
                                        {{-- @dd($data->quiz_relation->toArray() ) --}}

                                        {{ $data->quiz_name }}

                                    </td>
                                    <td>
                                        {{-- @dd($data->question_relation->toArray() ) --}}
                                        {{-- @foreach ($data->question_relation as $item)
                                            @php
                                                if ($data->answer == $item->submit_answer) {
                                                    # code...
                                                    $result += 1;
                                                }
                                            @endphp
                                            {{ $item->answer }}
                                            {{ $result }}
                                        @endforeach --}}
                                        <b>{{ $data->marks }}</b> out off <b>{{ $data->questions }}</b>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
