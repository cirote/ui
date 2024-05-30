<x-ui-card color='{{ $color ?? "Info"}}'>

    <x-slot name="header">
        {{ $header ?? "" }}
    </x-slot>

    <x-slot name="tools">
        {{ $tools ?? "" }}
    </x-slot>

    {{ $slot }}
    
</x-ui-card>