<div class="form-group @if($errors->has($attributes->whereStartsWith('wire:model')->first())) has-error @endif">
    <label for="entrada" class="control-label">
        {{ $slot }}
    </label>
    <input {{ $attributes->merge([
        'class' => 'form-control',
        'type'  => 'text'
    ]) }} id="entrada" placeholder="@lang('entradas.n_entrada_pl')" >
    @if($errors->has($attributes->whereStartsWith('wire:model')->first()))
        @foreach ($errors->get($attributes->whereStartsWith('wire:model')->first()) as $message)
            <span class="help-block">* {{ $message }}</span>
        @endforeach
    @endif
</div>