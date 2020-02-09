<?php

namespace App\logic\clases;

use App\Entities\Respuestas;
use App\models\empresas\Empresas;
use Exception;

class LogicaEmpresas {

    protected $response;

    function __construct()
    {
        $this->response = new Respuestas();
    }

    public function getEnterprise(){
        try{
            $Empresas = Empresas::All();
            if(count($Empresas)>0){
                $this->response->error = false;
                $this->response->content = $Empresas;
            }
        }catch(Exception $ex){
            $this->response->error = true;
            $this->response->message = "Error getEmpresas "+$ex->getMessage();
        }
        return $this->response;
    }

    public function getEnterpriseById($id){
        try{
            $Empresas = Empresas::find($id);
            if($Empresas != null){
                $this->response->error = false;
                $this->response->content = $Empresas;
            }
        }catch(Exception $ex){
            $this->response->error = true;
            $this->response->message = "Error getEnterpriseById "+$ex->getMessage();
        }
        return $this->response;
    }

    public function postEnterprise($data){
        try{
            $Empresas = new Empresas();
            $Empresas->Empresas = $data['Empresas'];
            $Empresas->estado = true;
            $Empresas->save();
            $this->response->error = false;
            $this->response->message = "Registrado correctamente";
            $this->response->content = $Empresas;
        }catch(Exception $ex){
            $this->response->error = true;
            $this->response->message = "Error postEnterprise "+$ex->getMessage();
        }
        return $this->response;
    }

    public function putEnterprise($data,$id){
        try{
            $Empresas = Empresas::find($id);
            $Empresas->Empresas = $data['Empresas'];
            $Empresas->estado = $data['estado'];
            $Empresas->save();
            $this->response->error = false;
            $this->response->message = "Actualizado correctamente";
            $this->response->content = $Empresas;
        }catch(Exception $ex){
            $this->response->error = true;
            $this->response->message = "Error putEnterprise "+$ex->getMessage();
        }
        return $this->response;
    }

}