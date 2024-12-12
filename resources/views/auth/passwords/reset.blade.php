@extends('auth.layout.auth')

@section('content')
    <div class="d-flex align-items-center min-vh-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class=" card col-md-8">
                    <div class="card-body">
                        <h1>
                            Définir un nouveau mot de passe
                        </h1>
                        <form method="POST" action="{{ route('password.update') }}" >
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="form-floating mb-3">
                                {{ html()->email('email',$email ?? '')->class('form-control')->required()->placeholder('')->attribute('autofocus', true) }}
                                {{ html()->label("Email",'email')->class('text-dark') }}
                            </div>
                            <div class="form-floating mb-3">
                                {{ html()->password('password')->class('form-control')->required()->attribute('autocomplete', 'new-password')->placeholder('password') }}
                                {{ html()->label('Mot de passe','password') }}
                            </div>
                            <div class="form-floating mb-3">
                                {{ html()->password('password_confirmation')->class('form-control')->required()->attribute('autocomplete', 'new-password')->placeholder('password_confirmation') }}
                                {{ html()->label('Confirmation','password_confirmation') }}
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">
                                    Définir un nouveau mot de passe
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
