<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreEstudianteRequest;
use App\Http\Requests\UpdateEstudianteRequest;
use App\Models\Estudiante;

//use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class EstudianteController extends Controller
{
 //   use AuthorizesRequests;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = Estudiante::all();
//        dump($todos);
//        $this->authorize('viewAny', Estudiante::class);
        if(request()->expectsJson()){
            return response()->json($todos);
        }else
            return view("estudiantes.index",compact('todos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("estudiantes.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEstudianteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEstudianteRequest $request)
    {
        $archivo = $request->file('imagen');
        $nombreArchivo = $archivo->getClientOriginalName();

        $r = Storage::disk('privado')->putFileAs('',$archivo,$nombreArchivo);
        
        $nuevo = new Estudiante();
        $nuevo->fill($request->all());
        $nuevo->imagen=$r;
        $nuevo->clave= Hash::make($request->input('clave'));
        //$nuevo->nombre = $request->input('nombre');
        $nuevo->save();

        if(request()->expectsJson()){
            return response()->json($nuevo);
        }else   
            return redirect(route('estudiantes.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function show(Estudiante $estudiante)
    {
        $url = storage_path('app/fotos') .  '/' . $estudiante->imagen;// depende de root en el archivo filesystems.php.
        if (Storage::disk('privado')->exists($estudiante->imagen) && Auth::id()==$estudiante->id)
            return response()->download($url);
        else
            abort(404);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function edit(Estudiante $estudiante)
    {
        return view('estudiantes.edit', compact('estudiante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEstudianteRequest  $request
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEstudianteRequest $request, Estudiante $estudiante)
    {
        $estudiante->nombre = $request->input('nombre');
        $estudiante->save();
        if(request()->expectsJson()){
            return response()->json($estudiante);
        }else   
            return redirect(route('estudiantes.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estudiante $estudiante)
    {
        $estudiante->delete();
        if(request()->expectsJson()){
            return response()->json($estudiante);
        }else   
            return redirect(route('estudiantes.index'));
    }
}
