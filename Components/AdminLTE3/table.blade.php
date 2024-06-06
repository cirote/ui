<table id="example1" class="table table-sm table-bordered table-striped table-hover" role="grid" aria-describedby="example1_info">
    @if (isset($header))
        <thead>
            {{ $header }}
        </thead>
    @endif
    <tbody>
        {{ $slot }}
    </tbody>
    @if (isset($footer))
        <tfoot>
            {{ $footer }}
        </tfoot>
    @endif
</table>

@if (isset($nav))
    {{ $nav }}
@endif
