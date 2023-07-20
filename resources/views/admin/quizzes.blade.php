@extends('admin.layouts.dashboard')
@section('content')
    <div class="container">
        <div class="col md-6 sm-3 lg-12">
            <div class="card ">
                <div class="card-header justify-content-center">
                    <h2 class="text-center" style="color: rgb(44 1 1);">Quizzes list</h2>
                </div>
                <div class="d-flex justify-content-between">

                    <div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                            data-bs-whatever="@mdo">Quizzes Create</button>
                    </div>
                    @if (session()->get('create'))
                        <script>
                            Toast.fire({
                                icon: 'Success',
                                background: '#28DC20',
                                title: '{{ session()->get('create') }}'
                            })
                        </script>
                    @endif

                    {{--  create modal --}}
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Quizzes Create</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="{{ route('quiz_store') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Quizz Subject</label>
                                            <input type="text" class="form-control" name="quizz_subject"
                                                id="recipient-name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="message-text" class="col-form-label">Class Name</label>
                                            <select name="class_name" class="form-control" id="class_name_create">
                                                <option value="">select</option>
                                                @foreach ($class as $data)
                                                    <option value="{{ $data->id }}">{{ $data->class_name }}</option>
                                                @endforeach

                                            </select>
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
                                    <th>Class Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($quizz as $data)
                                    <tr>
                                        <td>{{ $data->id }}</td>
                                        <td>{{ $data->quizz_subject }}</td>
                                        <td>
                                            @if ($data->class_name_relation)
                                                {{ $data->class_name_relation->class_name }}
                                            @endif
                                        </td>

                                        <td>
                                            <button type="button" class="btn btn-primary edit_btn"
                                                value="{{ $data->id }}">Edit</button>
                                            <a href="{{ route('quiz_delete', $data->id) }}"
                                                onclick="return confirm('Do you want to Delete')"
                                                class="btn btn-outline-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @if (session()->get('Update'))
                    <script>
                        Toast.fire({
                            icon: 'Success',
                            background: '#28DC20',
                            title: '{{ session()->get('Update') }}'
                        })
                    </script>
                @endif

                {{-- Edit quizz --}}
                <div class="modal fade" id="edit_quiz" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Quizzes Create</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="{{ route('quiz_update') }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <input type="hidden" name="id" id="id">
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Quizz Subject</label>
                                        <input type="text" class="form-control" name="quizz_subject"
                                            id="edit_quizz_subject">
                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Class Name</label>
                                        <select name="class_name" class="form-control" id="edit_class_name">
                                            <option value="">select</option>
                                            @foreach ($class as $data)
                                                <option value="{{ $data->id }}">{{ $data->class_name }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="modal-footer d-flex justify-content-between">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                            </div>
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
            var class_id = $(this).val();

            $.ajax({
                type: "GET",
                url: "/dashboard/quiz_edit/" + class_id,
                success: function(response) {
                    console.log(response);
                    console.log(response.quiz_edit_data);
                    let select = response.quiz_edit_data;
                    id.value = select.id;
                    edit_quizz_subject.value = select.quizz_subject;
                    edit_class_name.value = select.class_name;
                    $('#edit_quiz').modal('show');
                }
            });
        });
    });
</script>
