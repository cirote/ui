@php($item_sin_punto = str_replace('.', '_', $item))
@PHP($tipo = 'text')

<div class="form-group @error($item) text-danger @enderror">

    @if(strlen($slot))
        <label for="{{ $item }}" class="control-label">
            <span class="@error($item) text-danger @enderror">{{ $slot }}</span>
        </label>
    @else
        @php($placeholder = $placeholder ? $placeholder : ucfirst(strtolower($item)))
    @endif

    <div class="input-group">
        <input type="{{ $tipo }}" wire:model="{{ $item }}" id="{{ $item_sin_punto }}" placeholder="{{ $placeholder }}" class="form-control @if($type == 'date') datetimepicker-input @endif @error($item) is-invalid @enderror" @if($type == 'date') data-target="#{{ $item_sin_punto }}" @endif  @if($type == 'number') onkeypress="return /[.0-9]/i.test(event.key)" @endif >
       
        <div class="input-group-append" @if($type == 'date') data-target="#{{ $item_sin_punto }}" data-toggle="datetimepicker"@endif >
            <span class="input-group-{{ $tipo }}">  
                {!! $icon ?? '<i class="far fa-flag fa-fw"></i>' !!}
            </span>
        </div>

    </div>
    @error($item)
        <span class="text-danger">* {{ ucfirst(str_replace('.', '', $message)) }}</span>
    @enderror
</div>