@php

    $fieldValue = old($fieldName,isset($model) ? ($model->getImageField($fieldName) ?? '') : '');
    $alt = old("{$fieldName}[alt]",$fieldValue['alt'] ?? '');
    $fieldNameTransformed = $fieldName;
    if (str_contains($fieldName,'['))
    {
        $name = explode('[',$fieldName)[0];
        $index = explode('[',$fieldName)[1];
        $index = str_replace(']','',$index);
        $fieldNameTransformed = str_replace('[','_',$fieldName);
        $fieldNameTransformed = str_replace(']','',$fieldNameTransformed);
        if (isset($model))
        {
            $fieldValue = old($fieldName,($model->$name[$index] ?? ''));
            $alt = old("{$fieldName}[alt]",($model->$name[$index]['alt'] ?? ''));
        }
    }
@endphp

<div class="mb-3">
    <div class="row">
        <div class="col-12">
            {!! Form::label($fieldNameTransformed,$fieldLabel ?? '') !!}
        </div>
        <div class="col-md-3">
            <div id="{{ $fieldNameTransformed }}_preview" style="max-height: 100px;" class="border">
                <img src="{{ old("{$fieldName}[url]",$fieldValue['url'] ?? '') }}" style="max-height:100px;">
            </div>
        </div>
        <div class="col-md-9">
            <div class="d-flex">
                <a id="{{ $fieldNameTransformed }}_button" data-input="{{ $fieldNameTransformed }}_input" data-preview="{{ $fieldNameTransformed }}_preview" class="btn btn-primary btn-sm mb-2">
                    <i class="fa fa-picture-o"></i> Choisir l'image
                </a>
                <a href="#" id="clear{{ $fieldNameTransformed }}_input" class="btn btn-danger btn-sm mb-2 ms-2">
                    <i class="fa fa-times"></i> Effacer
                </a>
            </div>

            <input id="{{ $fieldNameTransformed }}_input" class="form-control form-control-sm" type="text" name="{{ $fieldName }}[url]"
                   value="{{ old("{$fieldName}[url]",$fieldValue['url'] ?? '') }}">
            <div class="input-group input-group-sm">
                <span class="input-group-text">Alt</span>
                <input id="{{ $fieldNameTransformed }}_alt" class="form-control form-control-sm" type="text" name="{{ $fieldName }}[alt]"
                       value="{{ old("{$fieldName}[alt]",$alt ?? '') }}">
            </div>
        </div>
    </div>
    @push('scripts')
        <script type="module" src="{{ asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
        <script type="module">
            $(document).ready(function () {
                $('#{{ $fieldNameTransformed }}_button').filemanager('Files');
                $('#clear{{ $fieldNameTransformed }}_input').click(function (e) {
                    e.preventDefault();
                    $('#{{ $fieldNameTransformed }}_input').val('');
                    $('#{{ $fieldNameTransformed }}_alt').val('');
                    $('#{{ $fieldNameTransformed }}_preview').html('');
                });
            });
        </script>
    @endpush
</div>
