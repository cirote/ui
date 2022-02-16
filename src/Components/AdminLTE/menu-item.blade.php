<li class="{{ (Request::routeIs(route($route))) ? 'active' : '' }}">
    <a href="{{ route($route, [], false) }}">
        <span style="font-size: 16px;">
            {{ $slot }}
        </span>
    </a>
</li>