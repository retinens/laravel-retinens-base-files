<div class="card card-body border border-dark mb-3">
    <h2 class="result-link"><a href="#" x-text="meta_title"></a></h2>
    <p class="green-link">{{ $link ?? url('/') }} <i class="fas fa-caret-down"></i></p>
    <p class="meta-description" x-text="meta_description"></p>
</div>

@push('styles')
    @once
        <style>
{{--            this is a google preview snipper--}}
            .result-link{
                font-size: 1.5rem;
                font-weight: 700;
                color: #1a0dab;
                margin-bottom: 0;
            }
            .green-link{
                color: #34a853;
                font-size: 1rem;
                margin-bottom: 0;
            }
            .meta-description{
                font-size: 1rem;
                color: #4d5156;
                margin-bottom: 0;
            }
        </style>
    @endonce
@endpush
