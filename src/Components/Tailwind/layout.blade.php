<x-ui-base>
    
    <x-slot name="banner">
        <x-jet-banner />
    </x-slot>

    <x-slot name="menu">
        @livewire('navigation-menu')
    </x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $header }}
        </h2>
    </x-slot>

    {{ $slot }}

</x-ui-base>