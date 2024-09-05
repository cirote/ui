@props(['sort'])

@php(
$sort_class = isset($sort)
? ($sort == 'asc')
? 'sorting_asc'
: 'sorting_desc'
: 'sorting'
)

<th scope="col" class="px-6 py-3 text-left font-bold text-gray-500 uppercase tracking-wider">
    {{ $slot }}
</th>