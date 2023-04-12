<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Asignacion extends Pivot
{
    protected $table = "docente_materia";

}
