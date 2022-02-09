<?php

namespace Cirote\Ui\Traits;

use Carbon\Carbon;

trait Crud
{
    public $paginate = 5;

    public $message = 'Error';

    public $isOpen = false;

    public $isEditable = false;

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
        Modal
    */

    private function openModal()
    {
        $this->isOpen = true;
    }
    
    public function close()
    {
        $this->closeModal();
    }

    private function closeModal()
    {
        $this->isOpen = false;
    }


    /*
        CRUD General
    */

    public function create()
    {
        $this->resetInputFields();

        $this->openModal();
    }

    public function edit($id)
    {
        $this->model = $this->model_class::findOrFail($id);
  
        //$this->resetInputFields();

        $this->openModal();
    }

    public function store()
    {
        $this->storeAndContinue();
  
        $this->closeModal();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, $this->rules);
    }
}
