@extends('admin.layouts.dashboard')
@section('content')
<div class="container">
    <div class="col md-6 sm-3 lg-12">
        <div class="card ">
            <div class="card-header justify-content-center">
                <h2 class="text-center" style="color: rgb(217, 236, 202)">Class list</h2>
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

            <div class="card-body">
                <div class="table table-striped">
                    <table class="table col md-6 sm-3 lg-12">
                        <thead>
                            <tr>
                                <th>SL N0</th>
                                <th>Class Name</th>
                                <th>Class Room No.</th>
                                <th>Teacher Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        {{--  create modal --}}
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Classses Create</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{ route('classes.store') }}" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Class Name</label>
                                <input type="text" class="form-control" name="class_name" id="recipient-name">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Class Room No.</label>
                                <input type="text" class="form-control" name="class_room_no" id="recipient-name">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Teacher Name</label>
                                <select class="form-control" name="teacher" id="teacher" >
                                    <option value="{{auth()->user()->name}}">{{auth()->user()->name}}</option>
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

    </div>
</div>
@endsection
