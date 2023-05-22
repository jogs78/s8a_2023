<?php

namespace Database\Seeders;

use App\Models\Experiencia;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $experiencia = new Experiencia();
        $experiencia->docente_id = 1;
        $experiencia->descripcion = "Estudio en Hardvard";
        $experiencia->save();

        $experiencia = new Experiencia();
        $experiencia->docente_id = 1;
        $experiencia->descripcion = "Trabajo 3 años en Cisco";
        $experiencia->save();


        $experiencia = new Experiencia();
        $experiencia->docente_id = 1;
        $experiencia->descripcion = "Trabajo 3 años en Panduit";
        $experiencia->save();

        $experiencia = new Experiencia();
        $experiencia->docente_id = 2;
        $experiencia->descripcion = "Estudio en Unach";
        $experiencia->save();

        $experiencia = new Experiencia();
        $experiencia->docente_id = 2;
        $experiencia->descripcion = "Trabajo 3 años en Microsoft";
        $experiencia->save();


        $experiencia = new Experiencia();
        $experiencia->docente_id = 2;
        $experiencia->descripcion = "Trabajo 3 años en Google";
        $experiencia->save();


    }

}
