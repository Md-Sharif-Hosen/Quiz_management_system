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
                            data-bs-whatever="@mdo">QuiZZ Create</button>
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
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Quizz Create</h1>
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
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Teacher Name</label>
                                            <select class="form-control" name="teacher" id="teacher">
                                                <option value="{{ auth()->user()->name }}">{{ auth()->user()->name }}
                                                </option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Quizz Banner</label>
                                            <input class="form-control" type="file" id="photo" accept="image/*"
                                                name="cover_image">

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
                                    style="border: 1px solid rgb(209 178 254);
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
                                    <th><b>SL N0</b></th>
                                    <th><b>Quizz Subject</b></th>
                                    <th><b>Class Name</b></th>
                                    <th><b>Teacher</b></th>
                                    <th><b>Status</b></th>
                                    <th><b>Quizz Banner</b></th>
                                    <th><b>Quizz All Question</b></th>
                                    <th><b>Total Examineer</b></th>
                                    <th><b>Action</b></th>
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
                                        <td>{{ $data->teacher }}</td>
                                        <td>
                                            {{ $data->status }}
                                            {{-- <label class="switch">
                                                <input type="checkbox" name="status" class="checkIt" value="{{ $data->status }}">
                                                <span class="slider round"></span>
                                            </label>
                                            <script type="text/javascript">
                                                $('.checkIt').bind('click', function() {
                                                    if($(this).is(":checked")) {
                                                        // checkbox is checked
                                                    } else {
                                                        // checkbox is not checked
                                                    }
                                                });
                                            </script> --}}
                                        </td>
                                        <td><img src="/{{ $data->cover_image }}" style="height:50px;width:50px"
                                                alt="">
                                        </td>
                                        <td>
                                            Total Question:
                                                @if ($data->question_relations)
                                                <b> {{ $data->question_relations->where('quiz_id', $data->id)->count('ques_id') }}
                                            </b> <br> <a href="{{ route('quiz_topic_question', $data->id) }}"
                                                class="btn btn-info">View details</a>
                                        @else
                                            <b>0</b>
                                @endif

                                </td>
                                <td>
                                    Participent:
                                        @if ($data->quiz_submit_user)
                                        <b>  {{ $data->quiz_submit_user->where('quiz_id', $data->id)->pluck('user_id')->unique()->count('user_id') }}
                                    </b>
                                    <br> <a href="{{ route('quiz_examiner', $data->id) }}" class="btn btn-info">View
                                        details</a>
                                @else
                                    <b>0</b>
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

                    @if ($quizz)
                    {{ $quizz->links() }}
                    @endif

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
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Teacher Name</label>
                                        <select class="form-control" name="teacher" id="teacher">
                                            <option value="{{ auth()->user()->name }}">{{ auth()->user()->name }}
                                            </option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Status</label>
                                        <input type="text" class="form-control" name="status" id="status_id">
                                        {{-- <label class="switch col-form-label" class="form-control" > Status
                                                <input type="checkbox" value="{{ $data->status }}" id="status_id">
                                                <span class="slider round"></span>
                                            </label> --}}

                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Quizz Banner</label>
                                        <input class="form-control" type="file" id="photo" accept="image/*"
                                            name="cover_image">
                                        <img src="" id="photo_preview" height="50" width="50"
                                            alt="">
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
                    // console.log(response);
                    // console.log(response.quiz_edit_data);
                    let select = response.quiz_edit_data;
                    id.value = select.id;
                    edit_quizz_subject.value = select.quizz_subject;
                    edit_class_name.value = select.class_name;
                    status_id.value = select.status;
                    teacher.value = select.teacher;
                    photo_preview.src = '/' + select.cover_image;
                    $('#edit_quiz').modal('show');
                }
            });
        });
    });
</script>
