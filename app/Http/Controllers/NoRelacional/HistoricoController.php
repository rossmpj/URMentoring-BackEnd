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

    /**
     * @OA\Get(
     *     path="/api/historicos/{materia}",
     *     summary="Buscar registros dada una materia impartida por un tutor, ordenados por su nivel de experiencia",
     *     description="Retorna registro del histórico",
     *     operationId="show",
     *     @OA\Parameter(
     *         name="materia",
     *         in="path",
     *         description="Nombre de la asignatura",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Operación realizada correctamente."
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Error en la operación."
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Error, recurso no encontrado"
     *     )
     * )
     *
     */
    public function show($materia)
    {
         return Historico::where('nombre_asignatura',$materia)
         ->orderBy('experiencia', 'desc')
         ->get();
    }
}