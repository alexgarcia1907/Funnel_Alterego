<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Petition;
use View;

class PetitionController extends Controller
{
    //

    public function store(Request $request){
        
        $info["nombre"] = $request->input('nombre');
        $info["servicio"] = $request->input('servicio');
        $info["detalles"] = $request->input('explicarmas');
        $info["mensualidad"] = $request->input('mensualidades');
        $info["reservas"] = $request->input('motorreserva');
        $info["email"] = $request->input('email');

        $peticion = new Petition;
        $peticion->nombre = $info["nombre"];
        $servicio = implode(', ', $info["servicio"]);
        $peticion->servicio = $servicio;
        $peticion->detalles = $info["detalles"];

        if ($info["mensualidad"] != null) {
            $mensualidad = implode(', ', $info["mensualidad"]);
            $peticion->mensualidad =  $mensualidad;
        }
        
        $peticion->reservas = $info["reservas"];
        $peticion->email = $info["email"];
        
        $peticion->save();

        dd($info);
        return view('pas2');

        
    }
}
