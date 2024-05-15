<x-ui-base>

    <x-slot name="banner">
        <x-ui-banner />
    </x-slot>

    <x-slot name="brand">
        @includeFirst(['brand', 'ui::brand'])
    </x-slot>

    <x-slot name="user">
        @includeFirst(['user', 'ui::user'])
    </x-slot>

    <x-slot name="menu">
        @includeFirst(['menu', 'ui::menu'])
    </x-slot>

    <x-slot name="header">
        {{ $header }}
    </x-slot>

    {{ $slot }}

</x-ui-base>
