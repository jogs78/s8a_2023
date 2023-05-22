<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use App\Models\Experiencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ExperienciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function index(Docente $docente)
    {
        return view('docentes.experiencia.index',compact('docente'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function create(Docente $docente)
    {
        return view('docentes.experiencia.create', compact('docente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Docente $docente)
    {
        $experiencia = new Experiencia();
        $experiencia->docente_id = $docente->id;
        $experiencia->descripcion = $request->input('descripcion');
        $experiencia->save();

        return view('docentes.experiencia.index', compact('docente'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Docente  $docente
     * @param  \App\Models\Experiencia  $experiencia
     * @return \Illuminate\Http\Response
     */
    public function show(Docente $docente, Experiencia $experiencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Docente  $docente
     * @param  \App\Models\Experiencia  $experiencia
     * @return \Illuminate\Http\Response
     */
    public function edit(Docente $docente, Experiencia $experiencia)
    {
        return view('docentes.experiencia.edit', compact('experiencia','docente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Docente  $docente
     * @param  \App\Models\Experiencia  $experiencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Docente $docente, Experiencia $experiencia)
    {
        $experiencia->descripcion = $request->input('descripcion');
        $experiencia->save();
        return redirect()->route('docentes.experiencias.index', $docente->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Docente  $docente
     * @param  \App\Models\Experiencia  $experiencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Docente $docente, Experiencia $experiencia)
    {
        $experiencia->delete();
        return redirect()->route('docentes.experiencias.index', $docente->id);
    }
}
