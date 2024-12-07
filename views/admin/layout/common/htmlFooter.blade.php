<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.6.0/dist/alpine.min.js" defer></script>
<script src="https://unpkg.com/moment@2.22.1/min/moment.min.js"></script>
<script src="https://kit.fontawesome.com/5573a6d434.js" crossorigin="anonymous"></script>
@livewireScripts
@vite(['resources/admin/js/admin.js'])
@stack('scripts')
{{--<x-toastr/>--}}
@yield('footer')
