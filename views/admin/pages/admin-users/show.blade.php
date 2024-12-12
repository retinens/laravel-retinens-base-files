@extends('admin.layout.admin')
@section('breadcrumbs')
    <li class="breadcrumb-item">
        <a href="{{ route('admin.admin-users.index') }}">Utilisateurs CMS</a>
    </li>
    <li class="breadcrumb-item active">{{ $adminUser->full_name }}</li>
@stop
@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card card-body mb-3">
                <p class="mb-0">
                    <strong>Prénom et Nom</strong> : {{$adminUser->full_name}}
                </p>
                <p class="mb-0">
                    <strong>Email</strong> : {{$adminUser->email}}
                </p>
                <p class="mb-0">
                    <strong>
                        Compte créé le
                    </strong>
                    {{ $adminUser->created_at->format('d/m/Y à H:i') }}
                </p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-body mb-3">
                <form action="{{ route('admin.admin-users.reset-password',$adminUser) }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-primary">Réinitialiser le mot de passe</button>
                </form>
            </div>
        </div>
    </div>
@stop
