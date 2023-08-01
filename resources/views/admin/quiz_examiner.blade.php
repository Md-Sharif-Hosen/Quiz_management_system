@extends('admin.layouts.dashboard')
@section('content')
    <div class="container">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h2>Examinner name</h2>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-responsive">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Subject</th>
                                <th>Mark</th>
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
                                            {{ $data->name }}

                                    </td>
                                    <td>
                                        {{-- @dd($data->quiz_relation->toArray() ) --}}

                                            {{ $data->quizz_subject }}

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
                                        {{ $data->marks }}

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
