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
        $docente->save();
        $docente = new Docente();
        $docente->nombre = "Ana";
        $docente->altura = 1.6;
        $docente->save();
        $docente = new Docente();
        $docente->nombre = "Ricardo";
        $docente->altura = 1.7;
        $docente->save();
        $docente = new Docente();
        $docente->nombre = "Laura";
        $docente->altura = 1.7;
        $docente->save();    
    }
}
