<div class="w-full col-span-6 sm:col-span-4">
    <x-jet-label for="current_password" value="{{ $slot }}" />
    <x-jet-input id="current_password" type="text
    " class="mt-1 block w-full" wire:model.defer="{{ $attributes->whereStartsWith('wire:model')->first() }}" autocomplete="current-password" />
    <x-jet-input-error for="current_password" class="mt-2" />
</div>