<?php
 
namespace App\Http\Controllers\eventos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\logic\eventos\LogicaEventos;
use App\models\eventos\Evento;

class EventosController extends Controller
{
    protected $log;

    function __construct(){
        $this->log = new LogicaEventos();
    }

    public function getEvents(){
        $respuesta = $this->log->getEvents();
        return response()->json($respuesta);
    } 

    public function getEventsById($id){
        $respuesta = $this->log->getEventsById($id);
        return response()->json($respuesta);
    } 
    
    public function postEvents(Request $request){
        $data = $request->all();
        Evento::create([
            'evento' => $data['evento'],
            'ubicacion' => $data['ubicacion'],
            'fecha' => $data['fecha'],
            'descripcion' => $data['descripcion'],
        ]);
        return response()->json([
            'message'=>"Guardado Correctamente",
            'status'=>true
        ]);
    }
    public function putEvents(Request $request,$id){
        $event = Evento::find($id);
        $event->evento = $request->input('evento');
        $event->ubicacion = $request->input('ubicacion');
        $event->fecha = $request->input('fecha');
        $event->descripcion = $request->input('descripcion');
        $event->save();
        return response()->json([
            'message'=>"Actualizado Correctamente",
            'status'=>true
        ]);
    }
    public function DestroyEvents($id){
        Evento::destroy ($id);
        return response()->json([
            'message'=>"Eliminado Correctamente",
            'status'=>true
        ]); 
    }
}


