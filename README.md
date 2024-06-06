# ui
Interface de usuario

## Instalacion

Agregar en composer.json

```
   "repositories": [
        {
            "type": "vcs",
            "url": "git@github.com:cirote/ui.git"
        }
    ],
    "require": {
        "cirote/ui": "dev-main"
    },
   "minimum-stability": "dev"
```

Ejecutar
```
composer require cirote/ui
```

```
ln -s -r -t public/ ./vendor/almasaeed2010/adminlte/dist
```
```
ln -s -r -t public/ ./vendor/almasaeed2010/adminlte/plugins
```
## Elementos de la interface

### Elementos de Layout

#### Layout

```
<x-ui-layout>

    <x-slot name="header">
        Titulo
    </x-slot>

   Contenido

</x-ui-layout>
```

### Elementos de Menú

#### Layout

```
<x-ui-layout>

    <x-slot name="header">
        Titulo
    </x-slot>

   Contenido

</x-ui-layout>
```

### Elementos varios

#### Layout

```
<x-ui-layout>

    <x-slot name="header">
        Titulo
    </x-slot>

   Contenido

</x-ui-layout>
```
