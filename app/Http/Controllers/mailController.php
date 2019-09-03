<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class mailController extends Controller
{
     public function contact(Request $request){
        $subject = "Usuario ha dejado una solicitud en URMENTORING\n";
        $for = "aguirre.stefanny@gmail.com";
        $intro = "Este mensaje es generado automáticamente, no responder\n";
        $persona= "Nombres: ". $request->get('nombres') . " " . $request->get('apellidos') . "\nFecha de nacimiento: " . $request->get('dia') .  " " . $request->get('mes') .  " "  . $request->get('anio') . "\nLugar: " . $request->get('lugar') . "\nEmail: " . $request->get('email') . "\nMensaje: " . $request->get('mensaje') ;
        $body = $subject . $intro . $persona;
        Mail::send([],[], function($msj) use($subject,$for,$body){
            $msj->from("urmentoring@gmail.com","URMENTORING-PROJECT");
            $msj->subject($subject);
             $msj->setBody($body);
            $msj->to($for);
        });
    
    }
}
