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
        <x-ui-form submit="updatePassword">

            <x-slot name="actions">
                {{ $buttons }}
            </x-slot>

            {{ $form }}

        </x-ui-form>
    </x-ui-row>
    @endif
</x-ui-box>