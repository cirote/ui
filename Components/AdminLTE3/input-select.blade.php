<div wire:ignore class="form-group">
    <label for="{{ $item }}" class="control-label">
        {{ $slot }}
    </label>
    <select wire:model.defer="{{ $item }}" id="{{ $item }}" data-placeholder="@lang('entradas.remitentes_pl')"
        {{ $attributes->merge(['class' => 'form-control', 'style' => 'width: 100%;']) }}>
        <option value="" disabled>Elija una opción</option>
        @foreach (array_map(function ($item) { return explode(':', $item); }, explode('|', $options)) as $opcion)
            <option value="{{ $opcion[0] }}">{{ $opcion[1] }}</option>
        @endforeach
    </select>
</div>
