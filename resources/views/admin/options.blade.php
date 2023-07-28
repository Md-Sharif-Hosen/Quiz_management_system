@extends('admin.layouts.dashboard')
@section('content')
    <div class="container">
        <div class="col-sm-3 col-md-6 col-lg-12">
            <div class="card ">
                <div class="card-header justify-content-center">
                    <h2 class="text-center" style="color: rgb(28 64 0)">Quizz list</h2>
                </div>
                <div class="d-flex justify-content-between">

                    <div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                            data-bs-whatever="@mdo">Create Option</button>
                    </div>
                    <div>
                        <form class="d-none d-lg-block app-search" style="border: 2px">
                            <div class="position-relative">
                                <input type="search"
                                    style="border: 1px solid rgb(141, 127, 127);
                                    right: 80px;
                                    position: relative;
                            padding-left: 40px;
                            padding-right: 20px;
                            font-size
                            background-color:#58526885; color: #dce5e4;"
                                    class="form-control bx bx-search-alt" placeholder="Search...">
                                <span class="bx bx-search-alt"
                                    style="    position: relative;
                            left: -60px;
                            top: -34px;"></span>
                               
                            </div>
                        </form>
                    </div>
                </div>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Options Create</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="quizz_subject" class="col-form-label">Quiz Subject</label>
                                        <select class="form-control" name="quiz_id" id="">
                                            <option value="">select</option>
                                            @foreach ($quizz as $item)
                                                <option value="{{ $item->id }}">{{ $item->quizz_subject }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="question_subject" class="col-form-label">Question Title</label>
                                        <select class="form-control" name="question_id" id="question_subject">
                                            <option value="">select</option>
                                            {{-- @foreach ($quiz as $data)
                                                <option value="{{ $data->id }}">{{ $data->quizz_subject }}</option>
                                            @endforeach --}}
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="options" class="col-form-label">Option Title</label>
                                        <input type="text" class="form-control" name="option_title" id="options">
                                    </div>

                                    <div class="modal-footer d-flex justify-content-between">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card-body">
                    <div class="table table-striped">
                        <table class="table col md-6 sm-3 lg-12">
                            <thead>
                                <tr>
                                    <th>SL N0</th>
                                    <th>Quizz Subject</th>
                                    <th>Question Title</th>
                                    <th>Option </th>
                                    <th>Answer</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
