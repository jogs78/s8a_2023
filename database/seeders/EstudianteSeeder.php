<?php

namespace Database\Seeders;
use App\Models\Estudiante;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $alguien = new Estudiante();
        $alguien->nombre = "Hugo";
        $alguien->nombre_de_usuario = "hestudiante";
        $alguien->clave = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password
        $alguien->save();

        $alguien = new Estudiante();
        $alguien->nombre = "Paco";
        $alguien->nombre_de_usuario = "pestudiante";
        $alguien->clave = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password
        $alguien->save();
        $alguien = new Estudiante();
        $alguien->nombre = "Luis";
        $alguien->nombre_de_usuario = "lestudiante";
        $alguien->clave = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password
        $alguien->save();

        $alguien = new Estudiante();
        $alguien->nombre = "Juan";
        $alguien->nombre_de_usuario = "jestudiante";
        $alguien->clave = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password
        $alguien->save();
    }
}
