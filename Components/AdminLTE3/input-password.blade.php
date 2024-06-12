<x-ui-input item='{{ $item }}' type="password" placeholder='{{ $placeholder ?? "" }}' icon='<i class="fa fa-lock fa-fw"></i>'>
    {{ $slot }}
</x-ui-input>