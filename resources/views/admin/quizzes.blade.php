@extends('admin.layouts.dashboard')
@section('content')
    <div class="container">
        <div class="col md-6 sm-3 lg-12">
            <div class="card">
                <div class="card-header justify-content-center">
                    <h2>Quizzes list</h2>
                </div>
                <div>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                        data-bs-whatever="@mdo">Quizzes Create</button>
                </div>
                <div class="card-body">
                    <div class="table table-striped">
                        <table class="table col md-6 sm-3 lg-12">
                            <thead>
                                <tr>
                                    <th>SL N0</th>
                                    <th>Subject</th>
                                    <th>Class Name</th>
                                    <th>Total Marks</th>
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
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Quizzes Create</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="post"  enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Subject Name</label>
                                    <input type="text" class="form-control" name="subject" id="recipient-name">
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Class Name</label>
                                    <select name="class_name" class="form-control" id="class_name">
                                        <option value="">select</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Total Marks</label>
                                    <input type="text" class="form-control" name="total_marks" id="recipient-name">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
