<?php

namespace App\View\Components\adminlte\layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class App extends Component
{
    private $parametr = [
        'clasnavb' => '', // Clase para la barra de navegación (valor inicial: cadena vacía)
        'clasbody' => 'sidebar-mini layout-fixed', // Clase para el cuerpo (valor inicial: espacio en blanco)
        'jstempla' => [], // Plantillas JS (valor inicial: arreglo vacío)
        'csstempl' => [], // Plantillas CSS (valor inicial: arreglo vacío)
        'navbarxx' => 'layouts.adminlte.navbars.navbar', // Ruta de la plantilla de la barra de navegación
        'breadcru' => [ // Configuración para las migas de pan
            'activexx' => '', // Clase activa para el elemento actual de las migas de pan
            'linkxxxx' => [ // Enlaces de las migas de pan
                ['tituloxx' => 'Home', 'activexx' => ''], // Título y clase activa para el enlace de inicio
            ],
        ],
        'template' => 'layouts.adminlte.template', // Ruta de la plantilla general
        'sectionx' => false // Indicador de sección (valor inicial: falso)
    ];
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.adminlte.layout.app',$this->parametr);
    }
}
