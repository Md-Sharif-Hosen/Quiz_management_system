 @extends('admin.layouts.dashboard')


@section('content')
    <div class="container">

        @if (session()->get('done'))
            <script>
                Toast.fire({
                    icon: 'Success',
                    background: '#28DC20',
                    title: '{{ session()->get('done') }}'
                })
            </script>
        @else
            {{-- <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Oops not Create',
                    text: 'Class not Create!',

                })
            </script> --}}
        @endif
        <div class="col md-6 sm-3 lg-12">
            <div class="card ">
                <div class="card-header justify-content-center">
                    <h2 class="text-center" style="color: rgb(62, 99, 223)"><b>Class list</b></h2>
                </div>
                <div class="d-flex justify-content-between">

                    <div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                            data-bs-whatever="@mdo">Class Create</button>
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
                @if (session()->get('delete'))
                    <script>
                        Toast.fire({
                            icon: 'Success',
                            background: '#28DC20',
                            title: '{{ session()->get('delete') }}'
                        })
                    </script>
                @endif
                <div class="card-body">
                    <div class="table table-striped">
                        <table class="table col md-6 sm-3 lg-12">
                            <thead>
                                <tr>
                                    <th><b>SL N0</b></th>
                                    <th><b>Class Name</b></th>
                                    <th><b>Class Room No</b></th>
                                    <th><b>Teacher Name</b></th>
                                    <th><b>Action</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($classes_view as $data)
                                    <tr>
                                        <td>{{ $data->id }}</td>
                                        <td>{{ $data->class_name }}</td>
                                        <td>{{ $data->class_room_no }}</td>
                                        <td>{{ $data->teacher }}</td>
                                        <td>
                                            <button class="btn btn-outline-info edit_btn"
                                                value="{{ $data->id }}">Edit</button>
                                            <a class="btn btn-outline-danger"
                                                onclick="return confirm('Do you want to Delete')"
                                                href="{{ route('classes_delete', $data->id) }}">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $classes_view->links() }}
                    </div>
                </div>
            </div>


            {{--  create class modal --}}
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Classses Create</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{ route('classes.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Class Name</label>
                                    <input type="text" class="form-control" value="{{ old('class_name') }}"
                                        name="class_name" id="class_name">
                                    @error('class_name')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Class Room No.</label>
                                    <input type="text" class="form-control" value="{{ old('class_room_no') }}"
                                        name="class_room_no" id="class_room_no">
                                    @error('class_room_no')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Teacher Name</label>
                                    <select class="form-control" name="teacher" id="teacher">
                                        <option value="{{ auth()->user()->name }}">{{ auth()->user()->name }}</option>
                                    </select>
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
            @if (session()->get('Update'))
                <script>
                    Swal.fire({
                        icon: 'Success',
                        background: '#28DC20',
                        title: '{{ session()->get('Update') }}'
                    })
                </script>
            {{-- @else
                <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops not Update',
                        text: 'Class not Update!',

                    })
                </script> --}}
            @endif
            {{-- Edit Class modal --}}
            <div class="modal fade" id="edit_class" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Classses Edit</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{ route('classes_update') }}" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <input type="hidden" id="id" name="id">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Class Name</label>
                                    <input type="text" class="form-control"  value="{{ old('class_name') }}" name="class_name" id="edit_class_name">
                                    @error('class_name')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror

                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Class Room No.</label>
                                    <input type="text" class="form-control"  value="{{ old('class_room_no') }}" name="class_room_no"
                                        id="edit_class_room_no">
                                    @error('class_room_no')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Teacher Name</label>
                                    <select class="form-control" name="teacher" id="teacher">
                                        <option value="{{ auth()->user()->name }}">{{ auth()->user()->name }}</option>
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
                    url: "/dashboard/classes_edit/" + class_id,
                    success: function(response) {
                        console.log(response);
                        console.log(response.classes);
                        let select = response.classes;
                        id.value = select.id;
                        edit_class_name.value = select.class_name;
                        edit_class_room_no.value = select.class_room_no;
                        teacher.value = select.teacher;
                        $('#edit_class').modal('show');
                    }
                });
            });
        });
    </script>
@endsection
