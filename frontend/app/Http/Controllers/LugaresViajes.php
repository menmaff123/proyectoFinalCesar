<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LugaresViajes extends Controller
{
    //
    public function getVuelos()
    {
        $resVuelos = Http::get("http://127.0.0.1:8001/api/lugaresviajes");
        $resLugares = Http::get("http://127.0.0.1:8001/api/lugares");
        $resViajes = Http::get("http://127.0.0.1:8001/api/viajes");
        $vuelos = $resVuelos->json();
        $lugares = $resLugares->json();
        $viajes = $resViajes->json();
        return view('Compra', compact('vuelos', 'lugares', 'viajes'));
    }

    public function agregarCompra(Request $request)
    {
        if ($request['id_lugar'] == null || $request['id_viaje'] == null || $request['Notas'] == null) {
            echo '<script type="text/JavaScript"> window.alert("Revisa que los campos esten completados") </script>';
            echo '<script type="text/JavaScript"> window.location.replace("/compra") </script>';
        } else {
            Http::post("http://127.0.0.1:8001/api/lugaresviajes", $request);
            echo '<script type="text/JavaScript"> window.location.replace("/compra") </script>';
        }
    }

    public function borrarCompra($id)
    {
        Http::delete("http://127.0.0.1:8001/api/lugaresviajes/$id");
        echo '<script type="text/JavaScript"> window.location.replace("/compra") </script>';
    }

    public function actualizarCompra(Request $request, $id)
    {
        Http::put("http://127.0.0.1:8001/api/lugaresviajes/$id", $request);
        echo '<script type="text/JavaScript"> window.location.replace("/compra") </script>';
    }
}
