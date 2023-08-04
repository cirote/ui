@props([
    'route' => 'home',
    'icon' => 'circle'
])

<li class="nav-item">
    <a href="{{ $route }}" class="nav-link">
        <i class="fas fa-{{ $icon }} nav-icon"></i>
        <p>{{ $slot }}</p>
    </a>
</li>