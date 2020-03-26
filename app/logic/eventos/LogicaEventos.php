<?php

namespace App\logic\eventos;

use App\Entities\Respuestas;
use App\models\eventos\Evento;
use Exception;

class LogicaEventos {

    protected $response;

    function __construct()
    {
        $this->response = new Respuestas();
    }

    public function getEvents(){
        try{
            $evento = Evento::All();
            if(count($evento)>0){
                $this->response->error = false;
                $this->response->content = $evento;
            }
        }catch(Exception $ex){
            $this->response->error = true;
            $this->response->message = "Error getEvento "+$ex->getMessage();
        }
        return $this->response;
    }

    public function getEventsById($id){
        try{
            $evento = Evento::find($id);
            if($evento != null){
                $this->response->error = false;
                $this->response->content = $evento;
            }
        }catch(Exception $ex){
            $this->response->error = true;
            $this->response->message = "Error getEventById "+$ex->getMessage();
        }
        return $this->response;
    }
 
    public function postEvents($data){
        $event = Event::create([
            'evento' => $data['evento'],
            'ubicación' => $data['ubicación'],
            'fecha' => $data['fecha'],
            'descripcion' => $data['descripcion'],
        ]);
        try{
            $evento = new Evento();
            $evento->evento = $data['evento'];
            $evento->estado = true;
            $evento->save();
            $this->response->error = false;
            $this->response->message = "Registrado correctamente";
            $this->response->content = $evento;
        }catch(Exception $ex){
            $this->response->error = true;
            $this->response->message = "Error postEvents "+$ex->getMessage();
        }
        return $this->response;
    }

    public function putEvents($data,$id){        
        try{
            $evento = Evento::find($id);
            $evento->evento = $data['evento'];
            $evento->save();
            $this->response->error = false;
            $this->response->message = "Actualizado correctamente";
            $this->response->content = $evento;
        }catch(Exception $ex){
            $this->response->error = true;
            $this->response->message = "Error putEvent "+$ex->getMessage();
        }
        return $this->response;
    }
    public function DestroyEvents($id){
        Events::destroy ($id);
        return response()->json([
            'message'=>"Eliminado Correctamente",
            'status'=>true
        ]); 
    }

}