<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Docente extends Authenticatable
{
    use HasFactory;
    protected $fillable=['nombre','nombre_de_usuario','clave'];

    public function materiaHasOneThrough(){
        return $this->hasOneThrough(
            Materia::class,
            Asignacion::class,
            'docente_id',//mediante.___ as laravel_through_key &  ?'' mediante.class_id
            'id',//key de tiene para hacer join
            'id',//class.algo con lo que voy a comparar el class.id | ?'' toma el key de class para reemplazar & !exist agrega is null 
            'materia_id',//foreing key de mediante para hacer join
        );
    }

    public function materiaHasOne(){
        return $this->hasOne("App\Models\Materia")
        ->withDefault(
            [
                "nombre" => "Sin materia",
                "id" => 0,
            ]
        );
    }
    public function materias(){
        return $this->hasMany("App\Models\Materia");
    }

    public function experiencias(){
        return $this->hasMany("App\Models\Experiencia");
    }

    public function materiasHasManyThrough(){
        
        return $this->hasManyThrough(
            Materia::class,
            Asignacion::class,
            'docente_id',//mediante.___ as laravel_through_key &  ?'' mediante.class_id
            'id',//key de tiene para hacer join
            'id',//class.algo con lo que voy a comparar el class.id | ?'' toma el key de class para reemplazar & !exist agrega is null 
            'materia_id',//foreing key de mediante para hacer join
        );
    }

/*    public function materias(){
        return $this->hasMany("App\Models\Materia");

    }
*/
    public function materiasDe($filtro){
        return $this->hasMany("App\Models\Materia",'docente_id', 'id')
        ->where('nombre','LIKE',"%$filtro%")
        ;

    }

}
