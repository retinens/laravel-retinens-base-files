@extends('auth.layout.auth')

@section('content')
    <div class="container-fluid p-0">
        <div class="row min-height-100vh p-0 m-0">
            <div class="col-md-6 col-lg-5 col-xl-4 p-0 d-flex align-items-center">
                <div class="p-lg-5 p-0 w-100">
                    <div class="p-3 bg-white">

                        <h1 class="h2 ">
                            Réinitialiser le mot de passe
                        </h1>
                        @if (session('status'))
                            <div class="alert alert-success mb-0 mt-3" role="alert">
                                {{ session('status') }}
                            </div>
                        @else
                            <p class="">
                                Merci de renseigner votre adresse email pour réinitialiser votre mot de passe.
                            </p>
                            @include('app.layout.common.alerts')
                            <form method="POST" action="{{ route('password.email') }}" >
                                @csrf
                                <div class="form-floating mb-3">
                                    {{ html()->email('email')->class('form-control')->required()->placeholder('')->attribute('autofocus', true) }}
                                    {{ html()->label("Email",'email') }}
                                </div>
                                <button type="submit" class="btn btn-primary w-100">
                                    Réinitialiser le mot de passe
                                </button>

                            </form>
                        @endif

                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-7 col-xl-8 d-md-block d-none bg-image login-side-image">
            </div>
        </div>
    </div>
@endsection
