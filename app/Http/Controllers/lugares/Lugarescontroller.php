<?php
 
namespace App\Http\Controllers\lugares;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\logic\lugares\LogicaLugares;
use App\models\lugares\Lugar;

class LugaresController extends Controller
{
    protected $log;

    function __construct(){
        $this->log = new LogicaLugares();
    }

    public function getPlaces(){
        $respuesta = $this->log->getPlaces();
        return response()->json($respuesta);
    } 

    public function getPlacesById($id){
        $respuesta = $this->log->getPlacesById($id);
        return response()->json($respuesta);
    } 
    
    public function postPlaces(Request $request){
        $data = $request->all();
        Lugar::create([
            'enterprise_name' => $data['enterprise_name'],
            'address' => $data['address'],
            'description' => $data['description'],
            'images' => $data['images'],
        ]);
        return response()->json([
            'message'=>"Guardado Correctamente",
            'status'=>true
        ]);
    }
    public function putPlaces(Request $request,$id){
        $place = Lugar::find($id);
        $place->enterprise_name = $request->input('enterprise_name');
        $place->address = $request->input('address');
        $place->description = $request->input('description');
        $place->images = $request->input('images');
        $place->save();
        return response()->json([
            'message'=>"Actualizado Correctamente",
            'status'=>true
        ]);
    }
    public function DestroyPlaces($id){
        Lugar::destroy ($id);
        return response()->json([
            'message'=>"Eliminado Correctamente",
            'status'=>true
        ]); 
    }
}