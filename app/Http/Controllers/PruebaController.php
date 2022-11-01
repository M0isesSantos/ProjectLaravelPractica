<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function index(){
        return 'Bienvenido es una pagina de Prueba ok';
    }

    public function create(){
        return 'Bienvenido es una pagina de Prueba1';
    }


    public function show($prueba){
        return "Bienvenido al curso $prueba";
    }
}
