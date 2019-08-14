<?php

namespace App\Http\Controllers\Relacional;

use App\Http\Controllers\Controller;
use App\Models\Relacional\Asignatura;
use Illuminate\Http\Request;


class AsignaturaController extends Controller
{
    
     /**
    * @OA\Get(
    *     path="/api/asignaturas",
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
       return Asignatura::all();
    }

     /**
     * @OA\Post(
     *     path="/api/asignaturas",
     *     summary="Agregar una nueva Asignatura.",
     *     operationId="store",
     *         @OA\RequestBody(
     *         description="Ingreso de la información a guardar",
     *         @OA\MediaType(
     *             mediaType="application/x-www-form-urlencoded",
     *             @OA\Schema(
     *                 type="object",
     *                 @OA\Property(
     *                     property="nomre",
     *                     description="Nombre de la asignatura",
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
        $est= new Asignatura();
        $est->nombre= $request->get('nombre');
        $est->save();  
    }

    
     /**
     * @OA\Get(
     *     path="/api/asignaturas/{id}",
     *     summary="Buscar una asignatura por su id",
     *     description="Retorna una asignatura",
     *     operationId="show",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID de la asignatura",
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
     *         description="Error, provicia no existe"
     *     )
     * )
     *
     */
    public function show($id)
    {
         return Asignatura::where('id',$id)->get();
    }


     /**
     * @OA\Put(
     *     path="/api/asignaturas/{id}",
     *     summary="Actualizar una asignatura existente",
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
     *         description="Ingreso de la información a guardar",
     *         @OA\MediaType(
     *             mediaType="application/x-www-form-urlencoded",
     *             @OA\Schema(
     *                 type="object",
     *                 @OA\Property(
     *                     property="nombre",
     *                     description="Nombre de la asignatura",
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
     *         description="Provincia no encontrada."
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Error en la operación."
     *     ) 
     * )
     */
    public function update(Request $request, $id)
    {
        $est= Asignatura::find($id); 
        $est->nombre= $request->get('nombre');
        $est->save();
    }

     /**
     * @OA\Delete(
     *     path="/api/asignaturas/{id}",
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
     *         description="Provincia no encontrada"
     *     )
     * )
     */
    public function destroy($id)
    {
        $est= Asignatura::find($id); 
         $est->delete();
    }
}
