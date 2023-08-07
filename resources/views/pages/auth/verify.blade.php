@extends('layouts.auth')

@section('title', 'Register')

@section('content')
<section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">
                    <div class="login-brand">
                        <img src="../assets/img/icons/kai-color.png" alt="logo" width="200"
                            class="shadow-light">
                    </div>

                    @if (session('status') == 'verification-link-sent')
                        <div class="mb-4 alert alert-success">
                            A new email verification link has been emailed to you!
                        </div>
                    @endif

                    <div class="card border">
                        <div class="card-header bg-primary">
                            <h4 class="text-white">Email Verification</h4>
                        </div>

                        <div class="card-body">
                            <p class="text-muted">We will send a link to verification your email by clicking this button</p>
                            <div class="form-group">
                                <form action="{{ route('verification.send') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-warning btn-lg btn-block">
                                        Send Verification Email
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="simple-footer">
                        Copyright {{ date('Y') }} &copy; {{ env('APP_NAME') }}. Code By M. Amal Ikhsani
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
