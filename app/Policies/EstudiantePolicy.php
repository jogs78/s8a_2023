<?php

namespace App\Policies;

use App\Models\Estudiante;
use App\Models\Usuario;
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
        if($usuario->rol=='Estudiante') return true;
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
        if ($usuario->rol=='Docente')return true;
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
        if ($usuario->rol=='Admin')return true;
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
        
        //
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
