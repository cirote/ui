@php ($sm = $sm ?? 12)
@php ($md = $md ?? $sm)

<div class="col-sm-{{ $sm }} col-md-{{ $md }}">
    {{ $slot }}
</div>
