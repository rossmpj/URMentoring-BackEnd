<?php

namespace App\Http\Controllers\Relacional;

use App\Http\Controllers\Controller;
use App\Models\Relacional\FormacionTutor;
use Illuminate\Http\Request;


class FormacionTutorController extends Controller
{
     /**
    * @OA\Get(
    *     path="/api/formaciontutores",
    *     summary="Mostrar todos los datos relacionados a tutor.",
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
        return FormacionTutor::all();
    }


     /**
     * @OA\Post(
     *     path="/api/formaciontutores",
     *     summary="Agregar nueva informacion de la formacion de un Tutor.",
     *     operationId="store",
     *         @OA\RequestBody(
     *         description="Ingreso de la información a guardar",
     *         @OA\MediaType(
     *             mediaType="application/x-www-form-urlencoded",
     *             @OA\Schema(
     *                 type="object",
     *                 @OA\Property(
     *                     property="nivel_estudios",
     *                     description="Nivel de estudios del tutor",
     *                     type="string"
     *                 ),
     *                  @OA\Property(
     *                     property="experiencia",
     *                     description="Experiencia del tutor",
     *                     type="string"
     *                 ),
     *                   @OA\Property(
     *                     property="profesion",
     *                     description="Profesión del tutor",
     *                     type="string"
     *                 ),
     *                   @OA\Property(
     *                     property="id_tutor",
     *                     description="Cédula del tutor",
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
        $est= new FormacionTutor();
        $est->nivel_estudios= $request->get('nivel_estudios');
        $est->experiencia= $request->get('experiencia');
        $est->profesion= $request->get('profesion');
        $est->id_tutor= $request->get('id_tutor');
        $est->save();        
    }

     /**
     * @OA\Get(
     *     path="/api/formaciontutores/{id_tutor}",
     *     summary="Buscar la formacion de un tutor por su id",
     *     description="Retorna los datos del tutor",
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
     *         description="Error, Formación Tutor no existe"
     *     )
     * )
     *
     */
    public function show($id)
    {
       return FormacionTutor::where('id_tutor',$id)->get();
    }

   
     /**
     * @OA\Put(
     *     path="/api/formaciontutores/{id_tutor}",
     *     summary="Actualizar la formación de un tutor existente",
     *     operationId="update",
     *   @OA\Parameter(
     *         name="id_tutor",
     *         in="path",
     *         description="Cédula del tutor a actualizar",
     *         required=true,
     *         @OA\Schema(
     *             type="string",
     *         )
     *     ),
     *          @OA\RequestBody(
     *         description="Ingreso de la información a guardar",
     *         @OA\MediaType(
     *             mediaType="application/x-www-form-urlencoded",
     *             @OA\Schema(
     *                 type="object",
     *                 @OA\Property(
     *                     property="nivel_estudios",
     *                     description="Nivel de estudios del tutor",
     *                     type="string"
     *                 ),
     *                  @OA\Property(
     *                     property="experiencia",
     *                     description="Experiencia del tutor",
     *                     type="string"
     *                 ),
     *                   @OA\Property(
     *                     property="profesion",
     *                     description="Profesión del tutor",
     *                     type="string"
     *                 ),
     *                   @OA\Property(
     *                     property="id_tutor",
     *                     description="Cédula del tutor",
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
    public function update(Request $request,$id)
    {
     return   \DB::table('formacion_tutores')
            ->where('id_tutor', $id)
            ->update(['nivel_estudios' => $request->get('nivel_estudios'), 'experiencia'=> $request->get('experiencia'),
                'profesion' => $request->get('profesion'), 'id_tutor' => $request->get('id_tutor') ]);
    }

     /**
     * @OA\Delete(
     *     path="/api/formaciontutores/{id_tutor}",
     *     summary="Eliminar la formación de un tutor dada el id del tutor.",
     *     operationId="destroy",
     *     @OA\Parameter(
     *         name="id_tutor",
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
     *         description="ID Inválido",
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Provincia no encontrada",
     *     )
     * )
     */
    public function destroy($id)
    {
        $form = FormacionTutor::where('id_tutor',$id);
        $form->delete();
    }
}
