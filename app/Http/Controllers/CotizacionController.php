<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\CotizacionMail;
use Illuminate\Support\Facades\Mail;

class CotizacionController extends Controller
{
    public function enviar(Request $request)
    {
        //dd($request->all());

        // Validación solo de los campos FIJOS
        $request->validate([
            'nombre' => 'required',
            'telefono' => 'required',
            'comentarios' => 'required'
        ]);

        // ------ CAPTURAR CAMPOS DINÁMICOS ------
        $productos = [];

        foreach ($request->all() as $key => $value) {

            // Detectar nombres tipo:
            // persiana1_ancho
            // cortina2_tela
            // piso3_alto
            if (preg_match('/^(persiana|cortina|piso|pasto|papel)(\d+)_(\w+)$/', $key, $m)) {

                $tipo = $m[1];      // persiana, cortina, piso, etc.
                $numero = $m[2];    // 1, 2, 3, ...
                $campo = $m[3];     // ancho, alto, tela, privacidad...

                // Crear objeto por cada producto
                $productos[$numero]['tipo'] = $tipo;
                $productos[$numero][$campo] = $value;
            }
        }

        // Ordenar productos por número
        ksort($productos);

        // ----- ENVIAR MAIL -----
        Mail::to('paola.vazquezr98@gmail.com')->send(
            new CotizacionMail($request->all(), $productos)
        );

       return redirect()->back()->with('success', true);


    }
}
