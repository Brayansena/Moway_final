<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class EmpresasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empresas')->insert([
            'nit_empresa' => '9002582300',
            'nombre_empresa' => 'SOTRACAUCA',
            'direccion_empresa' => 'CALLE 57 N 9 38, POPAYAN, CAUCA',
            'img_empresa' => 'https://scontent-bog1-1.xx.fbcdn.net/v/t39.30808-6/286660796_116407361084499_6709386640637760984_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=0debeb&_nc_ohc=x-wcsbm40eYAX9PsHJ8&_nc_ht=scontent-bog1-1.xx&oh=00_AT-fl-kfv1cfSJoPnQfBnLlz7sBBAF8JOQfapq1WOtUKdQ&oe=62A45F24',
        ]);
        DB::table('empresas')->insert([
            'nit_empresa' => '8000986793',
            'nombre_empresa' => 'TRANSLIBERTAD',
            'direccion_empresa' => 'CALLE 5 50 201, POPAYAN, CAUCA',
            'img_empresa' => 'https://scontent-bog1-1.xx.fbcdn.net/v/t39.30808-6/286205559_116407357751166_7039844771864142600_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=0debeb&_nc_ohc=OYWv3G-JPJ0AX8YAruj&tn=8GRw4kfDaz_OOoaS&_nc_ht=scontent-bog1-1.xx&oh=00_AT-hlW6gh2slLLiiF7is72BNJ-rx1n-75SeSw897wnwvjg&oe=62A38E3A',
        ]);
        DB::table('empresas')->insert([
            'nit_empresa' => '8915001569',
            'nombre_empresa' => 'TRANSPUBENZA',
            'direccion_empresa' => 'CARRERA 9 27 N 86, POPAYAN, CAUCA',
            'img_empresa' => 'https://scontent-bog1-1.xx.fbcdn.net/v/t39.30808-6/286432253_116407364417832_4149836823643162688_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=0debeb&_nc_ohc=V2FWKl7facYAX8o4muB&_nc_ht=scontent-bog1-1.xx&oh=00_AT-gh2N0Ld7jQ7BDcS4V7IMXH8ZbVVKdJ9avZWt5Dpn_gA&oe=62A48BB0',
        ]);
        DB::table('empresas')->insert([
            'nit_empresa' => '8915001949',
            'nombre_empresa' => 'TRANSTAMBO',
            'direccion_empresa' => 'CALLE 4 17 49 P 2, POPAYAN, CAUCA',
            'img_empresa' => 'https://scontent-bog1-1.xx.fbcdn.net/v/t39.30808-6/283787960_116407417751160_4524579090648267372_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=0debeb&_nc_ohc=Jw4LvAAp7psAX_kt93x&_nc_ht=scontent-bog1-1.xx&oh=00_AT-pUTPFeN7gquI-Uo25nLc8PFsxcArlMdEZWdUj6zncpA&oe=62A3E7A1',
        ]);
        DB::table('horarios')->insert([
            'nombre_horario' => 'horario 1',
            'hora_inicio_semana' => '06:00:00',
            'hora_final_semana' => '21:00:00',
            'hora_inicio_festivo' => '05:30:00',
            'hora_final_festivo' => '21:00:00',
        ]);
        DB::table('paradas')->insert([
            'parada' => 'Campanario'
        ]);
        DB::table('paradas')->insert([
            'parada' => 'Exito'
        ]);
        DB::table('paradas')->insert([
            'parada' => 'Nueva Eps'
        ]);
        DB::table('paradas')->insert([
            'parada' => 'Terminal'
        ]);
        DB::table('paradas')->insert([
            'parada' => 'Autopista'
        ]);
        DB::table('paradas')->insert([
            'parada' => 'Terraplaza'
        ]);
        DB::table('paradas')->insert([
            'parada' => 'Sena'
        ]);
        DB::table('paradas')->insert([
            'parada' => 'Esmeralda'
        ]);
        DB::table('paradas')->insert([
            'parada' => 'La paz'
        ]);

    }
}
