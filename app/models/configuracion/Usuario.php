<?php

namespace App\models\configuracion;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = "users";
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'name','email','password'
    ];
    public function perfil(){
        return $this->hasOne(Perfil::class,'');
    }
}
