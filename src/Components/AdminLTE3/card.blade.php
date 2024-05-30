{{-- 
    Primary
    Secondary
    Info
    Success
    Warning
    Danger 
    Black
    Gray Dark
    Gray
    Light
    Indigo
    Lightblue
    Navy
    Purple
    Fuchsia
    Pink
    Maroon
    Orange
    Lime
    Teal
    Olive
--}}

@php ($color = str_replace(' ', '-', strtolower($color)) ?? 'gray')

<div class="card card-{{ $color }}">

    @if($header ?? false)
    <div class="card-header">
        <h3 class="card-title">
            {{ $header ?? ''}}
        </h3>
        <div class="card-tools">
            @if($collapse ?? false)
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            @endif
            @if($remove ?? false)
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
            @endif
            @isset ($tools)
            {{ $tools }}
            @endisset
        </div>
    </div>
    @endif

    <div class="card-body">
        {{ $slot }}
    </div>

    @if($footer ?? false)
    <div class="card-footer">
        {{ $footer }}
    </div>
    @endif

</div>