<?php

namespace Cirote\Ui\Traits;

trait Ordenable
{
    public $sort_by = 'id';

    public $sort_order = 'asc';

    public function order_asc($sort_by)
    {
        $this->sort_by = $sort_by;

        $this->sort_order = 'asc';
    }

    public function order_desc($sort_by)
    {
        $this->sort_by = $sort_by;

        $this->sort_order = 'desc';
    }
}