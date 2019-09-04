<?php

namespace App\Http\Controllers\Relacional;

use App\Http\Controllers\Controller;
use App\Models\Relacional\Representante;
use Illuminate\Http\Request;


class RepresentanteController extends Controller
{
     /**
    * @OA\Get(
    *     path="/api/representantes",
    *     summary="Mostrar todos los representantes.",
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
        return Representante::all();
    }

    /**
     * @OA\Post(
     *     path="/api/representantes",
     *     summary="Agregar un nuevo Representante.",
     *     operationId="store",
     *         @OA\RequestBody(
     *         description="Ingreso de la información a guardar",
     *         @OA\MediaType(
     *             mediaType="application/x-www-form-urlencoded",
     *             @OA\Schema(
     *                 type="object",
     *                 @OA\Property(
     *                     property="id",
     *                     description="Cédula del representante",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="nombre",
     *                     description="Nombre del representante",
     *                     type="string"
     *                 ),
     *                  @OA\Property(
     *                     property="apellido",
     *                     description="Apellido del representante",
     *                     type="string"
     *                 ),
     *                   @OA\Property(
     *                     property="correo",
     *                     description="Correo del representante",
     *                     type="string"
     *                 ),
     *                  @OA\Property(
     *                     property="sexo",
     *                     description="Sexo del representante, F:femenino - M:representante",
     *                     type="string"
     *                 ), 
     *                   @OA\Property(
     *                     property="telefono",
     *                     description="Teléfono del representante",
     *                     type="string"
     *                 ),
     *                   @OA\Property(
     *                     property="ciudad",
     *                     description="Ciudad del representante",
     *                     type="string"
     *                 ),
     *                   @OA\Property(
     *                     property="fecha_nac",
     *                     description="Fecha de nacimiento del representante",
     *                     type="date"
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
        $est= new Representante();
        $est->id= $request->get('_id');
        $est->nombre= $request->get('nombre');
        $est->apellido= $request->get('apellido');
        $est->correo= $request->get('correo');
        $est->sexo= $request->get('sexo');
        $est->telefono= $request->get('telefono');
        $est->ciudad= $request->get('ciudad');
        $est->fecha_nac= $request->get('fecha_nac');
        //ver lo del usuario
        $est->save();         
    }

    
     /**
     * @OA\Get(
     *     path="/api/representantes/{id}",
     *     summary="Buscar un representante por su id",
     *     description="Retorna los datos del representante",
     *     operationId="show",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID del representante",
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
    public function show($correo)
    {
         return Representante::where('correo',$correo)->get();
    }



     /**
     * @OA\Put(
     *     path="/api/representantes/{id}",
     *     summary="Actualizar un representante existente",
     *     operationId="update",
     *   @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID del representante a actualizar",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *         @OA\RequestBody(
     *         description="Ingreso de la información a actualizar",
     *         @OA\MediaType(
     *             mediaType="application/x-www-form-urlencoded",
     *             @OA\Schema(
     *                 type="object",
     *                @OA\Property(
     *                     property="id",
     *                     description="Cédula del representante",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="nombre",
     *                     description="Nombre del representante",
     *                     type="string"
     *                 ),
     *                  @OA\Property(
     *                     property="apellido",
     *                     description="Apellido del representante",
     *                     type="string"
     *                 ),
     *                   @OA\Property(
     *                     property="correo",
     *                     description="Correo del representante",
     *                     type="string"
     *                 ),
     *                  @OA\Property(
     *                     property="sexo",
     *                     description="Sexo del representante, F:femenino - M:representante",
     *                     type="string"
     *                 ), 
     *                   @OA\Property(
     *                     property="telefono",
     *                     description="Teléfono del representante",
     *                     type="string"
     *                 ),
     *                   @OA\Property(
     *                     property="ciudad",
     *                     description="Ciudad del representante",
     *                     type="string"
     *                 ),
     *                   @OA\Property(
     *                     property="fecha_nac",
     *                     description="Fecha de nacimiento del representante",
     *                     type="date"
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
     *         description="Representante no encontrado."
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Error en la operación."
     *     ) 
     * )
     */
    public function update(Request $request,$id)
    {
        $est= Representante::find($id); 
        $est->nombre= $request->get('nombre');
        $est->apellido= $request->get('apellido');
        $est->correo= $request->get('correo');
        $est->sexo= $request->get('sexo');
        $est->telefono= $request->get('telefono');
        $est->ciudad= $request->get('ciudad');
        $est->fecha_nac= $request->get('fecha_nac');
        $est->save();
    }

    /**
     * @OA\Delete(
     *     path="/api/representantes/{id}",
     *     summary="Eliminar un representante.",
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
     *         description="Representante no encontrado"
     *     )
     * )
     */
    public function destroy($id)
    {
        Representante::find($id)->delete();
    }
}
