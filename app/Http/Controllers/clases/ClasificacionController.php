<?php

namespace App\Http\Controllers\clases;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\logic\clases\LogicaClasificacion;

class ClasificacionController extends Controller
{

    protected $log;

    function __construct(){
        $this->log = new LogicaClasificacion();
    }

    public function getClassification(){
        $respuesta = $this->log->getClassification();
        return response()->json($respuesta);
    } 

    public function getClassificationById($id){
        $respuesta = $this->log->getClassificationById($id);
        return response()->json($respuesta);
    } 

    public function postClassification(Request $reques){
        $respuesta = $this->log->postClassification($reques->all());
        return response()->json($respuesta);
    }

    public function putClassification(Request $reques,$id){
        $respuesta = $this->log->putClassification($reques->all(),$id);
        return response()->json($respuesta);
    }
}
 