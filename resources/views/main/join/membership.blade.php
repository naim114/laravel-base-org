@extends('layouts.main-master')

@section('page-title', trans('app.join.membership'))

@section('content')
    <section id="content">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h1>Online Membership</h1>
                <p>Register to get the full experience.</p>
            </div>
            <div class="container">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-floating mb-3 mb-md-0">
                            <input class="form-control @error('full_name') is-invalid @enderror" id="full_name" type="text"
                                name="full_name" value="{{ old('full_name') }}" placeholder="Enter your full name" required
                                autofocus />
                            <label for="full_name">Full name</label>
                            @error('full_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input class="form-control @error('username') is-invalid @enderror" id="username"
                                type="text" name="username" value="{{ old('username') }}" pattern="\S+"
                                autocomplete="new-password" placeholder="Enter your username" required autofocus
                                title="This field is required and no whitespace allowed." />
                            <label for="username">Username</label>
                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control @error('email') is-invalid @enderror" id="email" type="email"
                        name="email" value="{{ old('email') }}" autocomplete="new-password"
                        placeholder="Enter your email address" required autofocus />
                    <label for="email">Email address</label>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-floating mb-3 mb-md-0">
                            <input class="form-control @error('email') is-invalid @enderror" id="password" type="password"
                                name="password" autocomplete="new-password" placeholder="Create a password" required
                                autofocus />
                            <label for="password">Password</label>

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3 mb-md-0">
                            <input class="form-control" id="password-confirm" type="password" placeholder="Confirm password"
                                name="password_confirmation" required />
                            <label for="password-confirm">Confirm Password</label>

                            @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
