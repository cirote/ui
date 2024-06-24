<?php

namespace Cirote\Ui\Traits;

use Carbon\Carbon;

trait Crud
{
    public $paginate = 10;

    public $message = 'Error';

    public $mode = 'TABLE';

    public $isEditable = true;

    public $archivo_tag = 'archivo';

    public $archivos = [];

    public $model;

    /*
        Filtro
    */

    public $filtro;

    public function updatingFiltro()
    {
        // $this->resetPage();
    }


    /*
        Filtro
    */

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


    /*
        CRUD General
    */

    public function create()
    {
        $this->model = new $this->model_class();
        
        $this->initial_values();

        $this->mode = 'CREATE';
    }

    public function initial_values()
    {
        
    }

    public function edit($id)
    {
        $this->model = $this->model_class::findOrFail($id);

        $this->mode = 'EDIT';
    }

    public function store()
    {
        $this->validate();
        
        $this->model->save();
  
        $this->mode = 'TABLE';
    }

    public function close()
    {
        $this->mode = 'TABLE';
    }

    public function updated($propertyName)
    {   
        // $metodo = 'validar_' . str_replace('.', '_', $propertyName);

        // if (method_exists($this, $metodo))
        // {
        //     $this->$metodo($propertyName);
        // }

        $this->validateOnly($propertyName, $this->rules);
    }
}
