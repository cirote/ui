<?php

namespace Cirote\Ui;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class UiServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/Config/ui.php', 'ui');
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/Components', 'ui');


            $this->registerComponent('layout');

    }

    protected function registerComponent(string $component)
    {
        Blade::component('ui::' . $component, 'ui-' . $component);
    }
}
