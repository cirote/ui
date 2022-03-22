<x-ui-box>

    @if(! $isOpen)

    <x-ui-row>
        @if (isset($main_header))
        {{ $main_header }}
        @endif

        <x-ui-table>

            <x-slot name="header">
                @if (isset($header))
                {{ $header }}
                @endif
                <x-ui-row>
                    <x-ui-button wire:click="create" class="btn-success">Crear</x-ui-button>
                </x-ui-row>
            </x-slot>

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