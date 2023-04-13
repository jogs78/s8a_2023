<?php

namespace App\Policies;

use App\Models\Docente;
use Illuminate\Auth\Access\HandlesAuthorization;

class DocentePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Docente $docente)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\Docente  $docente
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Docente $docente, Docente $recurso)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(Docente $docente)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\Docente  $docente
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Docente $docente, Docente $recurso)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Docente  $docente
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Docente $docente, Docente $recurso)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Docente  $docente
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Docente $docente, Docente $recurso)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Docente  $docente
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Docente $docente, Docente $recurso)
    {
        //
    }
}
