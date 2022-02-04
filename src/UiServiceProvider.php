<?php

namespace Cirote\Ui;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class UiServiceProvider extends ServiceProvider
{
    private $components = [
        'base',
        'banner',
        'layout'
    ];

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/Config/ui.php', 'ui');
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/Components', 'ui');

        foreach($this->components as $component)
        {
            $this->registerComponent($component); 
        }
    }

    protected function registerComponent(string $component)
    {
        Blade::component('ui::' . $component, 'ui-' . $component);
    }
}
