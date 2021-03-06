<x-ui-box>
    <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
        @if(! $isOpen)
        <div class="row">
            <div class="col-sm-6">
                <div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select> entries</label></div>
            </div>
            <div class="col-sm-6">
                <div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label></div>
                <button wire:click="create" type="button" class="btn btn-warning" data-dismiss="modal">Crear</button>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <x-ui-table>
                    @if (isset($header))
                    <x-slot name="header">
                        {{ $header }}
                    </x-slot>
                    @endif
                   
                    {{ $slot }}
                    
                </x-ui-table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5">
                <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
            </div>
            <div class="col-sm-7">
                <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                    <ul class="pagination">
                        <li class="paginate_button previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a></li>
                        <li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a></li>
                        <li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a></li>
                        <li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3</a></li>
                        <li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4</a></li>
                        <li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5</a></li>
                        <li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">6</a></li>
                        <li class="paginate_button next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
        @else
        <form class="">
            <div class="row">
                <div class="col-lg-6">
                    {{ $form }}
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    {{ $buttons }}
                </div>
            </div>
        </form>
        @endif
    </div>
</x-ui-box>