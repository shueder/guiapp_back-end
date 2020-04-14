<?php

namespace App\logic\lugares;

use App\Entities\Respuestas;
use App\models\lugares\Lugar;
use Exception;

class LogicaLugares {

    protected $response;

    function __construct()
    {
        $this->response = new Respuestas();
    }

    public function getPlaces(){
        try{
            $lugar = Lugar::All();
            if(count($lugar)>0){
                $this->response->error = false;
                $this->response->content = $lugar;
            }
        }catch(Exception $ex){
            $this->response->error = true;
            $this->response->message = "Error getPlace "+$ex->getMessage();
        }
        return $this->response;
    }

    public function getPlacesById($id){
        try{
            $lugar = Lugar::find($id);
            if($lugar != null){
                $this->response->error = false;
                $this->response->content = $lugar;
            }
        }catch(Exception $ex){
            $this->response->error = true;
            $this->response->message = "Error getPlaceById "+$ex->getMessage();
        }
        return $this->response;
    }
 
    public function postPlaces($data){
        $place = Place::create([
            'eneterprise_name' => $data['enterprise_name'],
            'address' => $data['address'],
            'description' => $data['description'],
            'images' => $data['images'],
        ]);
        try{
            $lugar = new Lugar();
            $lugar->lugar = $data['lugar'];
            $lugar->estado = true;
            $lugar->save();
            $this->response->error = false;
            $this->response->message = "Registrado correctamente";
            $this->response->content = $lugar;
        }catch(Exception $ex){
            $this->response->error = true;
            $this->response->message = "Error postPlaces "+$ex->getMessage();
        }
        return $this->response;
    }

    public function putPlaces($data,$id){        
        try{
            $lugar = Lugar::find($id);
            $lugar->lugar = $data['lugar'];
            $lugar->save();
            $this->response->error = false;
            $this->response->message = "Actualizado correctamente";
            $this->response->content = $lugar;
        }catch(Exception $ex){
            $this->response->error = true;
            $this->response->message = "Error putPlace "+$ex->getMessage();
        }
        return $this->response;
    }
    public function DestroyPlaces($id){
        Places::destroy ($id);
        return response()->json([
            'message'=>"Eliminado Correctamente",
            'status'=>true
        ]); 
    }

}