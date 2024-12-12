@extends('auth.layout.auth')

@section('content')


    <h1 class="mb-3">
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
        <form method="POST" action="{{ route('password.email') }}" >
            @csrf
            <div class="form-floating mb-3">
                {{ html()->email('email')->class('form-control')->required()->placeholder('')->attribute('autofocus', true) }}
                {{ html()->label("Email",'email') }}
                @include('app.layout.common.form-error', ['field' => 'email'])
            </div>
            <button type="submit" class="btn btn-primary w-100">
                Réinitialiser le mot de passe
            </button>

        </form>
    @endif


@endsection
