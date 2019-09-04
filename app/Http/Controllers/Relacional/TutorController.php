<?php

namespace App\Http\Controllers\Relacional;

use App\Http\Controllers\Controller;
use App\Models\Relacional\Tutor;
use Illuminate\Http\Request;

/**
* @OA\Info(title="API ", version="1.0")
*
*/
class TutorController extends Controller
{
     /**
    * @OA\Get(
    *     path="/api/tutores",
    *     summary="Mostrar todos los tutores.",
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
        return Tutor::all();
    }

   /**
     * @OA\Post(
     *     path="/api/tutores",
     *     summary="Agregar un nuevo Tutor.",
     *     operationId="store",
     *         @OA\RequestBody(
     *         description="Ingreso de la información a guardar",
     *         @OA\MediaType(
     *             mediaType="application/x-www-form-urlencoded",
     *             @OA\Schema(
     *                 type="object",
     *                 @OA\Property(
     *                     property="id",
     *                     description="Cédula del tutor",
     *                     type="string",
     *                 ),
     *                 @OA\Property(
     *                     property="nombre",
     *                     description="Nombre del tutor",
     *                     type="string"
     *                 ),
     *                  @OA\Property(
     *                     property="apellido",
     *                     description="Apellido del tutor",
     *                     type="string"
     *                 ),
     *                   @OA\Property(
     *                     property="sexo",
     *                     description="Sexo del tutor, F:femenino - M:masculino",
     *                     type="string"
     *                 ),
     *                   @OA\Property(
     *                     property="correo",
     *                     description="Correo del estudiante",
     *                     type="string"
     *                 ),
     *                   @OA\Property(
     *                     property="telefono",
     *                     description="Teléfono del tutor",
     *                     type="string"
     *                 ),
     *                   @OA\Property(
     *                     property="fecha_nac",
     *                     description="Fecha de nacimiento del tutor",
     *                     type="date"
     *                 ),
     *                    @OA\Property(
     *                     property="ciudad",
     *                     description="Ciudad del representante",
     *                     type="string"
     *                 ),
     *                   @OA\Property(
     *                     property="presentacion",
     *                     description="Presentación del tutor",
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
        $est= new Tutor();
        $est->id= $request->get('_id');
        $est->nombre= $request->get('nombre');
        $est->apellido= $request->get('apellido');
        $est->sexo= $request->get('sexo');
        $est->correo= $request->get('correo');
        $est->telefono= $request->get('telefono');
        $est->fecha_nac= $request->get('fecha_nac');
        $est->ciudad= $request->get('ciudad');
        $est->presentacion= $request->get('presentacion');
        //ver lo del usuario
        $est->save();           
    }

    /**
     * @OA\Get(
     *     path="/api/tutores/{id}",
     *     summary="Buscar un tutor por su id",
     *     description="Retorna los datos del tutor",
     *     operationId="show",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID del tutor",
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
     *         description="Recurso no encontrado"
     *     )
     * )
     *
     */
    public function show($id)
    {
        return Tutor::where('_id',$id)->get();
    }


     /**
     * @OA\Put(
     *     path="/api/tutores/{id}",
     *     summary="Actualizar un tutor existente",
     *     operationId="update",
     *   @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID del tutor a actualizar",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *        @OA\RequestBody(
     *         description="Ingreso de la información a guardar",
     *         @OA\MediaType(
     *             mediaType="application/x-www-form-urlencoded",
     *             @OA\Schema(
     *                 type="object",
     *                 @OA\Property(
     *                     property="id",
     *                     description="Cédula del tutor",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="nombre",
     *                     description="Nombre del tutor",
     *                     type="string"
     *                 ),
     *                  @OA\Property(
     *                     property="apellido",
     *                     description="Apellido del tutor",
     *                     type="string"
     *                 ),
     *                   @OA\Property(
     *                     property="sexo",
     *                     description="Sexo del tutor, F:femenino - M:masculino",
     *                     type="string"
     *                 ),
     *                   @OA\Property(
     *                     property="correo",
     *                     description="Correo del estudiante",
     *                     type="string"
     *                 ),
     *                   @OA\Property(
     *                     property="telefono",
     *                     description="Teléfono del tutor",
     *                     type="string"
     *                 ),
     *                   @OA\Property(
     *                     property="fecha_nac",
     *                     description="Fecha de nacimiento del tutor",
     *                     type="date"
     *                 ),
     *                    @OA\Property(
     *                     property="ciudad",
     *                     description="Ciudad del representante",
     *                     type="string"
     *                 ),
     *                   @OA\Property(
     *                     property="presentacion",
     *                     description="Presentación del tutor",
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
     *         description="Recurso no encontrado."
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Error en la operación."
     *     ) 
     * )
     */
    public function update(Request $request, $id)
    {
        $est= Tutor::find($id); 
        $est->nombre= $request->get('nombre');
        $est->apellido= $request->get('apellido');
        $est->sexo= $request->get('sexo');
        $est->correo= $request->get('correo');
        $est->telefono= $request->get('telefono');
        $est->fecha_nac= $request->get('fecha_nac');
        $est->ciudad= $request->get('ciudad');
        $est->presentacion= $request->get('presentacion');
        $est->save();
    }

     /**
     * @OA\Delete(
     *     path="/api/tutores/{id}",
     *     summary="Eliminar un tutor.",
     *     operationId="destroy",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
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
     *         description="Recurso no encontrado",
     *     )
     * )
     */
    public function destroy($id)
    {
        Tutor::find($id)->delete();
    }
}
