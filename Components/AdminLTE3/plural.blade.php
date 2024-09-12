@props([
    'count'    => 0,
    'singular' => 'Vacio',
    'plural'   => null,
    'empty'    => null,
])

@php($count = (int) $count)

@php($singular = ucfirst($singular))

@php($plural = $plural ?? $singular . 's')

@if($count)
    {{ number_format($count, 0, ',', '.') }} {{ ($count == 1) ? $singular : $plural }}
@else
    {{ $empty ?? 'Sin ' . strtolower($plural) }}
@endif
