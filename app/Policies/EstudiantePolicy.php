<?php

namespace App\Policies;

use App\Models\Estudiante;
use App\Models\Docente;

//use App\Models\Usuario;
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
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\Usuario  $usuario
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Usuario $usuario, Estudiante $estudiante)
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
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\Usuario  $usuario
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Usuario $usuario, Estudiante $estudiante)
    {
        if ($usuario instanceof Docente) return true;

        if($usuario->id == $estudiante->id) return true;
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Usuario  $usuario
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Usuario $usuario, Estudiante $estudiante)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Usuario  $usuario
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Usuario $usuario, Estudiante $estudiante)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Usuario  $usuario
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Usuario $usuario, Estudiante $estudiante)
    {
        //
    }
}
