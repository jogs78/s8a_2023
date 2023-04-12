<?php

namespace Database\Seeders;
use App\Models\Docente;
use App\Models\Materia;
use App\Models\Asignacion;

use Illuminate\Support\Facades\DB;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsuarioSeeder::class);
        $this->call(EstudianteSeeder::class);
        $this->call(DocenteSeeder::class);

        $materia = new Materia();
        $materia->nombre="Redes";
        $materia->docente_id = 1;
        $materia->save();

        $materia = new Materia();
        $materia->nombre="Conmutacion";
        $materia->docente_id = 1;
        $materia->save();

        $materia = new Materia();
        $materia->nombre="Programacion";
        $materia->docente_id = 2;
        $materia->save();
        $materia = new Materia();
        $materia->nombre="Programación Web";
        $materia->docente_id = 2;
        $materia->save();

        $materia = new Materia();
        $materia->nombre="Fundamentos de Base de datos";
        $materia->docente_id = 3;
        $materia->save();
        $materia = new Materia();
        $materia->nombre="Taller Base de datos";
        $materia->docente_id = 3;
        $materia->save();
        $materia = new Materia();
        $materia->nombre="Administracion de Base de datos";
        $materia->docente_id = 3;
        $materia->save();

        $asignacion = new Asignacion();
        $asignacion->docente_id = 1;
        $asignacion->materia_id = 1;
        $asignacion->save();
        $asignacion = new Asignacion();
        $asignacion->docente_id = 1;
        $asignacion->materia_id = 2;
        $asignacion->save();
        $asignacion = new Asignacion();
        $asignacion->docente_id = 2;
        $asignacion->materia_id = 3;
        $asignacion->save();
        $asignacion = new Asignacion();
        $asignacion->docente_id = 2;
        $asignacion->materia_id = 4;
        $asignacion->save();
        $asignacion = new Asignacion();
        $asignacion->docente_id = 3;
        $asignacion->materia_id = 5;
        $asignacion->save();
        $asignacion = new Asignacion();
        $asignacion->docente_id = 3;
        $asignacion->materia_id = 6;
        $asignacion->save();
        $asignacion = new Asignacion();
        $asignacion->docente_id = 3;
        $asignacion->materia_id = 7;
        $asignacion->save();

/*        DB::table('docente_materia')->insert(['docente_id'=>1,'materia_id'=>1]);
        DB::table('docente_materia')->insert(['docente_id'=>1,'materia_id'=>2]);
        DB::table('docente_materia')->insert(['docente_id'=>2,'materia_id'=>3]);
        DB::table('docente_materia')->insert(['docente_id'=>2,'materia_id'=>4]);
        DB::table('docente_materia')->insert(['docente_id'=>3,'materia_id'=>5]);
        DB::table('docente_materia')->insert(['docente_id'=>3,'materia_id'=>6]);
        DB::table('docente_materia')->insert(['docente_id'=>3,'materia_id'=>7]);
*/
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
