<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function p(){
        //return 'Bienvenido a la pagina principal de prueba';
        return view('pruebas.p');
    }

    public function p1(){
        //return 'Bienvenido es una pagina de Prueba1';
        return view('pruebas.p1');
    }
    
    public function create(){
        //return 'Bienvenido es una pagina de Prueba1';
        return view('pruebas.create');
    }

    public function p2($prueba){
        //return "Bienvenido al curso $prueba";

        return view('pruebas.p2', compact('prueba'));
         //['prueba' => $prueba] podemos pasarlo como array
         //si tenemos las misma variables con metodo compact

        //return view('pruebas.p2', ['prueba' => $prueba]);
    }
}
