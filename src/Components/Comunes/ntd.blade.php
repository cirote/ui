@php($value = (double) $value)

<x-ui-ntd {{ $attributes }}>
    {{ number_format($numero, 2, ',', '.') }}
</x-ui-ntd>
