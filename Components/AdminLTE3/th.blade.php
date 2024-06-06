@props(['sorteable', 'sortby', 'sortorder'])

<th {{ $attributes->merge([
        'class'   => '',
        'rowspan' => "1",
    ]) }} tabindex="0" colspan="1">

    {{ $slot }}
    @isset($sorteable)
        @if(($sortby ?? '') == $sorteable)
            @if(strtoupper($sortorder) == 'ASC')
                <div class="float-sm-right">
                    <button wire:click.prevent="order_desc('{{ $sortby }}')" style="background-color: transparent; border: none; padding: 0;">
                        <i class="fa fa-arrow-down fa-xs"></i>
                    </button>
                <div>
            @else
                <div class="float-sm-right">
                    <button wire:click.prevent="order_asc('{{ $sortby }}')" style="background-color: transparent; border: none; padding: 0;">
                        <i class="fa fa-arrow-up fa-xs"></i>
                    </button>
                <div>
            @endif
        @else
            <div class="float-sm-right">
                <button wire:click.prevent="order_desc('{{ $sorteable }}')" style="background-color: transparent; border: none; padding: 0;">
                    <i class="fa fa-arrow-down fa-xs"></i>
                </button>
                <button wire:click.prevent="order_asc('{{ $sorteable }}')" style="background-color: transparent; border: none; padding: 0;">
                    <i class="fa fa-arrow-up fa-xs"></i>
                </button>
            <div>
        @endif
    @endisset
</th>
