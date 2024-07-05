<div class="col-6">
    Filas {{ $paginator->toArray()['from'] }} a la {{ $paginator->toArray()['to'] }} de {{ $paginator->total() }}
</div>

<div class="col-6 dataTables_paginate paging_simple_numbers">
    @if ($paginator->hasPages())

        <ul class="pagination" style="float: right">

            @if ($paginator->onFirstPage())
                <li class="paginate_button page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Primera</a>
                </li>
            @else
                <li class="paginate_button page-item">
                    <a wire:click.prevent="gotoPage(1)" class="page-link" href="">Primera</a>
                </li>
                <li class="paginate_button page-item">
                    <a wire:click.prevent="previousPage" class="page-link" href="">Anterior</a>
                </li>
            @endif

            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="page-item disabled">{{ $element }}</li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active">
                                <a wire:click.prevent="gotoPage({{ $page }})" class="page-link" href="">{{ $page }}</a>
                            </li>
                        @else
                            <li class="page-item">
                                <a wire:click.prevent="gotoPage({{ $page }})" class="page-link" href="">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                <li class="paginate_button page-item">
                    <a wire:click.prevent="nextPage" class="page-link" href="" rel="next">Siguiente</a>
                </li>
                <li class="paginate_button page-item">
                    <a wire:click.prevent="gotoPage({{ $paginator->lastPage() }})" class="page-link" href="" rel="next">Última</a>
                </li>
            @else
                <li class="paginate_button page-item disabled">
                    <a class="page-link" href="#">Última</a>
                </li>
            @endif

        </ul>

    @endif
</div>
