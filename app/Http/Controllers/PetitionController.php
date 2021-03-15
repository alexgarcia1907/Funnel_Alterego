<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Petition;

class PetitionController extends Controller
{
    //

    public function store(Request $request){
        
        $info["nombre"] = $request->input('nombre');
        if ($request->has('servicio0')) {
            $info["servicios"][] = $request->input('servicio0');
        }
        if ($request->has('servicio1')) {
            $info["servicios"][] = $request->input('servicio1');
        }
        if ($request->has('servicio2')) {
            $info["servicios"][] = $request->input('servicio2');
        }
        if ($request->has('servicio3')) {
            $info["servicios"][] = $request->input('servicio3');
        }
        if ($request->has('servicio4')) {
            $info["servicios"][] = $request->input('servicio4');
        }
        if ($request->has('servicio5')) {
            $info["servicios"][] = $request->input('servicio5');
        }
        if ($request->has('servicio6')) {
            $info["servicios"][] = $request->input('servicio6');
        }

        $peticion = new Petition;
        $peticion->nombre = $info["nombre"];
        $servicio = implode(', ', $info["servicios"]);

        $peticion->servicio = $servicio;        
        $peticion->save();
    }
}
