@props([
    'type' => 'primary'
])

<button {{ $attributes->merge(['class' =>"btn btn-{$type} btn-sm"]) }}> 
    {{ $slot }}
</button>
