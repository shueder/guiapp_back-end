<?php

namespace App\Http\Controllers\configuracion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\logic\configuracion\LogicaUsuario;

class UsuarioController extends Controller
{

    protected $log;

    function __construct(){
        $this->log = new LogicaUsuario();
    }
    
    public function post_Usuario(Request $reques){
        $respuesta = $this->log->post_Usuario($reques->all());
        return response()->json($respuesta);
    }

    public function post_login(Request $reques){
        $respuesta = $this->log->post_login($reques->all());
        return response()->json($respuesta);
    }

}
