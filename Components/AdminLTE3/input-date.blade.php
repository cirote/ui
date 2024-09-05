@php($item_sin_punto = str_replace('.', '_', $item))

<div class="form-group @error($item) text-danger @enderror">

    @if(strlen($slot))
        <label for="{{ $item }}" class="control-label">
            <span class="@error($item) text-danger @enderror">{{ $slot }}</span>
        </label>
    @else
        @php($placeholder = $placeholder ? $placeholder : ucfirst(strtolower($item)))
    @endif

    <div class="input-group">
        <input  wire:model.debounce="{{ $item }}" 
                type="date" 
                id="{{ $item_sin_punto }}" 
                class="form-control datepicker-input @error($item) is-invalid @enderror" 
                data-target="#{{ $item_sin_punto }}"
                onkeypress="return /[.0-9/]/.test(event.key)">
        
        </div>

    </div>
    @error($item)
        <span class="text-danger">* {{ ucfirst(str_replace('.', '', $message)) }}</span>
    @enderror
</div>

@push('scripts')
    <script>
    </script>
@endpush
