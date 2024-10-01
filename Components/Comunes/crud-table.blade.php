<x-ui-box>

    <x-slot name="header">
        {{ $title ?? '' }}
    </x-slot>

    @if ($mode == 'TABLE')

        <x-slot name="tools">

            @isset($boxHeader)
                <span style="float:left;">
                    {{ $boxHeader ?? '' }}
                </span>
            @endisset

            <span style="float:left;">
                &nbsp
                &nbsp
            </span>

            @if($model->total() != 0)
                <input wire:model.debounce.500ms="filtro" type="search" name="search" class="form-control form-control-sm rounded-0" placeholder="Buscar"
                    style="float:left; width: 400px" />
                    <x-ui-button wire:click="buscar" class="btn-warning" style="float:left;">
                    <i class="fa fa-search"></i>
                </x-ui-button>
            @endif

            <span style="float:left;">
                &nbsp
                &nbsp
            </span>

            @isset($statics))
                <x-ui-button wire:click="create" class="btn-success" style="float:left;">
                    <i class="fa fa-plus"></i>
                    Crear
                </x-ui-button>
            @endisset

        </x-slot>

        <x-ui-row>

            @if($model->total() == 0)
                No hay registros
            @else
    
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
                        @else
                            {{ $model->links('ui::pagination') }}
                        @endif
                    </x-slot>

                    {{ $slot }}

                </x-ui-table>
                    
            @endif

        </x-ui-row>
    @endif

    @if ($mode == 'EDIT')
        <x-ui-row>
            <x-ui-form>

                {{ $form }}
                
                <x-slot name="actions">
                    @isset ($buttons)
                        {{ $buttons }}
                    @else
                        <x-ui-button-cancel/>
                        &nbsp
                        <x-ui-button-store />
                    @endisset
                </x-slot>

            </x-ui-form>
        </x-ui-row>
    @endif

    @if ($mode == 'CREATE')
        <x-ui-row>
            <x-ui-form>

                {{ $form }}
                
                <x-slot name="actions">
                    @isset ($buttons)
                        {{ $buttons }}
                    @else
                        <x-ui-button-cancel />
                        <x-ui-button-store />
                    @endisset
                </x-slot>

            </x-ui-form>
        </x-ui-row>
    @endif

</x-ui-box>
