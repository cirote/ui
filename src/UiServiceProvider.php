<?php

namespace Cirote\Ui;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Pagination\Paginator;

class UiServiceProvider extends ServiceProvider
{
    private $components = [
        'banner',
        'base',
        'box',
        'button',
        'button-cancel',
        'button-edit',
        'button-store',
        'card',
        'col',
        'form',
        'input-text',
        'layout',
        'librerias',
        'menu',
        'menu-item',
        'row',
        'select',
        'table',
        'tarjeta',
        'td',
        'th',
        'tr'
    ];

    private $commons = [
        'crud-table',
        'td-actions',
        'ntd'
    ];

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/Config/ui.php', 'ui');
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/Components/' . config('ui.stack'), 'ui');
        
        $this->registerComponents($this->components, 'ui'); 

        $this->loadViewsFrom(__DIR__ . '/Components/Comunes', 'uic');

        $this->registerComponents($this->commons, 'uic'); 

        Paginator::defaultView('ui::pagination');
    }

    protected function registerComponents(array $components, string $path)
    {
        foreach($components as $component)
        {
            $this->registerComponent($component, $path); 
        }
    }

    protected function registerComponent(string $component, string $path)
    {
        Blade::component($path . '::' . $component, 'ui-' . $component);
    }
}
