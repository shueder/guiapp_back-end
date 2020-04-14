<?php

namespace App\models\lugares;

use Illuminate\Database\Eloquent\Model;

class Lugar extends Model
{
    protected $table = "places";
    protected $primaryKey = 'id';
    public $timestamps = false;
    public $fillable = [
        'enterprise_name',
        'address',
        'description',
        'images'
    ];
}