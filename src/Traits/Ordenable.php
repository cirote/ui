<?php

namespace Cirote\Ui\Traits;

trait Ordenable
{
    public $sort_by = 'id';

    public $sort_order = 'asc';

    public function order_asc($sort_by, $group = null)
    {
        $this->apply_order($group, $sort_by, 'asc');
    }

    public function order_desc($sort_by, $group = null)
    {
        $this->apply_order($group, $sort_by, 'desc');
    }

    protected function apply_order($grupo, $variable, $orden)
    {
        $variable_grupo = $grupo ? "sort_" . $grupo . "_by"    : "sort_by";

        $variable_orden = $grupo ? "sort_" . $grupo . "_order" : "sort_order";

        $this->$variable_grupo = $variable;

        $this->$variable_orden = $orden;
    }
}