<script src="{{ asset("build/tarteaucitron/tarteaucitron.js") }}"></script>
<script type="text/javascript">
    var currentLanguage = document.documentElement.lang;
    window.tarteaucitronForceLanguage = currentLanguage;
    tarteaucitron.init({
        "privacyUrl": "",
        "orientation": "bottom",
        "removeCredit": true,
        "showIcon": false,
        "groupServices" : true,
        "moreInfoLink": false
    });
    // tarteaucitron.user.gtagUa = 'G-XXXXXXXX';
    // tarteaucitron.user.gtagMore = function () {};
    // (tarteaucitron.job = tarteaucitron.job || []).push('gtag');
</script>
