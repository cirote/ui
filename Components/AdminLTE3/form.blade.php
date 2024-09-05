<form action="" method="get">
    <div class="">
        {{ $slot }}
    </div>

    @if (isset($actions))
        <div>
            {{ $actions }}
        </div>
    @endif
</form>
