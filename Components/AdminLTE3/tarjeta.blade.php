<div class="">
    <div class="small-box">
        <div class="inner">
            <h3>{{ $slot }}</h3>
            {{ $title ?? '' }}
        </div>
        <a href="{{ $href ?? '#' }}" class="small-box-footer bg-{{ $bgColor ?? 'default' }}">
            <span class="{{ isset($bgColor) ? '' : 'text-muted' }}">
                @isset($footer)
                    {{ $footer }}
                @endisset
                &nbsp;
                @isset($icon)
                    <i class="{{ $icon }}"></i>
                @endisset
            </span>
        </a>
    </div>
</div>
