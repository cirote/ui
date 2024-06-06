<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
    <x-jet-nav-link href="{{ route($route) }}" :active="request()->routeIs($route)">
        {{ $slot }}
    </x-jet-nav-link>
</div>