<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class InicioController extends Controller
{
    public function __invoke(){
        return "Esta es mi primera pagina Web Teacher";
    }
}
