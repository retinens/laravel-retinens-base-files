{{-- This is the htmlFooter for the APP layout --}}
@vite(['resources/app/js/app.js'])
<script src="https://kit.fontawesome.com/29f5e80929.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
<script>
    WebFont.load({
        google: {
            families: ['Inter:300,400,700']
        }
    });
</script>
@include('app.layout.common.tarteaucitron')
@stack('scripts')
