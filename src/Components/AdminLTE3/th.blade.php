@props(['sort'])

@php(
    $sort_class = isset($sort)
        ? ($sort == 'asc')
            ? 'sorting_asc'
            : 'sorting_desc'
        : 'sorting'
)
<th {{ $attributes->merge([
        'class'   => $sort_class,
        'rowspan' => "1",
    ]) }} tabindex="0" aria-controls="example1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
    {{ $slot }}
</th>
