<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;
use App\Models\Docente;
use App\Models\Estudiante;


class SistemaController extends Controller
{
    public function entrada(){
        return view('Sistema.entrada');
    }
    public function validar(Request $solicitud){

       // dump($solicitud->all());

        $usuario = $solicitud->input('usuario');
        $password = $solicitud->input('password');
        $encontrado = Usuario::where('nombre_de_usuario',$usuario)->first();
        if( is_null($encontrado) ){    
            return view("Sistema.error");
        }else{
            $password_bd = $encontrado->clave;
            $conincide = Hash::check($password,$password_bd);
            
            if($conincide){
                Auth::login( $encontrado );
                return redirect('ropciones');
            }else{
                return view("Sistema.error");
            }
        }
    }
    public function mopciones(){
        return view("Sistema.opciones");
    }
        
    public function saludar(){

    }
    public function salir(Request $solicitud){
        Auth::logout();
        dump("adios");
        Session::forget('idioma');
        Session::flush();
        return redirect("login");
    }
    public function registrar(){
        return view('Sistema.registrar');
    }
    public function registrar2(Request $solicitud){
        $nombre = $solicitud->input('completo');
        $usuario = $solicitud->input('usuario');
        $password = $solicitud->input('password');

        $nuevo = new Usuario();
        $nuevo->nombre = $nombre;
        $nuevo->nombre_de_usuario = $usuario;
        $nuevo->clave = Hash::make($password); // password
        $nuevo->save();
        return redirect("registrar");
    }
}
