<div class="form-group">
    <label for="{{ $item }}" class="control-label">
        @lang('entradas.remitente')
    </label>
    <select wire:model.defer="{{ $item }}" id="{{ $item }}" class="form-control" style="width: 100%;" data-placeholder="@lang('entradas.remitentes_pl')" >
    {{-- @if(! $isEditable) disabled='' @endif> --}}
        <option selected value="">@lang('entradas.remitentes_lista')</option>
        @foreach (App\Models\Activos\Activo::all() as $pais)
            <option value="{{ $pais->id }}">{{ $pais->denominacion }}</option>
        @endforeach
    </select>
</div>
