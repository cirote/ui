@php ($number = $number ?? 12)
@php ($sm = $sm ?? 12)
@php ($md = $md ?? $sm)

<div class="col-sm-{{ $number }} col-md-{{ $number }}">
    {{ $slot }}
</div>
