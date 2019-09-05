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
     *     path="/api/asignaturas/{id_tutor}",
     *     summary="Buscar las materias que imparte un tutor, dado su id",
     *     description="Retorna materias",
     *     operationId="show",
     *     @OA\Parameter(
     *         name="id_tutor",
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
    public function show($id_tutor)
    {
        return \DB::table('asignaturas')
            ->join('asignatura_tutores','asignaturas._id','=','asignatura_tutores.id_asignatura')
            ->join('tutores','tutores._id','=','asignatura_tutores.id_tutor')
            ->select('asignaturas.nombre','asignaturas._id')
            ->where('asignatura_tutores.id_tutor',$id_tutor)
            ->get(); 
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


    public function costoPromedioxMateria()
    {

         return \DB::table('tutorias')
         ->join('asignatura_tutores','tutorias.id_asignatura_tutor','=','asignatura_tutores._id')
         ->join('tutores','tutores._id','=','asignatura_tutores.id_tutor')
         ->join('asignaturas','asignaturas._id','=','asignatura_tutores.id_asignatura')
         ->select(\DB::raw('asignaturas.nombre as Materia, AVG(tutorias.costo) as Promedio'))
         ->groupBy('asignaturas._id')
         ->get();
    }
}
