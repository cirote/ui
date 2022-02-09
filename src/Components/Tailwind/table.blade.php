<table class="min-w-full divide-y divide-gray-200">
    @if (isset($header))
    <thead class="bg-gray-50">
        {{ $header }}
    </thead>
    @endif
    <tbody class="bg-white divide-y divide-gray-200">
        <tr role="row" class="odd">
            {{ $slot }}
        </tr>
    </tbody>
    <tfoot class="bg-gray-50">
        {{ $header }}
    </tfoot>
</table>
