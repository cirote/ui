<x-ui-box>

    <x-slot name="header">
        {{ $title ?? '' }}
    </x-slot>

    @if ($mode == 'TABLE')

        <x-slot name="tools">
            <input type="text" name="search" class="form-control form-control-sm" placeholder="Buscar"
                style="float:left; width: 400px">
            &nbsp
            <x-ui-button wire:click="create" class="btn-success">
                <i class="fa fa-plus"></i>
                Crear
            </x-ui-button>
        </x-slot>

        <x-ui-row>
            @if (isset($main_header))
                {{ $main_header }}
            @endif

            <x-ui-table>

                <x-slot name="header">
                    @if (isset($header))
                        {{ $header }}
                    @endif
                </x-slot>

                <x-slot name="footer">
                    @if (isset($footer))
                        {{ $footer }}
                    @endif
                </x-slot>

                <x-slot name="nav">
                    @if (isset($nav))
                        {{ $nav }}
                    @endif
                </x-slot>

                {{ $slot }}

            </x-ui-table>
        </x-ui-row>
    @endif

    @if ($mode == 'EDIT')
        <x-ui-row>
            <x-ui-form>

                {{ $form }}
                
                <x-slot name="actions">
                    {{ $buttons }}
                </x-slot>

            </x-ui-form>
        </x-ui-row>
    @endif

</x-ui-box>
