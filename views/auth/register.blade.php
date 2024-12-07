@extends('auth.layout.auth')

@section('content')
    <div class="container-fluid p-0">
        <div class="row min-height-100vh p-0 m-0">
            <div class="col-md-6 col-lg-5 col-xl-4 d-flex align-items-center">
                <div class="p-lg-5 w-100">
                    <h1 class="mb-3">
                        Créer un compte
                    </h1>
                    <form method="POST" action="{{ route('register') }}" class="mx-auto form-validate">
                        @csrf
                        @include('app.layout.common.alerts')
                        <div class="form-floating mb-3">
                            {{ html()->text('first_name')->class('form-control')->required()->placeholder('first_name') }}
                            {{ html()->label('Prénom','first_name') }}
                        </div>
                        <div class="form-floating mb-3">
                            {{ html()->text('last_name')->class('form-control')->required()->placeholder('last_name') }}
                            {{html()->label('Nom','last_name') }}
                        </div>
                        <div class="form-floating mb-3">
                            {{ html()->email('email')->class('form-control')->required()->placeholder('email') }}
                            {{ html()->label('Email','email') }}
                        </div>
                        <div class="form-floating mb-3">
                            {{ html()->password('password')->class('form-control')->required()->attribute('autocomplete', 'new-password')->placeholder('password') }}
                            {{ html()->label('Mot de passe','password') }}
                        </div>
                        <div class="form-floating mb-3">
                            {{ html()->password('password_confirmation')->class('form-control')->required()->attribute('autocomplete', 'new-password')->placeholder('password_confirmation') }}
                            {{ html()->label('Confirmation','password_confirmation') }}
                        </div>

                        <div class="row align-items-center">
                            <div class="col-xl-6 order-1 order-xl-0">
                                <a href="{{ route('login') }}" class="btn btn-link small px-0">
                                    Vous avez déjà un compte?
                                </a>
                            </div>
                            <div class="text-end col-xl-6 order-0 order-xl-1">
                                <button type="submit" class="btn btn-primary">
                                    Créer un compte <i class="fa fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <div class="col-md-6 col-lg-7 col-xl-8 d-md-block d-none bg-image register-side-image" >
            </div>
        </div>
    </div>
@endsection
