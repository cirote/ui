@props([
    'route' => 'home',
    'icon' => 'far fa-circle'
])

<li class="nav-item">
    <a href="{{ route($route) }}" class="nav-link">
        <i class="{{ $icon }} nav-icon"></i>
        <p>{{ $slot }}</p>
    </a>
</li>