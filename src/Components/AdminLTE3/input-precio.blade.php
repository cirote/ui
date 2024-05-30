<div class="form-group">
    <label for="{{ $item }}" class="control-label">
        {{ $slot }}
    </label>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">$</span>
        </div>
        <input type="text" wire:model.defer="{{ $item }}" id='{{ $item }}' class="form-control" onkeypress="return /[.0-9]/i.test(event.key)">
        <div class="input-group-append">
            <span class="input-group-text">.00</span>
        </div>
    </div>
</div>