<div class="">
    <div class="small-box">
        <div class="inner">
            <h3>{{ $slot }}</h3>
            <p>{{ $header }}</p>
        </div>
        {{-- More info 
        <i class="fa fa-arrow-circle-right"></i> --}}
        @isset($footer)
            {{ $footer }}
        @else
        <a href="#" class="small-box-footer bg-default">
            &nbsp;
        </a>
        @endisset
    </div>
</div>
