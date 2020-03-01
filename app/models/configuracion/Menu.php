<?php

namespace App\models\configuracion;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = "menu";
    protected $primaryKey = 'id';
    public $timestamps = false;
}
