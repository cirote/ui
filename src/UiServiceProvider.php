<?php

namespace Cirote\Ui;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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
        'form',
        'input-text',
        'layout',
        'menu',
        'menu-item',
        'row',
        'table',
        'td',
        'th',
        'tr'
    ];

    private $commons = [
        'crud-table',
        'td-actions'
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
