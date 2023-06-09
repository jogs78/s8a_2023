<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Estudiante extends Authenticatable
{
    use HasFactory;
    protected $fillable=['nombre','nombre_de_usuario','clave'];

}
