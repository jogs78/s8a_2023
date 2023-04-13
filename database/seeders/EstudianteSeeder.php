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



    }
}
