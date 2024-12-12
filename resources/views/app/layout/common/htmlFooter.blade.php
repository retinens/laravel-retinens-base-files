@vite(['resources/app/js/app.js'])
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
<script src="https://kit.fontawesome.com/29f5e80929.js" crossorigin="anonymous"></script>
<script>
    WebFont.load({
        google: {
            families: ['Noto+Serif:300,400,700']
        }
    });
</script>
@include('app.layout.common.tarteaucitron')

@stack('scripts')
