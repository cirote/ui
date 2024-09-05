@php
    $style = isset($number) || isset($date) ? 'text-align:right' : '';
    $class = isset($number) && floatval($number) < 0 ? 'text-danger' : '';
    $decimales = $decimals ?? 2;
@endphp

<td {{ $attributes->merge(['style' => $style, 'class' => $class, 'rowspan' => 1]) }}>
    @if(isset($number))
        {{ number_format(floatval($number), $decimales, ',', '.') }}
    @elseif(isset($date))
        {{ $date->format('d/m/Y') }}
    @elseif(isset($link))
        <a target="_blank" href="{{ $link }}">{{ $text ?? $link }} {{ $slot }}</a>
    @else
        {{ $text ?? '' }}{{ $slot }}
    @endif
</td>
