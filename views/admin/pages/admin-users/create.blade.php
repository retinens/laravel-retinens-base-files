@extends('admin.layout.admin')
@section('breadcrumbs')
    <li class="breadcrumb-item">
        <a href="{{ route('admin.admin-users.index') }}">Utilisateurs CMS</a>
    </li>
    <li class="breadcrumb-item active">Ajouter un utilisateur</li>
@stop
@section('content')

    <form action="{{ route('admin.admin-users.store') }}" class="form-validate" method="post">
        @csrf
        @include('admin.pages.admin-users._partials._form')
        <div class="text-end">
            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Ajouter</button>
        </div>
    </form>

@endsection

