<table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
    @if (isset($header))
    <thead>
        {{ $header }}
    </thead>
    @endif
    <tbody>
        <tr role="row" class="odd">
            {{ $slot }}
        </tr>
    </tbody>
    <tfoot>
        {{ $header }}
    </tfoot>
</table>