<!doctype html>
<html lang="{{ app()->getLocale() }}">
@include('app.layout.common.htmlHeader')
<body class="">
@include('app.layout.header')
<div class="">
    @yield('content')
</div>
@include('app.layout.common.htmlFooter')
</body>
</html>

