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
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($quiz_result as $data)
                                <tr>
                                    <td>
                                        @foreach ($data->user_relation as $item)
                                            {{ $item->name }}
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($data->quiz_relation as $item)
                                            {{ $item->quizz_subject }}
                                    </td>
                            @endforeach
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
