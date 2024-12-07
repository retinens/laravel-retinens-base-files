<script>
    document.addEventListener('livewire:load', function () {
        var editor_config = {
            selector: '#{{ $fieldName }}',
            @unless(isset($noLivewire) && $noLivewire)
            setup: function (editor) {
                editor.on('init change', function () {
                    editor.save();
                });
                editor.on('change', function (e) {
                @this.set('product.{{ $fieldName }}', editor.getContent());
                });
            },
            @endunless
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste imagetools wordcount autoresize'
            ],
            toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | code',
            image_title: true,
            automatic_uploads: true,
            path_absolute : '{{ url("admin") }}',
            file_picker_callback : function(callback, value, meta) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + '/laravel-filemanager?editor=' + meta.fieldname;
                cmsURL = cmsURL + "&type=Files";

                tinyMCE.activeEditor.windowManager.openUrl({
                    url : cmsURL,
                    title : 'File Manager',
                    width : x * 0.8,
                    height : y * 0.8,
                    resizable : "yes",
                    close_previous : "no",
                    onMessage: (api, message) => {
                        callback(message.content);
                    }
                });
            },
            image_class_list: [
                {title: 'Responsive', value: 'img-fluid'},
                {title: 'Responsive, pas de clic possible', value: 'no-lightbox img-fluid'}
            ],
        };

        tinymce.init(editor_config);
    })
</script>
