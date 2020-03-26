<?php

namespace App\Http\Controllers\clases;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\logic\clases\LogicaEmpresas;

class EmpresasController extends Controller
{

    protected $log;

    function __construct(){
        $this->log = new LogicaEmpresas();
    }

    public function getEnterprise(){
        $respuesta = $this->log->getEnterprise();
        return response()->json($respuesta);
    } 

    public function getEnterpriseById($id){
        $respuesta = $this->log->getEnterpriseById($id);
        return response()->json($respuesta);
    } 

    public function postEnterprisegetEnterprise(Request $reques){
        $respuesta = $this->log->postEnterprisegetEnterprise($reques->all());
        return response()->json($respuesta);
    }

    public function putEnterprisegetEnterprise(Request $reques,$id){
        $respuesta = $this->log->putEnterprisegetEnterprise($reques->all(),$id);
        return response()->json($respuesta);
    }
}
 