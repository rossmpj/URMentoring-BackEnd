<?php

namespace App\Http\Controllers\NoRelacional;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NoRelacional\Historico;

class HistoricoController extends Controller
{
     /**
    * @OA\Get(
    *     path="/api/historicos",
    *     summary="Mostrar todos los datos.",
    *     @OA\Response(
    *         response=200,
    *         description="Operación realizada correctamente."
    *     ),
    *     @OA\Response(
    *         response="default",
    *         description="Lo sentimos, ha ocurrido un error."
    *     )
    * )
    */
    public function index()
    {
        return Historico::all();
    }

    public function show($id_tutor)
    {
         return Historico::where('id_tutor',$id_tutor)
         ->select('id_asignatura', 'nombre_asignatura')
         ->get();
    }
}