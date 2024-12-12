@extends('app.layout.app')

@section('content')
    <div class="container py-4">
        <div class="card card-body">
            <h1>Home</h1>
            <p class="mb-0">
                This is the home page for {{ config('app.name') }}
            </p>
            <p class="mb-0">
                Ready to start building something great !
            </p>
            <div>
                <a href="https://github.com/retinens/laravel-scripts/blob/master/afterCreatingWebsite.md" class="btn btn-primary mt-3">
                    Last manual steps
                </a>
            </div>
        </div>
    </div>
@endsection

