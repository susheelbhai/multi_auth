

@if ($type == 'text')
    <div class="mb-3">
        <label for="{{ $name }}" class="form-label">{{ $lbl }}</label>
        <input type="text" class="form-control" id="{{ $name }}" name="{{ $name }}"
            placeholder="{{ $lbl }}" value="{{ $value }}" required>

    </div>
@endif
