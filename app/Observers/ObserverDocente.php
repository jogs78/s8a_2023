<?php

namespace App\Observers;

use App\Models\Docente;
use App\Models\Bitacora;
use Illuminate\Support\Facades\Auth;

class ObserverDocente
{
    /**
     * Handle the Docente "created" event.
     *
     * @param  \App\Models\Docente  $docente
     * @return void
     */
    public function created(Docente $docente)
    {
        //avisar que se creo un nuevo docente
        $aviso = new Bitacora;
        $aviso->que="se agrego un docente";
        $aviso->quien = Auth::user()->nombre;
        $aviso->save();
    }

    /**
     * Handle the Docente "updated" event.
     *
     * @param  \App\Models\Docente  $docente
     * @return void
     */
    public function updated(Docente $docente)
    {
        $aviso = new Bitacora;
        $aviso->que="se puso el nombre de " . $docente->nombre ;
        $aviso->quien = Auth::user()->nombre;
        $aviso->save();  
    }

    /**
     * Handle the Docente "deleted" event.
     *
     * @param  \App\Models\Docente  $docente
     * @return void
     */
    public function deleted(Docente $docente)
    {
        $aviso = new Bitacora;
        $aviso->que="se borro al docente " . $docente->nombre ;
        $aviso->quien = Auth::user()->nombre;
        $aviso->save();  
    }

    /**
     * Handle the Docente "restored" event.
     *
     * @param  \App\Models\Docente  $docente
     * @return void
     */
    public function restored(Docente $docente)
    {
        //
    }

    /**
     * Handle the Docente "force deleted" event.
     *
     * @param  \App\Models\Docente  $docente
     * @return void
     */
    public function forceDeleted(Docente $docente)
    {
        //
    }
}
