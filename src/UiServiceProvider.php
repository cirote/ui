<?php

namespace Cirote\Ui;

use Illuminate\Support\ServiceProvider;

class UiServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/Config/ui.php', 'ui');
    }

    public function boot()
    {

    }
}
