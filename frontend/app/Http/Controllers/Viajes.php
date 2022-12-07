<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Viajes extends Controller
{
    //
    public function getViajes()
    {
        $respuesta = Http::get("http://127.0.0.1:8001/api/viajes");
        $viajes = $respuesta->json();
        return view('viajes', compact('viajes'));
    }

    public function agregarViaje(Request $request)
    {
        if ($request['Nombre'] == null || $request['image'] == null) {
            echo '<script type="text/JavaScript"> window.alert("Revisa que los campos esten completados") </script>';
            echo '<script type="text/JavaScript"> window.location.replace("/viajes") </script>';
        } else {
            Http::post("http://127.0.0.1:8001/api/viajes", $request);
            echo '<script type="text/JavaScript"> window.location.replace("/viajes") </script>';
        }
    }

    public function borrarViaje($id)
    {
        Http::delete("http://127.0.0.1:8001/api/viajes/$id");
        echo '<script type="text/JavaScript"> window.location.replace("/viajes") </script>';
    }

    public function actualizarViaje(Request $request, $id)
    {
        Http::put("http://127.0.0.1:8001/api/viajes/$id", $request);
        echo '<script type="text/JavaScript"> window.location.replace("/viajes") </script>';
    }
}
