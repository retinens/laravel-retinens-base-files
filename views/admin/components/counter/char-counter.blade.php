<span class="small text-muted">
    <span id="{{ $fieldName }}_counter">0</span> / {{ $maxChars ?? 160 }}
</span>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('{{ $fieldName }}_counter').innerText = document.getElementById('{{ $fieldName }}').value.length;
            document.getElementById('{{ $fieldName }}').addEventListener('keyup', function () {
                document.getElementById('{{ $fieldName }}_counter').innerText = this.value.length;
            });
        });
    </script>
@endpush
