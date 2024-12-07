@extends('auth.layout.auth')

@section('content')
    <div class="container-fluid p-0">
        <div class="row min-height-100vh p-0 m-0">
            <div class="col-md-6 col-lg-5 col-xl-4 p-0 d-flex align-items-center">
                <div class="p-lg-5 p-0 w-100">
                    <div class="p-3 bg-white">
                        <h1 class="mb-3">{{ __('Verify Your Email Address') }}</h1>
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif
                        <p>{{ __('Before proceeding, please check your email for a verification link.') }}</p>
                        <p>{{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-7 col-xl-8 d-md-block d-none bg-image login-side-image">
            </div>
        </div>
    </div>
@endsection
