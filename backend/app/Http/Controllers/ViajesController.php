<?php

namespace App\Http\Controllers;

use App\Models\Viajes;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Exception as GlobalException;

class ViajesController extends Controller
{

    private function validateRequest()
    {
        return [
            'Nombre' => 'required|String',
            'image' => 'required|String'

        ];
    }

    public function agregar(Request $request)
    {
        try {
            $data = $request->validate($this->validateRequest());
            $viaje = Viajes::create($data);

            return response([
                'message' => 'Se agrego nuevo viaje',
                'id' => $viaje['id']
            ], 201);
        } catch (GlobalException $e) {
            return "Fatal error" . $e->getMessage();
        }
    }

    public function index()
    {
        $viajes = Viajes::with('lugaresviajes')->get();
        return $viajes;
    }

    public function actualizar($id, Request $request)
    {
        $viaje = Viajes::find($id);
        if (!$viaje) {
            return response([
                'message' => 'No existe el viaje con el id ' . $id . ' ',
            ], 404);
        }
        $data = $request->validate($this->validateRequest());

        $viaje->update($data);
        return response([
            'message' => 'El viaje con el id ' . $id . ' fue actualizado',
        ]);
    }

    public function eliminar($id)
    {
        $viaje = Viajes::find($id);
        if (!$viaje) {
            return response([
                'message' => 'No existe el viaje con el id ' . $id . ' ',
            ], 404);
        }
        $viaje->delete();

        return response([
            'message' => 'El viaje con el id ' . $id . ' fue eliminado',
        ]);
    }
}
