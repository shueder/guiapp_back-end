<?php

namespace App\models\configuracion;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $table = "perfil";
    protected $primaryKey = 'id';
    public $timestamps = false;
    public function submenuperfil(){
        return $this->belongsTo(SubmenuPerfil::class,'idsubmenu');
    }
}
