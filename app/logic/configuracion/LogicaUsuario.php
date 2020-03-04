<?php

namespace App\logic\configuracion;

use App\Entities\Respuestas;
use App\models\configuracion\Menu;
use App\models\configuracion\SubMenu;
use App\models\configuracion\SubmenuPerfil;
use App\models\configuracion\Usuario;
use Exception;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Hash;

class LogicaUsuario {
    
    protected $response;

    function __construct()
    {
        $this->response = new Respuestas();
    }

    public function post_Usuario($data){
        try{
            $user = Usuario::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);
            $this->response->error = false;
            $this->response->message = "Guardado correctamente";
            $this->response->content = $user;
        }catch(Exception $ex){
            $this->response->error = true;
            $this->response->message = "Error post_Usuario "+$ex->getMessage();
        }
        return $this->response;
    }

    public function post_login($data){
        try{
            $usuario = Usuario::select('name','email','id','password','idperfil')
                ->where('email','=',$data['email'])
                ->first();
            if($usuario != null){
                if(Hash::check($data['password'],$usuario->password)){
                    $this->response->error = false;
                    $this->response->message = "Bienvenido ".$usuario->name;
                    $submenu = SubmenuPerfil::select('submenu.id','submenu.submenu','perfil.perfil','submenu.idmenu',
                                        'submenu.url')
                                    ->where('idperfil',$usuario->idperfil)
                                    ->join('perfil','perfil.id','=','submenu_perfil.idperfil')
                                    ->join('submenu','submenu.id','=','submenu_perfil.idsubmenu')
                                    ->get();
                    $menu = SubmenuPerfil::select('menu.id','menu.menu','submenu.id')
                                    ->join('submenu','submenu.id','=','submenu_perfil.idsubmenu')
                                    ->join('menu','menu.id','=','submenu.idmenu')
                                    ->groupBy('menu.id')
                                    ->where('idperfil',$usuario->idperfil)
                                    ->get();
                    $array_perfil = array();
                    array_push($array_perfil,array('menu'=>$menu,'submenu'=>$submenu,'user'=>$usuario));
                    $this->response->content = $array_perfil;
                }else{
                    $this->response->error = true;
                    $this->response->message = "Contraseña incorrecta";
                }
            }else{
                $this->response->error = true;
                $this->response->message = "Usuario no existe en el sistema";
            }
        }catch(DecryptException $ex){
            $this->response->error = true;
            $this->response->message = "Error post_Usuario "+$ex->getMessage();
        }
        return $this->response;
    }

    protected function validate($data){
        return $data->validate::make([
            'name' => ['required', 'string', 'max:70'],
            'email' => ['required', 'string', 'email', 'max:80'],
            'password' => ['required', 'string', 'min:5'],
        ]);
    }

}