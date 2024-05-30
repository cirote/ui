@php($item_sin_punto = str_replace('.', '_', $item))

<div class="form-group @if($errors->has('{{ $item }}')) has-error @endif">
    <label for="{{ $item }}" class="control-label">
        @lang('entradas.f_nota')
    </label>
    <div class="input-group date">
        <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
        </div>
        {{-- <input wire:model.defer="{{ $item }}" id="{{ $item_sin_punto }}" name="{{ $item_sin_punto }}" type="text" class="form-control pull-right" placeholder="@lang('entradas.f_nota_pl')" > --}}
        <input id="{{ $item_sin_punto }}" name="{{ $item_sin_punto }}" type="text" class="form-control pull-right" placeholder="@lang('entradas.f_nota_pl')" >
        {{-- @if(!$isEditable) disabled='' @endif> --}}
    </div>
    @if($errors->has('{{ $item }}'))
        @foreach ($errors->get('{{ $item }}') as $message)
            <span class="help-block">* {{ $message }}</span>
        @endforeach
    @endif
</div>

<script>
    $(function() {
        let value = @this.get('{{ $item }}');
        let fecha = `${value.substring(8, 10)}/${value.substring(5, 7)}/${value.substring(0, 4)}`;
        $("#{{ $item_sin_punto }}").datepicker({
            language: "{{ \App::getLocale() }}",
            format: 'dd/mm/yyyy',
            autoclose: true
        }).datepicker(
            'update', fecha
        ).on('changeDate', function (e) {
            let formattedDate = e.format('dd/mm/yyyy');
            let parts = formattedDate.split('/');
            let isoDate = `${parts[2]}-${parts[1]}-${parts[0]}`;
            @this.set('{{ $item }}', isoDate);
        });
    });
</script>
