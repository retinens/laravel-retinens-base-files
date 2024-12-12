<!doctype html>
<html lang="{{ app()->getLocale() }}">
@include('admin.layout.common.htmlHeader')
<body class="">
@include('admin.layout.header')
@include('admin.layout.sidebar')
<main class="content">
    @include('admin.layout.content-header')
    <div class="px-4">
        <div class="mb-3">
            @yield('content')
        </div>
        @include('admin.layout.footer')
    </div>
</main>
@include('admin.layout.common.htmlFooter')
</body>
</html>
