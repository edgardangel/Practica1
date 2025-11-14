<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PaginaController extends Controller
{
    /**
     * Muestra la página de bienvenida estática
     */
    public function bienvenida(): View
    {
        return view('bienvenida');
    }

    /**
     * Muestra un saludo personalizado basado en el nombre proporcionado
     */
    public function saludo(string $nombre): View
    {
        return view('saludo', ['nombre' => $nombre]);
    }
}
