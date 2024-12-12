<!doctype html>
<html lang="{{ app()->getLocale() }}">
@include('app.layout.common.htmlHeader')
<body class="">
{{--@include('app.layout.header')--}}
<div class="margin-body">
    <div class="container-fluid p-0">
        <div class="row min-height-100vh p-0 m-0">
            <div class="col-lg-6 col-xl-4 d-flex align-items-center">
                <div class="p-lg-5 w-100">
                    @yield('content')
                </div>
            </div>
            <div class="col-lg-6 col-xl-8 d-md-block d-none bg-image " style="background-image: url('https://picsum.photos/1920/1080?random')">
            </div>
        </div>
    </div>
</div>
{{--@include('app.layout.footer')--}}
@include('app.layout.common.htmlFooter')
</body>
</html>
