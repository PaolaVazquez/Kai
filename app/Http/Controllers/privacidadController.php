<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class privacidadController extends Controller
{
    public function __invoke(){
        return view('Pagina.terminos');
    }
}
