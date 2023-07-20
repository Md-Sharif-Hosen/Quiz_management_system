@extends('admin.layouts.dashboard')
@section('content')
    @if (session()->get('delete'))
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: '{{ session()->get('delete') }}',
                showConfirmButton: false,
                timer: 1000
            })
        </script>
    @endif
    <div class="container">
        <div class="col md-6 sm-3 lg-12">
            <div class="card ">
                <div class="card-header justify-content-center">
                    <h2 class="text-center" style="color: rgb(28 64 0)">Question list</h2>
                </div>
                <div class="d-flex justify-content-between">

                    <div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                            data-bs-whatever="@mdo">Questions Create</button>
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
                                {{-- <button type="submit" style="position:relative; left: 180px;bottom: 40px;"></button> --}}
                            </div>
                        </form>
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
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($question as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>
                                            @if ($item->quizz_relation)
                                                {{ $item->quizz_relation->quizz_subject }}
                                            @endif
                                        </td>
                                        <td>{{ $item->question_title }}</td>
                                        <td>
                                            <button type="button" value="{{ $item->id }}"
                                                class="btn btn-outline-info edit_btn">Edit</button>
                                            <a href="{{ route('question_delete', $item->id) }} "
                                                class="btn btn-outline-danger"
                                                onclick="return confirm('Do you want to Delete')">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            @if (session()->get('create'))
                <script>
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: '{{ session()->get('create') }}',
                        showConfirmButton: false,
                        timer: 1000
                    })
                </script>
            @endif

            {{--  create Question modal --}}
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Question Create</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{ route('questions_store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Quiz Subject</label>
                                    <select class="form-control" name="Question_subject" id="quizz_subject">
                                        <option value="">select</option>
                                        @foreach ($quiz as $data)
                                            <option value="{{ $data->id }}">{{ $data->quizz_subject }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Question Title</label>
                                    <input type="text" class="form-control" name="question_title" id="recipient-name">
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

            {{-- Edit Question modal --}}
            <div class="modal fade" id="edit_question" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Question Create</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{ route('question_update') }}" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <input type="hidden" id="id" name="id">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Quiz Subject</label>
                                    <select class="form-control" name="Question_subject" id="subject">
                                        <option value="">select</option>
                                        @foreach ($quiz as $data)
                                            <option value="{{ $data->id }}">{{ $data->quizz_subject }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Question Title</label>
                                    <input type="text" class="form-control" name="question_title" id="title">
                                </div>

                                <div class="modal-footer d-flex justify-content-between">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
    integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        $(document).on('click', '.edit_btn', function() {
            var question_id = $(this).val();

            $.ajax({
                type: "GET",
                url: "/dashboard/question_edit/" + question_id,
                success: function(response) {
                    console.log(response);
                    console.log(response.question_edit_data);
                    let select = response.question_edit_data;
                    id.value = select.id;
                    subject.value = select.Question_subject;
                    title.value = select.question_title;
                    $('#edit_question').modal('show');
                }
            });
        });
    });
</script>
