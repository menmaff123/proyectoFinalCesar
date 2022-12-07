<?php

namespace App\Http\Controllers;

use App\Models\Lugares;
use Illuminate\Http\Request;
use App\Http\Controllers\Exception;
use Exception as GlobalException;


class LugaresController extends Controller
{

    private function validateRequest()
    {
        return [
            'Nombre' => 'required|String',
            'Latitud' => 'required|String',
            'Longitud' => 'required|String',
            'id_poblacion' => 'required|numeric',
            'image' => 'required|String'
        ];
    }

    public function agregar(Request $request)
    {
        try {
            $data = $request->validate($this->validateRequest());
            $lugar = Lugares::create($data);

            return response([
                'message' => 'Se agrego nuevo lugar',
                'id' => $lugar['id']
            ], 201);
        } catch (GlobalException $e) {
            return "Fatal error" . $e->getMessage();
        }
    }

    public function index()
    {
        $lugares = Lugares::with('lugaresviajes')->get();
        return $lugares;
    }

    public function actualizar($id, Request $request)
    {
        $lugar = Lugares::find($id);
        if (!$lugar) {
            return response([
                'message' => 'No existe el lugar con el id ' . $id . ' ',
            ], 404);
        }
        $data = $request->validate($this->validateRequest());

        $lugar->update($data);
        return response([
            'message' => 'El lugar con el id ' . $id . ' fue actualizado',
        ]);
    }

    public function eliminar($id)
    {
        $lugar = Lugares::find($id);
        if (!$lugar) {
            return response([
                'message' => 'No existe el lugar con el id ' . $id . ' ',
            ], 404);
        }
        $lugar->delete();

        return response([
            'message' => 'El lugar con el id ' . $id . ' fue eliminado',
        ]);
    }
}
