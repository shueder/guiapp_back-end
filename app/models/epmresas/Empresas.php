<?php

namespace App\models\empresas;

use Illuminate\Database\Eloquent\Model;

class empresas extends Model
{
    protected $table = "empresas";
    protected $primaryKey = 'id';
    public $timestamps = false;
}