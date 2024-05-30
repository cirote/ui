<div class="form-group">
    <label for="{{ $item }}" class="control-label">
        {{ $slot }}
    </label>
    <select wire:model.defer="{{ $item }}" id="{{ $item }}" data-placeholder="@lang('entradas.remitentes_pl')" {{ $attributes->merge(['class' => "form-control", 'style' => "width: 100%;"]) }} >
    {{-- @if(! $isEditable) disabled='' @endif> --}}
        <option selected value="">@lang('entradas.remitentes_lista')</option>
        @foreach (App\Models\Activos\Activo::all() as $pais)
            <option value="{{ $pais->id }}">{{ $pais->denominacion }}</option>
        @endforeach
    </select>
</div>
