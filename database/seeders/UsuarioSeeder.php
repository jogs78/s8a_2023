<?php

namespace Database\Seeders;

use App\Models\Usuario;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = new Usuario();
        $usuario->nombre = "Martha Virginia";
        $usuario->nombre_de_usuario = "v3";
        $usuario->clave = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password
        $usuario->save();

        $usuario = new Usuario();
        $usuario->nombre = "Erick Gonzalez";
        $usuario->nombre_de_usuario = "e3";
        $usuario->clave = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password
        $usuario->save();


        $usuario = new Usuario();
        $usuario->nombre = "Jorge Octavio";
        $usuario->nombre_de_usuario = "j3";
        $usuario->clave = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password
        $usuario->rol = "Docente";
        $usuario->save();

        $usuario = new Usuario();
        $usuario->nombre = "Erick Gonzalez";
        $usuario->nombre_de_usuario = "e3";
        $usuario->clave = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password
        $usuario->save();

        //
    }
}
