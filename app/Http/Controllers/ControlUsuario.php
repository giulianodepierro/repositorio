<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControlUsuario extends Controller
{
    public function index()
    {
            
        
          $usuarios = [
            'Joel',
            'Ellie',
            'Tess',
            'Tommy',
            'Bill',
           ' <script>alert("Clicker")</script>'
       ]; 
          
        $titulo = 'Listado de usuarios';
        
        return view('VistaUsuario',
                [
          'usuarios'=>$usuarios ,
          'titulo' =>$titulo
        ]);
    }

    
    
    public function NuevoUsuario()
    {
        return 'Crear nuevo usuario'; 
    }
       
    public function IdUsuario($id) {
  return "Mostrando detalle del usuario: {$id}";
    }
        
}
                    
