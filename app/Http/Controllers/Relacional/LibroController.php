<?php

namespace App\Http\Controllers\Relacional;


use App\Http\Controllers\Controller;
use App\Models\Relacional\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
    * @OA\Get(
    *     path="/api/libros",
    *     summary="Mostrar todos los libros.",
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
       return Libro::all();
    }
}
