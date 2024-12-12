@extends('auth.layout.auth')

@section('content')

    <h1 class="mb-2 text-dark">Login</h1>
    @include('app.layout.common.alerts')
    <form method="POST" action="{{ route('login') }}" >
        @csrf
        <div class="form-floating text-dark mb-3">
            {{ html()->email('email')->class('form-control text-dark')->required()->placeholder('')->attribute('autofocus', true) }}
            {{ html()->label("Email",'email')->class('text-dark') }}
        </div>
        <div class="form-floating text-dark mb-3">
            {{ html()->password('password')->class('form-control text-dark')->required()->placeholder('') }}
            {{ html()->label("Mot de passe",'password')->class('text-dark') }}
        </div>
        <div class="form-check mb-3">
            {{ html()->checkbox('remember')->class('form-check-input')->id('remember') }}
            {{ html()->label('Se souvenir de moi','remember')->class('form-check-label') }}
        </div>
        <div class="row align-items-center">
            <div class="col-xxl-6">
                <button class="btn btn-primary px-4" type="submit">
                    Connexion <i class="fa fa-arrow-right ms-2"></i>
                </button>
            </div>
            <div class="col-xxl-6 text-xxl-end">
                <a href="{{ route('password.request') }}" class="btn btn-link px-0">
                    Mot de passe oublié?
                </a>
            </div>
        </div>
    </form>

@endsection
