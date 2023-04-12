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
        $alguien->save();
        $alguien = new Estudiante();
        $alguien->nombre = "Paco";
        $alguien->save();
        $alguien = new Estudiante();
        $alguien->nombre = "Luis";
        $alguien->save();
        $alguien = new Estudiante();
        $alguien->nombre = "Juan";
        $alguien->save();
    }
}
