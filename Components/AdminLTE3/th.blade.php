@props(['sorteable'])

<th {{ $attributes->merge(['class' => '', 'rowspan' => '1', 'colspan' => '1']) }} tabindex="0">

    @php($placeholder = trim($slot) ? $slot : ucfirst(strtolower($sorteable ?? '')))

    {{ $placeholder }}

    @isset($sorteable)
        <div class="float-sm-right">
            @if(($this->sort_by ?? '') == $sorteable)
                @if(strtoupper($this->sort_order) == 'ASC')
                    <button wire:click.prevent="order_desc('{{ $this->sort_by }}')" style="background-color: transparent; border: none; padding: 0;">
                        <i class="fa fa-arrow-up fa-xs"></i>
                    </button>
                @else
                    <button wire:click.prevent="order_asc('{{ $this->sort_by }}')" style="background-color: transparent; border: none; padding: 0;">
                        <i class="fa fa-arrow-down fa-xs"></i>
                    </button>
                @endif
            @else
                <button wire:click.prevent="order_desc('{{ $sorteable }}')" style="background-color: transparent; border: none; padding: 0;">
                    <i class="fa fa-arrow-up fa-xs"></i>
                </button>
                <button wire:click.prevent="order_asc('{{ $sorteable }}')" style="background-color: transparent; border: none; padding: 0;">
                    <i class="fa fa-arrow-down fa-xs"></i>
                </button>
            @endif
        </div>
    @endisset
</th>
