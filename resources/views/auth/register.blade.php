@extends('layouts.app')

@section('content')
    <div>
        <a class="container-fluid" href="">
            <img src="{{ asset('assets/website') }}/images/logo-2.png" alt="Logo">
        </a>
    </div>
    <div class="container">

        <div class="d-flex justify-content-center h-100">
            <div class="card col-6">

                <div class="card-header">
                    <h3>Register</h3>

                </div>

                <div class="card-body">
                    <form method="POST" class="card-body cardbody-color p-lg-5" enctype="multipart/form-data" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right"
                                style="color: #feffd8">Name</label>

                            <div class="col-md-8">
                                <input id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right"  style="color: #feffd8">Email</label>

                            <div class="col-md-8">
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="phone_number" class="col-md-4 col-form-label text-md-right"  style="color: #feffd8">Phone Number</label>

                            <div class="col-md-8">
                                <input id="phone_number" type="number"
                                    class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required
                                    autocomplete="phone_number">

                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- <div class="row mb-3">
                            <label for="role_id" class="col-md-4 col-form-label text-md-right"  style="color: #feffd8">Role</label>

                            <div class="col-md-8">
                                <select id="role_id" class="form-control"  value="{{ old('role_id') }}" name="role_id" required  autocomplete="role_id">
                                 <option value="">Select</option>
                                 @foreach (App\Models\UserRole::get() as $item )
                                 <option value="{{ $item->id }}"
                                    {{ old('role_id')==$item->id ? 'selected':""}}>
                                    {{ $item->title }}

                                </option>
                                 @endforeach
                                </select>
                                @error('role_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}
                        <div class="row mb-3">
                            <label for="image" class="col-md-4 col-form-label text-md-right"   style="color: #feffd8">Image</label>

                            <div class="col-md-8">
                                <input class="form-control @error('name') is-invalid @enderror" type="file" value="{{ old('image') }}" accept="image/*"
                                name="image">

                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-right"  style="color: #feffd8">Password</label>

                            <div class="col-md-8">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm"
                                class="col-md-4 col-form-label text-md-right"  style="color: #feffd8">Confirm Password</label>

                            <div class="col-md-8">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection
