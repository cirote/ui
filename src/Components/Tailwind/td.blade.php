@php(
    $sort_class = isset($sort)
        ? ($sort == 'asc')
            ? 'sorting_asc'
            : 'sorting_desc'
        : 'sorting'
)
<td {{ $attributes->merge([
        'class' => 'px-6 py-4 whitespace-nowrap',
        'rowspan' => "1"
    ]) }}>
    {{ $slot }}
</td>