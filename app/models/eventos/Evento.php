<?php

namespace App\models\eventos;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = "eventos";
    protected $primaryKey = 'id';
    public $timestamps = false;
    public $fillable = [
        'evento',
        'ubicacion',
        'fecha',
        'descripcion'
    ];
}