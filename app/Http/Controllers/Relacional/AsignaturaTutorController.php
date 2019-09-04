<?php

namespace App\Http\Controllers\Relacional;

use App\Http\Controllers\Controller;
use App\Models\Relacional\AsignaturaTutor;
use Illuminate\Http\Request;

class AsignaturaTutorController extends Controller
{
    
     /**
    * @OA\Get(
    *     path="/api/asignaturatutores",
    *     summary="Mostrar todos las asignaturas.",
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
         return AsignaturaTutor::all();
    }


/**
     * @OA\Post(
     *     path="/api/asignaturatutores",
     *     summary="Agregar una nueva relación Asignatura-Tutor.",
     *     operationId="store",
     *         @OA\RequestBody(
     *         description="Ingreso de la información a guardar",
     *         @OA\MediaType(
     *             mediaType="application/x-www-form-urlencoded",
     *             @OA\Schema(
     *                 type="object",
     *                 @OA\Property(
     *                     property="id_asignatura",
     *                     description="ID de la asignatura",
     *                     type="integer"
     *                 ) ,
     *                    @OA\Property(
     *                     property="id_tutor",
     *                     description="ID del tutor",
     *                     type="string"
     *                 ) 
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *          description="Operación realizada correctamente."
     *     ),  
     *     @OA\Response(
     *         response=405,
     *         description="Error en la operación. Ingreso inválido."
     *     )
     * )
     */    
    public function store(Request $request)
    {
        $est= new AsignaturaTutor();
        $est->id_asignatura= $request->get('id_asignatura');
        $est->id_tutor= $request->get('id_tutor');
        $est->save();         
    }

   /**
     * @OA\Get(
     *     path="/api/asignaturatutores/{id}",
     *     summary="Buscar una asignatura por su id",
     *     description="Retorna una asignatura",
     *     operationId="show",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID  de la relación Asignatura-Tutor",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
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
     *         description="Error, provicia no existe"
     *     )
     * )
     *
     */
    public function show($id)
    {
       return AsignaturaTutor::where('_id',$id)->get();
    }

    
     /**
     * @OA\Put(
     *     path="/api/asignaturatutores/{id}",
     *     summary="Actualizar una asignatura-tutor existente",
     *     operationId="update",
     *   @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID de la asignatura actualizar",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *         @OA\RequestBody(
     *         description="Ingreso de la información a actualizar",
     *         @OA\MediaType(
     *             mediaType="application/x-www-form-urlencoded",
     *             @OA\Schema(
     *                 type="object",
     *                 @OA\Property(
     *                     property="id_asignatura",
     *                     description="ID de la asignatura",
     *                     type="integer"
     *                 ) ,
     *                    @OA\Property(
     *                     property="id_tutor",
     *                     description="ID del tutor",
     *                     type="string"
     *                 ) 
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *          description="Actualización realizada correctamente."
     *     ),  
     *
     *     @OA\Response(
     *         response=400,
     *         description="ID Inválido"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Relación no encontrada."
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Error en la operación."
     *     ) 
     * )
     */
    public function update(Request $request,$id)
    {
        $est= AsignaturaTutor::find($id); 
        $est->id_asignatura= $request->get('id_asignatura');
        $est->id_tutor= $request->get('id_tutor');
        $est->save();
    }

    /**
     * @OA\Delete(
     *     path="/api/asignaturatutores/{id}",
     *     summary="Eliminar una asignatura por su id.",
     *     operationId="destroy",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *      ),
     *     @OA\Response(
     *         response=200,
     *         description="Operación realizada correctamente."
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="ID Inválido"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Relación no encontrada"
     *     )
     * )
     */
    public function destroy($id)
    {
       $est= AsignaturaTutor::find($id); 
        $est->delete();
    }
}
