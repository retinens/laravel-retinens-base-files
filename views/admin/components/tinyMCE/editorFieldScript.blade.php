<script>
    {
        const editor_config = {
            selector: '#{{ $fieldName }}',
            contextmenu: 'link image table italic underline bold fontfamily fontsize copy cut paste',
            language: 'fr_FR',
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste wordcount autoresize'
            ],
            table_use_colgroups: true,
            toolbar: 'insertfile undo redo | styleselect | lineheight | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image imagetools | code',
            image_title: true,
            toolbar_sticky: true,
            relative_urls: false,
            remove_script_host: true,
            document_base_url: "https://www.ergysport.com/",
            path_absolute: '{{ url("admin") }}',
            height: "{{ $height ?? 3000 }}px",
            file_picker_callback: function (callback, value, meta) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + '/fTnwFdPTvlm-fm-ergysport-LBGMnVXSVS?editor=' + meta.fieldname;
                cmsURL = cmsURL + "&type=Files";

                tinyMCE.activeEditor.windowManager.openUrl({
                    url: cmsURL,
                    title: 'File Manager',
                    width: x * 0.8,
                    height: y * 0.8,
                    resizable: "yes",
                    close_previous: "no",
                    onMessage: (api, message) => {
                        callback(message.content);
                    }
                });
            },
            entity_encoding: "raw",
            image_class_list: [
                {title: 'Responsive', value: 'img-fluid'},
                {title: 'Responsive, pas de clic possible', value: 'no-lightbox img-fluid'}
            ],
            branding: false,
            style_formats: [
                {
                    title: 'Titres', items: [
                        {title: 'Titre 1', block: 'h1'},
                        {title: 'Titre 1 - No margin', block: 'h1', classes: 'mb-0'},
                        {title: 'Titre 1 - Non bold', block: 'h1', classes: 'fw-normal mb-0'},
                        {title: 'Titre 2', block: 'h2'},
                        {title: 'Titre 2 - No margin', block: 'h2', classes: 'mb-0'},
                        {title: 'Titre 2 - Non bold', block: 'h2', classes: 'fw-normal mb-0'},
                        {title: 'Titre 3', block: 'h3'},
                        {title: 'Titre 3 - No margin', block: 'h3', classes: 'mb-0'},
                        {title: 'Titre 3 - Non bold', block: 'h3', classes: 'fw-normal mb-0'},
                        {title: 'Titre 4', block: 'h4'},
                        {title: 'Titre 4 - No margin', block: 'h4', classes: 'mb-0'},
                        {title: 'Titre 4 - Non bold', block: 'h4', classes: 'fw-normal mb-0'},
                        {title: 'Titre 5', block: 'h5'},
                        {title: 'Titre 5 - No margin', block: 'h5', classes: 'mb-0'},
                        {title: 'Titre 5 - Non bold', block: 'h5', classes: 'fw-normal mb-0'},
                    ]
                },
                {
                    title: 'Paragraph', block: 'p'
                },
                {
                    title: 'Intro', block: 'p', classes: ['intro']
                },
                {
                    title: 'Containers', items: [
                        {title: 'Encadré', block: 'section', wrapper: true, classes: ['encadre']},
                        {title: 'Exergue', block: 'section', wrapper: true, classes: ['exergue']},
                    ]
                },
                { title: 'Colones responsive' },
                { title: "Row", block: "div", wrapper: true, classes: "row" },
                {
                    title: "Columns",
                    items: [
                        { title: "Column 3/4", block: "div", merge_siblings: false, wrapper: true, classes: "col-lg-9" },
                        { title: "Column 2/3", block: "div", merge_siblings: false, wrapper: true, classes: "col-lg-8" },
                        { title: "Column 1/2", block: "div", merge_siblings: false, wrapper: true, classes: "col-lg-6" },
                        { title: "Column 1/3", block: "div", merge_siblings: false, wrapper: true, classes: "col-lg-4" },
                        { title: "Column 1/4", block: "div", merge_siblings: false, wrapper: true, classes: "col-lg-3" },
                        // Add more options for different grid systems and column widths
                    ]
                },
            ],
            content_css: ['{{ Vite::asset('resources/app/sass/app.scss') }}'],
            content_css_cors: true,
            body_class: '{{ $bodyClass ?? '' }}',
        };

        tinymce.init(editor_config);
    }
</script>

@once
    @push('scripts')
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        <script>
            WebFont.load({
                google: {
                    families: ['Asap:400,500,700']
                }
            });
        </script>
    @endpush
@endonce
