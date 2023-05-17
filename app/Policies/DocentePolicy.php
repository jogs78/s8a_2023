<?php

namespace App\Policies;

use App\Models\Docente;
use Illuminate\Foundation\Auth\User as Usuario;
use Illuminate\Auth\Access\HandlesAuthorization;

class EstudiantePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Usuario $usuario)
    {
        if($usuario instanceof Docente){
            return true;    
        }else return false;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\Usuario  $usuario
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Usuario $usuario, Docente $docente)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(Usuario $usuario)
    {
        if($usuario instanceof Docente){
            if($usuario->id==1)return true;
            else return false;    
        }else return false;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\Usuario  $usuario
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Usuario $usuario, Docente $docente)
    {
        if($usuario instanceof Docente){
            if($usuario->id==1 || $usuario->id==$docente->id) return true;
            else return false;
        }else return false;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Usuario  $usuario
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Usuario $usuario, Docente $docente)
    {
        if($usuario instanceof Docente){
            if($usuario->id==1 || $usuario->id==$docente->id) return true;
            else return false;
        }else return false;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Usuario  $usuario
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Usuario $usuario, Docente $docente)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Usuario  $usuario
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Usuario $usuario, Docente $docente)
    {
        //
    }
}
