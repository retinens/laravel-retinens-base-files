<script src="https://unpkg.com/moment@2.22.1/min/moment.min.js"></script>
<script src="https://kit.fontawesome.com/5573a6d434.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
<script>
    WebFont.load({
        google: {
            families: ['Inter:400,500,700']
        }
    });
</script>
@vite(['resources/admin/js/admin.js'])
@stack('scripts')
<x-toastr/>
@yield('footer')
