<div class="">
    <div class="small-box">
        <div class="inner">
            <h3>{{ $slot }}</h3>
            <p>{{ $title ?? '' }}</p>
        </div>
        <a href="{{ $href ?? '#' }}" class="small-box-footer bg-{{ $bgColor ?? 'default' }}">
            <span class="text-muted">
                {{ $footer ?? '&nbsp;' }}
                @isset($icon)
                    <i class="{{ $icon }}"></i>
                @endisset
            </span>
        </a>
    </div>
</div>
