@props([
    'title'
])

<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-chart-pie"></i>
        <p>
            {{ $title ?? 'Falta el titulo' }}
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>

    <ul class="nav nav-treeview">
        {{ $slot }}
    </ul>
</li>