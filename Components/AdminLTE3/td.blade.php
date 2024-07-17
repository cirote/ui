@php(
    $style = isset($number)
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
        {{ $slot }}
    @endisset
</td>