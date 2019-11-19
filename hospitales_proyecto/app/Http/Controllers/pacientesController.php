<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pacientes;

class pacientesController extends Controller
{
    public function agregar(request $request){
        $obj = new pacientes();
        $obj -> nombre = $request -> nombre;
        $obj -> apellido = $request -> apellido;
        $obj -> edad = $request -> edad;
        $obj -> descripcionEstado = $request -> descripcionEstado;
        $obj -> fechaIngreso = $request -> fechaIngreso;
        $obj -> fechaEgreso = $request -> fechaEgreso;
        $obj -> nivelDeUrgencia = $request -> nivelDeUrgencia;
        
        $obj-> save();
        return $obj;
   }

   public function listar(){
       return pacientes:: all();
   }
}
