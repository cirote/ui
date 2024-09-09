@props([
    'href' => '#',
    'type' => 'info',
    'icon' => 'fa-solid fa-shoe-prints',
])

<a href="{{ $href }}" {{ $attributes->merge(['class' => "btn btn-{$type} btn-sm"]) }} > 
    <i class="{{ $icon }}"></i> {{ $slot }}
</a>

