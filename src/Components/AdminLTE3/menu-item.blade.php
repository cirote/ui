@props([
    'href' => 'ggg',
    'icon' => 'ggg'

])

<li class="nav-item">
    <a href="{{ $href }}" class="nav-link">
        <i class="far fa-{{ $icon }} nav-icon"></i>
        <p>{{ $slot }}</p>
    </a>
</li>