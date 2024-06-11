<div class="icheck-primary">
    <input type="checkbox" id="{{ $item }}" name="{{ $item }}" value="{{ $item }}" wire:model="{{ $item }}">
    <label for="agreeTerms">
        {{ $slot }}
    </label>
</div>
