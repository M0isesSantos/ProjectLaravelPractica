<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class InicioController extends Controller
{
    public function __invoke(){
        //return "Bienvenido al pagina principal - Practica";
        return view('inicio.blade');
    }
}
