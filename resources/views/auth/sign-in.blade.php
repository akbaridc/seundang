@extends('templates.auth.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card mt-4">

                <div class="card-body p-4">
                    <div class="text-center mt-2">
                        <h5 class="text-primary">Welcome Back !</h5>
                        <p class="text-muted">Sign in to continue to Velzon.</p>
                    </div>
                    <div class="p-2 mt-4">
                        <form action="/backoffice/doLogin" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="Enter email">
                            </div>

                            <div class="mb-3">
                                <div class="float-end">
                                    <a href="auth-pass-reset-basic" class="text-muted">Forgot password?</a>
                                </div>
                                <label class="form-label" for="password-input">Password</label>
                                <div class="position-relative auth-pass-inputgroup mb-3">
                                    <input type="password" class="form-control pe-5 password-input"
                                        placeholder="Enter password" id="password-input" name="password">
                                    <button
                                        class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                        type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                </div>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                                <label class="form-check-label" for="auth-remember-check">Remember
                                    me</label>
                            </div>

                            <div class="mt-4">
                                <button class="btn btn-success w-100" type="submit">Sign In</button>
                            </div>

                            {{-- @include('auth.sso', ['titleSSO' => 'Sign in with']) --}}
                        </form>
                    </div>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->

            <div class="mt-4 mb-3 text-center">
                <p class="mb-0">Don't have an account ? <a href="{{ route('backoffice.sign-up') }}"
                        class="fw-semibold text-primary text-decoration-underline"> Signup </a> </p>
            </div>

        </div>
    </div>
@endsection
