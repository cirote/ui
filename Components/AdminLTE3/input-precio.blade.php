<div class="form-group">
    <label for="{{ $item }}" class="control-label">
        <span class="@error($item) text-danger @enderror">{{ $slot }}</span>
    </label>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text @error($item) is-invalid @enderror">$</span>
        </div>
        <input type="text" wire:model="{{ $item }}" id='{{ $item }}' class="form-control @error($item) is-invalid @enderror" onkeypress="return /[.0-9]/i.test(event.key)">
        <div class="input-group-append">
            <span class="input-group-text @error($item) is-invalid @enderror">.00</span>
        </div>
    </div>
    @error($item)
        <span class="text-danger">* {{ ucfirst(str_replace('.', '', $message)) }}</span>
    @enderror
</div>