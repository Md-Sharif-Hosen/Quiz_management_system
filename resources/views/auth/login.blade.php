@extends('layouts.app')


@section('content')
    <div>
        <a class="container-fluid" href="">
            <img src="{{ asset('assets/website') }}/images/logo-2.png" alt="Logo">
        </a>
    </div>
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Sign In</h3>
                </div>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                {{-- @if (session()->get('success'))
                    <script>
                        Toast.fire({
                            icon: "success",
                            title: '{{ session()->get('success') }}'
                        });
                    </script>
                @endif --}}
                <div class="card-body">
                    <form class="card-body cardbody-color p-lg-5" method="post" action="{{ route('login') }}">
                        @csrf
                        <div class="text-center">
                            <img src="{{ asset('assets/website') }}/images/text-logo.jpg"
                                class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3" width="200px"
                                alt="profile">
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                aria-describedby="emailHelp" placeholder="Email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="password" name="password" required
                                autocomplete="current-password" placeholder="password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row align-items-center remember">
                            <input type="checkbox" name="remember">Remember Me
                        </div>
                        <div class="text-center"><button type="submit"
                                class="btn btn-color px-5 mb-5 w-100">{{ __('Login') }}</button>
                        </div>
                        <div id="emailHelp" class="form-text text-center mb-5 " style="color: rgb(174, 182, 60)">Not
                            Registered? <a href="{{ route('register') }}" class=" fw-bold" style="font-size: 15px"> Create
                                an
                                Account</a>
                            @if (Route::has('password.request'))
                                <div class="d-flex justify-content-center fw-bold"
                                    style="font-size: 17px; font-family:sans-serif;">
                                    <a btn btn-link href="{{ route('password.request') }}">Forgot your password?</a>
                                </div>
                            @endif
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
