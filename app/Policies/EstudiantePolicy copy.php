<?php

namespace App\Policies;

use App\Models\Estudiante;
use Illuminate\Auth\Access\HandlesAuthorization;

class EstudiantePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Estudiante $estudiante)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Estudiante $estudiante, Estudiante $recurso)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(Estudiante $estudiante)
    {
        if($estudiante->id==1)return true;
        else return false;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Estudiante $estudiante, Estudiante $recurso)
    {
        if($estudiante->id==1 || $estudiante->id==$recurso->id) return true;
        else return false;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Estudiante $estudiante, Estudiante $recurso)
    {
        if($estudiante->id==1 || $estudiante->id==$recurso->id) return true;
        else return false;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Estudiante $estudiante, Estudiante $recurso)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Estudiante $estudiante, Estudiante $recurso)
    {
        //
    }
}
