@include('admin.layout.alerts')
<div class="row">
    <div class="mb-3 col-md">
        {{ html()->label('Prénom','first_name') }}
        {{ html()->text('first_name',$adminUser->first_name ?? '')->class('form-control')->required() }}
    </div>
    <div class="mb-3 col-md">
        {{ html()->label('Nom','last_name') }}
        {{ html()->text('last_name',$adminUser->last_name ?? '')->class('form-control')->required() }}
    </div>
</div>
<div class="mb-3">
    {{html()->label('Email','email') }}
    {{ html()->email('email',$adminUser->email ?? '')->class('form-control')->required() }}
</div>
<div class="mb-3">
    {{ html()->label('Accès CMS','type') }}
    {{ html()->select('type',['admin'=> 'Oui','user'=> 'Non'],$adminUser->type ?? 'admin')->class('form-select')->required() }}
</div>
