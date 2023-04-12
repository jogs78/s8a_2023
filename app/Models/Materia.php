<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;

/*    public function docente(){
        return $this->belongsTo('App\Models\Docente') 
        ;
//        return $this->hasOne('App\Models\Docente','id', 'docente_id') ;
    }
*/

    public function maestro(){
        return $this->belongsTo('App\Models\Docente','docente_id', 'id') ;
    }

    public function docenteBelongsToMany(){
        return $this->belongsToMany('App\Models\Docente',"docente_materia")
        ;
    }

    public function docenteHasManyThrough(){
        return $this->hasManyThrough(
            'App\Models\Docente',
            Asignacion::class,
            'materia_id',//mediante.___ as laravel_through_key &  ?'' mediante.class_id
            'id',//key de tiene para hacer join
            'id',//class.algo con lo que voy a comparar el class.id | ?'' toma el key de class para reemplazar & !exist agrega is null 
            'docente_id',//foreing key de mediante para hacer join
        );
    }

}
