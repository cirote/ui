<div class="form-group @if($errors->has('{{ $item }}')) has-error @endif">
    <label for="{{ $item }}" class="control-label">
        @lang('entradas.f_nota')
    </label>
    <div class="input-group date">
        <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
        </div>
        <input wire:model="{{ $item }}" id="{{ $item }}" name="{{ $item }}" type="text" class="form-control pull-right" placeholder="@lang('entradas.f_nota_pl')" >
        {{-- @if(!$isEditable) disabled='' @endif> --}}
    </div>
    @if($errors->has('{{ $item }}'))
        @foreach ($errors->get('{{ $item }}') as $message)
            <span class="help-block">* {{ $message }}</span>
        @endforeach
    @endif
</div>