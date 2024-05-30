<div class="form-group">
    <label for="{{ $item }}" class="control-label">
        @lang('{{ $slot }}') jeje
    </label>
    <div class="input-group-prepend">
        <span class="input-group-text">$</span>
    </div>
    <input type="text" wire:model.defer="{{ $item }}" id='{{ $item }}' class="form-control">
    <div class="input-group-append">
        <span class="input-group-text">.00</span>
    </div>
</div>