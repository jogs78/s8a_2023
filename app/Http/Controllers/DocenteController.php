<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreDocenteRequest;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = Docente::all();
        //        dump($todos);
//        $this->authorize('viewAny', Docente::class);

        if(request()->expectsJson()){
            return response()->json($todos);

        }else
            return view("docentes.index",compact('todos'));
               //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("docentes.create");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDocenteRequest $request)
    {
        $archivo = $request->file('imagen');
        $nombreArchivo = $archivo->getClientOriginalName();

        $r = Storage::disk('publico')->putFileAs('',$archivo,$nombreArchivo);
        //$r = Storage::disk('publico')->exists("maria.jpg");
        //$r = Storage::disk('publico')->delete("maria.jpg");
        
        $nuevo = new Docente();
        $nuevo->fill($request->all());
        $nuevo->imagen=$r;
        $nuevo->clave= Hash::make($request->input('clave'));
        //$nuevo->nombre = $request->input('nombre');
        $nuevo->save();

        if(request()->expectsJson()){
            return response()->json($nuevo);
        }else
            return redirect(route('docentes.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function show(Docente $docente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function edit(Docente $docente)
    {
        return view('docentes.edit', compact('docente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Docente $docente)
    {

        $docente->nombre = $request->input('nombre');
        $docente->save();

        if(request()->expectsJson()){
            return response()->json($docente);
        }else
            return redirect(route('docentes.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Docente $docente)
    {
        $docente->delete();
        if(request()->expectsJson()){
            return response()->json($docente);
        }else
            return redirect(route('docentes.index'));

    }
}
