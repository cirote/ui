<x-ui-card header='{{ $header ?? "" }}' color='{{ $color ?? "Info"}}' tools='{{ $tools ?? ""}}'>
    {{ $slot }}
</x-ui-card>