<?php

namespace App\Http\Controllers\Relacional;

use App\Http\Controllers\Controller;
use App\Models\Relacional\Estudiante;
use Illuminate\Http\Request;


class EstudianteController extends Controller
{
    
     /**
    * @OA\Get(
    *     path="/api/estudiantes",
    *     summary="Mostrar todos los estudiantes.",
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
        return Estudiante::all();
    }

    
    /**
     * @OA\Post(
     *     path="/api/estudiantes",
     *     summary="Agregar un nuevo Estudiante.",
     *     operationId="store",
     *         @OA\RequestBody(
     *         description="Ingreso de la información a guardar",
     *         @OA\MediaType(
     *             mediaType="application/x-www-form-urlencoded",
     *             @OA\Schema(
     *                 type="object",
     *                 @OA\Property(
     *                     property="id",
     *                     description="Cédula del estudiante",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="nombre",
     *                     description="Nombre del estudiante",
     *                     type="string"
     *                 ),
     *                  @OA\Property(
     *                     property="apellido",
     *                     description="Apellido del estudiante",
     *                     type="string"
     *                 ),
     *                   @OA\Property(
     *                     property="sexo",
     *                     description="Sexo del estudiante, F:femenino - M:masculino",
     *                     type="string"
     *                 ),
     *                   @OA\Property(
     *                     property="fecha_nac",
     *                     description="Fecha de nacimiento del estudiante",
     *                     type="date"
     *                 ),
     *                   @OA\Property(
     *                     property="correo",
     *                     description="Correo del estudiante",
     *                     type="string"
     *                 ) ,
     *                   @OA\Property(
     *                     property="id_representante",
     *                     description="Cédula del representante",
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
        $est= new Estudiante();
        $est->id= $request->get('id');
        $est->nombre= $request->get('nombre');
        $est->apellido= $request->get('apellido');
        $est->sexo= $request->get('sexo');
        $est->fecha_nac= $request->get('fecha_nac');
        $est->correo= $request->get('correo');
        $est->id_representante= $request->get('id_representante');
        //ver lo del usuario
        $est->save(); 
    }

    

     /**
     * @OA\Get(
     *     path="/api/estudiantes/{id}",
     *     summary="Buscar un estudiante por su id",
     *     description="Retorna los datos del estudiante",
     *     operationId="show",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID del estudiante",
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
        return Estudiante::where('id',$id)->get();
    }


    /**
     * @OA\Put(
     *     path="/api/estudiantes/{id}",
     *     summary="Actualizar un estudiante existente",
     *     operationId="update",
     *   @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID del estudiante a actualizar",
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
     *                 @OA\Property(
     *                     property="nombre",
     *                     description="Nombre del estudiante a actualizar",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="apellido",
     *                     description="Apellido del estudiante a actualizar",
     *                     type="string"
     *                 ),
     *                  @OA\Property(
     *                     property="sexo",
     *                     description="Sexo del estudiante, F:femenino - M:masculino",
     *                     type="string"
     *                 ),
     *                   @OA\Property(
     *                     property="fecha_nac",
     *                     description="Fecha de nacimiento del estudiante",
     *                     type="date"
     *                   ),
     *                   @OA\Property(
     *                     property="correo",
     *                     description="Correo del estudiante",
     *                     type="string"
     *                 ) ,
     *                   @OA\Property(
     *                     property="id_representante",
     *                     description="Cédula del representante",
     *                     type="string"
     *                 ) 
     *             )
     *         )
     *      ),
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
     *         description="Estudiante no encontrado."
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Error en la operación."
     *     ) 
     * )
     */
    public function update(Request $request,$id)
    {
        $est= Estudiante::find($id); 
        $est->nombre= $request->get('nombre');
        $est->apellido= $request->get('apellido');
        $est->sexo= $request->get('sexo');
        $est->fecha_nac= $request->get('fecha_nac');
        $est->correo= $request->get('correo');
        $est->id_representante= $request->get('id_representante');
        $est->save();
    }

   

    /**
     * @OA\Delete(
     *     path="/api/estudiantes/{id}",
     *     summary="Eliminar un estudiante.",
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
     *         description="Estudiante no encontrado"
     *     )
     * )
     */
    public function destroy($id)
    {
        $est= Estudiante::find($id); 
        $est->delete();
    }
}
