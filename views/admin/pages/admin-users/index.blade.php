@extends('admin.layout.admin')
@section('breadcrumbs')
    <li class="breadcrumb-item active">Utilisateurs CMS</li>
@stop
@section('content')
    @if ($adminUsers->count()>0)
        <div class="card">
            <div class="card-header ">
                <div class="d-flex justify-content-between">
                    <h2 class="mb-0">Utilisateurs CMS</h2>
                    <a href="{{ route('admin.admin-users.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Ajouter un utilisateur CMS</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table dataTable table-sm table-striped" data-display-length='-1'>
                    <thead>
                    <tr>
                        <th class="fit">ID</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th data-orderable="false" class="text-end">Actions</th>
                    </tr>
                    </thead>
                    @foreach ($adminUsers as $adminUser)
                        <tr>
                            <td>{{ $adminUser->id }}</td>
                            <td>{{ $adminUser->full_name }}</td>
                            <td>{{ $adminUser->email }}</td>
                            <td class="text-end">
                                <a class="btn btn-primary btn-sm my-0" href="{{route('admin.admin-users.edit', $adminUser)}}">
                                    <i class="fas fa-edit"></i> Modifier</a>
                                <a class="btn btn-primary btn-sm my-0" href="{{route('admin.admin-users.show', $adminUser)}}">
                                    <i class="fas fa-eye"></i> Inspecter</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    @endif
@stop
