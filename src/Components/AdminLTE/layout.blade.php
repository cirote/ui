<x-ui-base>
    <x-slot name="banner">
        <x-ui-banner />
    </x-slot>

    <x-slot name="menu">
        @livewire('navigation-menu')
    </x-slot>

    <x-slot name="header">
        {{ $header }}
    </x-slot>

    {{ $slot }}
</x-ui-base>