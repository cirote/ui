@php($item_sin_punto = str_replace('.', '_', $item))

<div>
    <div class="form-group @error($item) text-danger @enderror">

        @if(strlen($slot))
            <label for="{{ $item }}" class="control-label">
                <span class="@error($item) text-danger @enderror">{{ $slot }}</span>
            </label>
        @else
            @php($placeholder = $placeholder ? $placeholder : ucfirst(strtolower($item)))
        @endif
    
        <div class="input-group date" data-target-input="nearest">
            <input  wire:model="{{ $item }}"
                    type="date" 
                    id="{{ $item_sin_punto }}" 
                    class="form-control datepicker-input @error($item) is-invalid @enderror" 
                    data-target="#{{ $item_sin_punto }}" 
                    onkeypress="return /[.0-9]/i.test(event.key)" >
        </div>
        @error($item)
            <span class="text-danger">* {{ ucfirst(str_replace('.', '', $message)) }}</span>
        @enderror
    </div>
</div>
