<div class="row">
    <div class="col-md-6">
        <div class="card card-body">
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
            @if(!isset($adminUser))
                <div class="alert alert-primary">
                    <i class="fa fa-info-circle"></i>
                    Nous enverrons un email d'activation pour que l'utilisateur puisse définir son mot de passe.
                </div>
            @endif

        </div>
    </div>
</div>
@include('admin.layout.alerts')
