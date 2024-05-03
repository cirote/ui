<?php

namespace Cirote\Ui;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Pagination\Paginator;

class UiServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/Config/ui.php', 'ui');
    }

    public function boot()
    {
        $this->registrar_directorio(__DIR__ . '/Components/' . config('ui.stack'), 'ui');

        $this->registrar_directorio(__DIR__ . '/Components/Comunes', 'uic');

        Paginator::defaultView('ui::pagination');
    }

    protected function registrar_directorio(string $directorio, string $path)
    {
        $this->loadViewsFrom($directorio, $path);

        $this->registrar_componentes(array_diff(scandir($directorio), ['.', '..']), $path); 
    }

    protected function registrar_componentes(array $componentes, string $path)
    {
        foreach($componentes as $componente)
        {
            $this->registrar_componente(str_replace('.blade.php', '', $componente), $path); 
        }
    }

    protected function registrar_componente(string $componente, string $path)
    {
        Blade::component($path . '::' . $componente, 'ui-' . $componente);
    }
}
