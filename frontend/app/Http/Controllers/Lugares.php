<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use PHPUnit\Framework\MockObject\Rule\Parameters;

class Lugares extends Controller
{
    //
    public function getLugares()
    {
        $respuesta = Http::get("http://127.0.0.1:8001/api/lugares");
        $lugares = $respuesta->json();
        return view('lugares', compact('lugares'));
    }

    public function agregarLugar(Request $request)
    {
        if ($request['Nombre'] == null || $request['image'] == null || $request['Latitud'] == null || $request['Longitud'] == null || $request['id_poblacion'] == null) {
            echo '<script type="text/JavaScript"> window.alert("Revisa que los campos esten completados") </script>';
            echo '<script type="text/JavaScript"> window.location.replace("/lugares") </script>';
        } else {
            Http::post("http://127.0.0.1:8001/api/lugares", $request);
            echo '<script type="text/JavaScript"> window.location.replace("/lugares") </script>';
        }
    }

    public function borrarLugar($id)
    {
        Http::delete("http://127.0.0.1:8001/api/lugares/$id");
        echo '<script type="text/JavaScript"> window.location.replace("/lugares") </script>';
    }

    public function actualizarLugar(Request $request, $id)
    {
        Http::put("http://127.0.0.1:8001/api/lugares/$id", $request);
        echo '<script type="text/JavaScript"> window.location.replace("/lugares") </script>';
    }
}
