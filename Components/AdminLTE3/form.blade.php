<form action="" method="get" style="width: 100%;">
    
    {{ $slot }}

    @if (isset($actions))
        <x-ui-row>
            {{ $actions }}
        </x-ui-row>
    @endif
</form>
