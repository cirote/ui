<div class="card">

    <div class="card-header">
        <h3 class="card-title">{{ $header ?? '' }}</h3>
        <div class="card-tools">
            @isset ($tools)
                {{ $tools }}
            @endisset
        </div>
    </div>

    <div class="card-body">
        {{ $slot }}
    </div>

</div>
