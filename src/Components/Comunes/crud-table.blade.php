<x-ui-box>
    @if(! $isOpen)
    <x-ui-row>
        <x-ui-table>

            @if (isset($header))
            <x-slot name="header">
                {{ $header }}
            </x-slot>
            @endif

            {{ $slot }}

        </x-ui-table>
    </x-ui-row>
    @else
    <x-ui-row>
        <form class="">
            <x-ui-row>
                {{ $form }}
            </x-ui-row>

            <x-ui-row>
                {{ $buttons }}
            </x-ui-row>
        </form>
    </x-ui-row>
    @endif
</x-ui-box>