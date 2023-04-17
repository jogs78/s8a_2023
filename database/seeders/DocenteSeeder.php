<?php

namespace Database\Seeders;
use App\Models\Docente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $docente = new Docente();
        
        $docente->nombre = "Juan";
        $docente->altura = 1.8;
        $docente->nombre_de_usuario = "jdocente";
        $docente->clave = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password
        $docente->save();

        $docente = new Docente();
        $docente->nombre = "Ana";
        $docente->altura = 1.6;
        $docente->nombre_de_usuario = "adocente";
        $docente->clave = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password
        $docente->save();

        $docente = new Docente();
        $docente->nombre = "Ricardo";
        $docente->altura = 1.7;
        $docente->nombre_de_usuario = "rdocente";
        $docente->clave = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password
        $docente->save();

        $docente = new Docente();
        $docente->nombre = "Laura";
        $docente->altura = 1.7;
        $docente->nombre_de_usuario = "ldocente";
        $docente->clave = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password
        $docente->save();    
    }
}
