@props(['sorteable', 'group'])

<th {{ $attributes->merge(['class' => '', 'rowspan' => '1', 'colspan' => '1']) }} tabindex="0">

    @php($placeholder = trim($slot) ? $slot : ucfirst(strtolower($sorteable ?? '')))
    @php($group = isset($group) ?  $group : '')
    @php($grupo = $group ? 'sort_' . $group . '_by' : 'sort_by')
    @php($orden = $group ? 'sort_' . $group . '_order' : 'sort_order')

    {{ $placeholder }}

    @isset($sorteable)
        <div class="float-sm-right">
            @if(($this->$grupo ?? '') == $sorteable)
                @if(strtoupper($this->$orden) == 'ASC')
                    <button wire:click.prevent="order_desc('{{ $sorteable }}', '{{ $group }}')" style="background-color: transparent; border: none; padding: 0;">
                        <i class="fa fa-arrow-up fa-xs"></i>
                    </button>
                @else
                    <button wire:click.prevent="order_asc('{{ $sorteable }}', '{{ $group }}')" style="background-color: transparent; border: none; padding: 0;">
                        <i class="fa fa-arrow-down fa-xs"></i>
                    </button>
                @endif
            @else
                <button wire:click.prevent="order_desc('{{ $sorteable }}', '{{ $group }}')" style="background-color: transparent; border: none; padding: 0;">
                    <i class="fa fa-arrow-up fa-xs"></i>
                </button>
                <button wire:click.prevent="order_asc('{{ $sorteable }}', '{{ $group }}')" style="background-color: transparent; border: none; padding: 0;">
                    <i class="fa fa-arrow-down fa-xs"></i>
                </button>
            @endif
        </div>
    @endisset
</th>
