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
        $this->resetPage();
    }


    /*
        CRUD General
    */

    public function create()
    {
        $this->model = new $this->model_class();

        $this->mode = 'CREATE';
    }

    public function edit($id)
    {
        $this->model = $this->model_class::findOrFail($id);

        $this->mode = 'EDIT';
    }

    public function store()
    {
        $this->model->save();
  
        $this->mode = 'TABLE';
    }

    public function close()
    {
        $this->mode = 'TABLE';
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, $this->rules);
    }
}
