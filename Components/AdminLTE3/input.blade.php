<div class="form-group">

    @if(strlen($slot))
        <label for="{{ $item }}" class="control-label">
            <span class="@error($item) text-danger @enderror">{{ $slot }}</span>
        </label>
    @else
        @php($placeholder = $placeholder ? $placeholder : ucfirst(strtolower($item)))
    @endif

    <div class="input-group">
        <input type="{{ $type }}" wire:model="{{ $item }}" id='{{ $item }}' placeholder='{{ $placeholder }}' class="form-control @error($item) is-invalid @enderror">
        <div class="input-group-append">
            <span class="input-group-text">  
                {!! $icon ?? '<i class="far fa-flag fa-fw"></i>' !!}
            </span>
        </div>
    </div>
    @error($item)
        <span class="text-danger">* {{ ucfirst(str_replace('.', '', $message)) }}</span>
    @enderror
</div>