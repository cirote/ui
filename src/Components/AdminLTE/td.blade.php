@php(
    $sort_class = isset($sort)
        ? ($sort == 'asc')
            ? 'sorting_asc'
            : 'sorting_desc'
        : 'sorting'
)
<td {{ $attributes->merge([
        'class' => '',
        'rowspan' => "1"
    ]) }}>
    {{ $slot }}
</td>