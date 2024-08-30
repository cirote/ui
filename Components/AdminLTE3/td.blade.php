@php(
    $style = isset($number) || isset($date)
        ? 'text-align:right'
        : ''
)

@php(
    $class = isset($number) && floatval($number) < 0
        ? 'text-danger'
        : ''
)

@php(
    $decimales = isset($decimals) ? floatval($decimals) : 2
)

<td {{ $attributes->merge([
        'style' => $style,
        'class' => $class,
        'rowspan' => "1"
    ]) }}>

    @isset($number)
        {{ number_format(floatval($number), $decimales, ',', '.') }}
    @else
        @isset($date)
            {{ $date->format('d/m/Y') }}
        @else
            @isset($link)
                <a target="_blank" href="{{ $link }}">{{ $text ?? ($link ?? '') }} {{ $slot }}</a>
            @else
                {{ $text ?? '' }}
                {{ $slot }}
            @endisset
        @endisset
    @endisset
</td>