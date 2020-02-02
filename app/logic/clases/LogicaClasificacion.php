<?php

namespace App\logic\clases;

use App\Entities\Respuestas;
use App\models\clases\Clasificacion;
use Exception;

class LogicaClasificacion {

    protected $response;

    function __construct()
    {
        $this->response = new Respuestas();
    }

    public function getClassification(){
        try{
            $clasificacion = Clasificacion::All();
            if(count($clasificacion)>0){
                $this->response->error = false;
                $this->response->content = $clasificacion;
            }
        }catch(Exception $ex){
            $this->response->error = true;
            $this->response->message = "Error getClasificacion "+$ex->getMessage();
        }
        return $this->response;
    }

    public function getClassificationById($id){
        try{
            $clasificacion = Clasificacion::find($id);
            if($clasificacion != null){
                $this->response->error = false;
                $this->response->content = $clasificacion;
            }
        }catch(Exception $ex){
            $this->response->error = true;
            $this->response->message = "Error getClassificationById "+$ex->getMessage();
        }
        return $this->response;
    }

    public function postClassification($data){
        try{
            $clasificacion = new Clasificacion();
            $clasificacion->clasificacion = $data['clasificacion'];
            $clasificacion->estado = true;
            $clasificacion->save();
            $this->response->error = false;
            $this->response->message = "Registrado correctamente";
            $this->response->content = $clasificacion;
        }catch(Exception $ex){
            $this->response->error = true;
            $this->response->message = "Error postClassification "+$ex->getMessage();
        }
        return $this->response;
    }

    public function putClassification($data,$id){
        try{
            $clasificacion = Clasificacion::find($id);
            $clasificacion->clasificacion = $data['clasificacion'];
            $clasificacion->estado = $data['estado'];
            $clasificacion->save();
            $this->response->error = false;
            $this->response->message = "Actualizado correctamente";
            $this->response->content = $clasificacion;
        }catch(Exception $ex){
            $this->response->error = true;
            $this->response->message = "Error putClassification "+$ex->getMessage();
        }
        return $this->response;
    }

}