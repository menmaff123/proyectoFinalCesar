<?php

namespace App\Http\Controllers;

use App\Models\Lugares_Viajes;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Lugares_ViajesController extends Controller
{

    private function validateRequest()
    {
        return [
            'Notas' => 'required|String',
            'id_lugar' => 'required|numeric',
            'id_viaje' => 'required|numeric'
        ];
    }

    public function agregar(Request $request)
    {
        try {
            $data = $request->validate($this->validateRequest());
            $lv = Lugares_Viajes::create($data);

            return response([
                'message' => 'Se agrego nuevo lugar_viaje',
                'id' => $lv['id']
            ], 201);
        } catch (Exception $e) {
            return "Fatal error" . $e->getMessage();
        }
    }

    public function index()
    {
        $lv = Lugares_Viajes::with('lugar')->with('viaje')->get();
        return $lv;
    }

    public function actualizar($id, Request $request)
    {
        $lv = Lugares_Viajes::find($id);
        if (!$lv) {
            return response([
                'message' => 'No existe el lugar_viaje con el id ' . $id . ' ',
            ], 404);
        }
        $data = $request->validate($this->validateRequest());

        $lv->update($data);
        return response([
            'message' => 'El lugar_viaje con el id ' . $id . ' fue actualizado',
        ]);
    }

    public function eliminar($id)
    {
        $lv = Lugares_Viajes::find($id);
        if (!$lv) {
            return response([
                'message' => 'No existe el lugar_viaje con el id ' . $id . ' ',
            ], 404);
        }
        $lv->delete();

        return response([
            'message' => 'El lugar_viaje con el id ' . $id . ' fue eliminado',
        ]);
    }
}
