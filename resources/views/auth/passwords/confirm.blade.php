@extends('auth.layout.auth')

@section('content')

    <h1 class="mb-3">
        Merci de confirmer votre mot de passe
    </h1>
    <form method="POST" action="{{ route('password.confirm') }}" >
        @csrf
        <div class="form-floating mb-3">
            {{ html()->password('password')->class('form-control')->required()->attribute('autocomplete', 'new-password')->placeholder('password') }}
            {{ html()->label('Mot de passe','password') }}
        </div>
        <div class="text-end">
            <button type="submit" class="btn btn-primary">
                Confirmer <i class="fa fa-arrow-right"></i>
            </button>
        </div>
    </form>

@endsection
