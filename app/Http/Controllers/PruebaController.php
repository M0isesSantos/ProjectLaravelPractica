<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function p(){
        return ('Bienvenido es una pagina de Prueba ok');
    }

    public function p1(){
        return ('Bienvenido es una pagina de Prueba1');
    }


    public function p2(){
        return ('Bienvenido es una pagina de Prueba2');
    }
}
