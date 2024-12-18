@extends('auth.layout.auth')

@section('content')

    <h1 class="mb-3">
        Créer un compte
    </h1>
    <form method="POST" action="{{ route('register') }}" class="mx-auto form-validate">
        @csrf
        <div class="form-floating mb-3">
            {{ html()->text('first_name')->class('form-control')->required()->placeholder('first_name') }}
            {{ html()->label('Prénom','first_name') }}
            @include('app.layout.common.form-error', ['field' => 'first_name'])
        </div>
        <div class="form-floating mb-3">
            {{ html()->text('last_name')->class('form-control')->required()->placeholder('last_name') }}
            {{html()->label('Nom','last_name') }}
            @include('app.layout.common.form-error', ['field' => 'last_name'])
        </div>
        <div class="form-floating mb-3">
            {{ html()->email('email')->class('form-control')->required()->placeholder('email') }}
            {{ html()->label('Email','email') }}
            @include('app.layout.common.form-error', ['field' => 'email'])
        </div>
        <div class="form-floating mb-3">
            {{ html()->password('password')->class('form-control')->required()->attribute('autocomplete', 'new-password')->placeholder('password') }}
            {{ html()->label('Mot de passe','password') }}
            @include('app.layout.common.form-error', ['field' => 'password'])
        </div>
        <div class="form-floating mb-3">
            {{ html()->password('password_confirmation')->class('form-control')->required()->attribute('autocomplete', 'new-password')->placeholder('password_confirmation') }}
            {{ html()->label('Confirmation','password_confirmation') }}
            @include('app.layout.common.form-error', ['field' => 'password_confirmation'])
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
@endsection
