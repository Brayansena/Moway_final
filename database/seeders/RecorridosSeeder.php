<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class RecorridosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recorridos')->insert([
            'nombre_ruta' => 'Sotracauca Ruta 1 ida',
            'numero_ruta' => '1',
            'url_recorrido' => 'https://www.google.com/maps/d/u/0/edit?mid=12b_iVg6HJiX4j-9Kr6U0LufmDGdqAKs&usp=sharing',
            'imagen_recorrido' => 'https://scontent-bog1-1.xx.fbcdn.net/v/t39.30808-6/286651075_116403281084907_7120112840293265737_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=0debeb&_nc_ohc=xHyWx6as3xMAX8QiZHB&tn=8GRw4kfDaz_OOoaS&_nc_ht=scontent-bog1-1.xx&oh=00_AT-PPf15--iVKpGAeYnrIPLMzoJNDKe3g4k9U9xakcE3EQ&oe=62A446AB',
            'id_horario' => '1',
            'id_empresa' => '1',
        ]);
        DB::table('recorridos')->insert([
            'nombre_ruta' => 'Sotracauca Ruta 1 vuelta',
            'numero_ruta' => '1',
            'url_recorrido' => 'https://www.google.com/maps/d/u/0/edit?mid=1kZUiaZTWpClZxeCBIAyRdBhKJmcIuTg&usp=sharing',
            'imagen_recorrido' => 'https://scontent-bog1-1.xx.fbcdn.net/v/t39.30808-6/286620963_116403191084916_2446587073981344328_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=0debeb&_nc_ohc=Xn2seCRg0SQAX_cT13z&_nc_ht=scontent-bog1-1.xx&oh=00_AT_B4EX0feIwX5aTzmz0jZPTAwRfUQTFmeJ5juWdyAPCPg&oe=62A36FF3',
            'id_horario' => '1',
            'id_empresa' => '1',
        ]);
        DB::table('recorridos')->insert([
            'nombre_ruta' => 'Sotracauca Ruta 2 ida',
            'numero_ruta' => '2',
            'url_recorrido' => 'https://www.google.com/maps/d/u/0/edit?mid=1mrkGq1lrMb6C6--vs5POkUtKqv2qrn0&usp=sharing',
            'imagen_recorrido' => 'https://scontent-bog1-1.xx.fbcdn.net/v/t39.30808-6/286803592_116403211084914_7648858605286613334_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=0debeb&_nc_ohc=OHzzs6wdwuoAX_utH1E&_nc_ht=scontent-bog1-1.xx&oh=00_AT8a52jM_VVvSXqtsBNs9QyLyut2VH_aA7o82SwBvZLZ4Q&oe=62A434DA',
            'id_horario' => '1',
            'id_empresa' => '1',
        ]);
        DB::table('recorridos')->insert([
            'nombre_ruta' => 'Sotracauca Ruta 2 vuelta',
            'numero_ruta' => '2',
            'url_recorrido' => 'https://www.google.com/maps/d/u/0/edit?mid=1kZUiaZTWpClZxeCBIAyRdBhKJmcIuTg&usp=sharing',
            'imagen_recorrido' => 'https://scontent-bog1-1.xx.fbcdn.net/v/t39.30808-6/286623256_116403304418238_1105380144774282742_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=0debeb&_nc_ohc=1yYkuARMjfoAX9lpku8&tn=8GRw4kfDaz_OOoaS&_nc_ht=scontent-bog1-1.xx&oh=00_AT-PAJR_FXcx2jcoc4S9SBNK5fKIfGWglolwfdt44Kfeiw&oe=62A373D9',
            'id_horario' => '1',
            'id_empresa' => '1',
        ]);
        DB::table('recorridos')->insert([
            'nombre_ruta' => 'Sotracauca Ruta 3 vuelta',
            'numero_ruta' => '3',
            'url_recorrido' => 'https://www.google.com/maps/d/u/0/edit?mid=11OkKvJ4If32QfhZVQM6adQwsndaDP7w&usp=sharing',
            'imagen_recorrido' => 'https://scontent-bog1-1.xx.fbcdn.net/v/t39.30808-6/286690059_116403341084901_3291708704012561165_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=0debeb&_nc_ohc=34EQTa_FzZsAX8gz6HR&_nc_ht=scontent-bog1-1.xx&oh=00_AT9BLjNNz8HENdhxLaUFN5NzBiWD23qetE3cGEsDOjT30Q&oe=62A49A5F',
            'id_horario' => '1',
            'id_empresa' => '1',
        ]);
        DB::table('recorridos')->insert([
            'nombre_ruta' => 'Sotracauca Ruta 3 vuelta',
            'numero_ruta' => '3',
            'url_recorrido' => 'https://www.google.com/maps/d/u/0/edit?mid=10aH68jom3Rdom1y6tzlPD_bxU0g0XQM&usp=sharing',
            'imagen_recorrido' => 'https://scontent-bog1-1.xx.fbcdn.net/v/t39.30808-6/283968344_116403401084895_5444508491587193097_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=0debeb&_nc_ohc=OCmVdvOoJF0AX9cBWYU&_nc_ht=scontent-bog1-1.xx&oh=00_AT_kXf59Mm5HgdU-xi5CskmlbjirQrQsKu6RfaA-ur5HrQ&oe=62A3EC2A',
            'id_horario' => '1',
            'id_empresa' => '1',
        ]);
        DB::table('recorridos')->insert([
            'nombre_ruta' => 'Translibertad Ruta 1 ida',
            'numero_ruta' => '1',
            'url_recorrido' => 'https://www.google.com/maps/d/u/0/edit?mid=1E19VstM8OQ-1RNPsvGK4PVZS9b2LFEo&usp=sharing',
            'imagen_recorrido' => 'https://scontent-bog1-1.xx.fbcdn.net/v/t39.30808-6/286566574_116403441084891_8207858516316473299_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=0debeb&_nc_ohc=t6tpiz4VdjYAX_91tUE&_nc_ht=scontent-bog1-1.xx&oh=00_AT96feln7WhXSrEYEJEo2xi1dr-j4FGNil0yBQ9aUU-jOw&oe=62A431FA',
            'id_horario' => '1',
            'id_empresa' => '2',
        ]);
        DB::table('recorridos')->insert([
            'nombre_ruta' => 'Translibertad Ruta 1 vuelta',
            'numero_ruta' => '1',
            'url_recorrido' => 'https://www.google.com/maps/d/u/0/edit?mid=1g4YXYJDkeSekOw5_MPsJXODsOtZrxIg&usp=sharing',
            'imagen_recorrido' => 'https://scontent-bog1-1.xx.fbcdn.net/v/t39.30808-6/286496585_116403444418224_4121520350697771922_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=0debeb&_nc_ohc=5wmoGgYIC58AX94Fh1G&_nc_ht=scontent-bog1-1.xx&oh=00_AT9mf9CI7d6hKeXnX2HerBHuGHqkTcWziJc8VOeKG8JFfg&oe=62A4AE20',
            'id_horario' => '1',
            'id_empresa' => '2',
        ]);
        DB::table('recorridos')->insert([
            'nombre_ruta' => 'Translibertad Ruta 2 ida',
            'numero_ruta' => '2',
            'url_recorrido' => 'https://www.google.com/maps/d/u/0/edit?mid=1lQ9YTDzPvUaTjL8Q2FRUB-MgrjiL0g8&usp=sharing',
    'imagen_recorrido' => 'https://scontent-bog1-1.xx.fbcdn.net/v/t39.30808-6/286637350_116434924415076_143459435960374002_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=730e14&_nc_ohc=Icbiy-g9kJIAX8RTT4J&_nc_ht=scontent-bog1-1.xx&oh=00_AT_fC4Z_QOpFpAGEIjD_6ZLh2HLJEoCIqaCDrT7xI1QNZw&oe=62A41E04',
            'id_horario' => '1',
            'id_empresa' => '2',
        ]);
        DB::table('recorridos')->insert([
            'nombre_ruta' => 'Translibertad Ruta 2 vuelta',
            'numero_ruta' => '2',
            'url_recorrido' => 'https://www.google.com/maps/d/u/0/edit?mid=1sAeoOREAMkAQstpzNwsg8SEBAfROcp8&usp=sharing',
            'imagen_recorrido' => 'https://scontent-bog1-1.xx.fbcdn.net/v/t39.30808-6/286490765_116403544418214_3321475025443856902_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=0debeb&_nc_ohc=okMeI4BLN7kAX9TucoF&tn=8GRw4kfDaz_OOoaS&_nc_ht=scontent-bog1-1.xx&oh=00_AT_4r_A_sZO2Ri1dBaUvP3n7QTH_bfdBgPOFNcV0pafZlw&oe=62A33555',
            'id_horario' => '1',
            'id_empresa' => '2',
        ]);
        DB::table('recorridos')->insert([
            'nombre_ruta' => 'Translibertad Ruta 3 ida',
            'numero_ruta' => '3',
            'url_recorrido' => 'https://www.google.com/maps/d/u/0/edit?mid=13grG7P4te6VJP_TGkM0hkoh2o1XO9BM&usp=sharing',
            'imagen_recorrido' => 'https://scontent-bog1-1.xx.fbcdn.net/v/t39.30808-6/286609040_116403557751546_3392799404398808938_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=0debeb&_nc_ohc=AekRSz0ca0MAX9iimeB&_nc_ht=scontent-bog1-1.xx&oh=00_AT8ZJx37SatVFnAYeelOKN9Q9LDEGpl159Yy6GbFbS4zKg&oe=62A47490',
            'id_horario' => '1',
            'id_empresa' => '2',
        ]);
        DB::table('recorridos')->insert([
            'nombre_ruta' => 'Translibertad Ruta 3 vuelta',
            'numero_ruta' => '3',
            'url_recorrido' => 'https://www.google.com/maps/d/u/0/edit?mid=1993xFeoXwhZ69tWKyoyu8iBq6szaOmQ&usp=sharing',
            'imagen_recorrido' => 'https://scontent-bog1-1.xx.fbcdn.net/v/t39.30808-6/286586372_116403604418208_5952471176140136321_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=0debeb&_nc_ohc=7tzfm3-UhXUAX9rOyEr&tn=8GRw4kfDaz_OOoaS&_nc_ht=scontent-bog1-1.xx&oh=00_AT8Q43dsCA1EeyarY5QbwsRk1jNK7DcmTY5tV0j_L3tmLQ&oe=62A44D4A',
            'id_horario' => '1',
            'id_empresa' => '2',
        ]);
        DB::table('recorridos')->insert([
            'nombre_ruta' => 'Transpubenza Ruta 1 ida',
            'numero_ruta' => '1',
            'url_recorrido' => 'https://www.google.com/maps/d/u/0/edit?mid=1993xFeoXwhZ69tWKyoyu8iBq6szaOmQ&usp=sharing',
            'imagen_recorrido' => 'https://scontent-bog1-1.xx.fbcdn.net/v/t39.30808-6/286586372_116403604418208_5952471176140136321_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=0debeb&_nc_ohc=7tzfm3-UhXUAX9rOyEr&tn=8GRw4kfDaz_OOoaS&_nc_ht=scontent-bog1-1.xx&oh=00_AT8Q43dsCA1EeyarY5QbwsRk1jNK7DcmTY5tV0j_L3tmLQ&oe=62A44D4A',
            'id_horario' => '1',
            'id_empresa' => '3',
        ]);
        DB::table('recorridos')->insert([
            'nombre_ruta' => 'Transpubenza Ruta 1 vuelta',
            'numero_ruta' => '1',
            'url_recorrido' => 'https://www.google.com/maps/d/u/0/edit?mid=1993xFeoXwhZ69tWKyoyu8iBq6szaOmQ&usp=sharing',
            'imagen_recorrido' => 'https://scontent-bog1-1.xx.fbcdn.net/v/t39.30808-6/286586372_116403604418208_5952471176140136321_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=0debeb&_nc_ohc=7tzfm3-UhXUAX9rOyEr&tn=8GRw4kfDaz_OOoaS&_nc_ht=scontent-bog1-1.xx&oh=00_AT8Q43dsCA1EeyarY5QbwsRk1jNK7DcmTY5tV0j_L3tmLQ&oe=62A44D4A',
            'id_horario' => '1',
            'id_empresa' => '3',
        ]);
        DB::table('recorridos')->insert([
            'nombre_ruta' => 'Transpubenza Ruta 2 ida',
            'numero_ruta' => '2',
            'url_recorrido' => 'https://www.google.com/maps/d/u/0/edit?mid=1993xFeoXwhZ69tWKyoyu8iBq6szaOmQ&usp=sharing',
            'imagen_recorrido' => 'https://scontent-bog1-1.xx.fbcdn.net/v/t39.30808-6/286586372_116403604418208_5952471176140136321_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=0debeb&_nc_ohc=7tzfm3-UhXUAX9rOyEr&tn=8GRw4kfDaz_OOoaS&_nc_ht=scontent-bog1-1.xx&oh=00_AT8Q43dsCA1EeyarY5QbwsRk1jNK7DcmTY5tV0j_L3tmLQ&oe=62A44D4A',
            'id_horario' => '1',
            'id_empresa' => '3',
        ]);
        DB::table('recorridos')->insert([
            'nombre_ruta' => 'Transpubenza Ruta 2 vuelta',
            'numero_ruta' => '2',
            'url_recorrido' => 'https://www.google.com/maps/d/u/0/edit?mid=1993xFeoXwhZ69tWKyoyu8iBq6szaOmQ&usp=sharing',
            'imagen_recorrido' => 'https://scontent-bog1-1.xx.fbcdn.net/v/t39.30808-6/286586372_116403604418208_5952471176140136321_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=0debeb&_nc_ohc=7tzfm3-UhXUAX9rOyEr&tn=8GRw4kfDaz_OOoaS&_nc_ht=scontent-bog1-1.xx&oh=00_AT8Q43dsCA1EeyarY5QbwsRk1jNK7DcmTY5tV0j_L3tmLQ&oe=62A44D4A',
            'id_horario' => '1',
            'id_empresa' => '3',
        ]);
        DB::table('recorridos')->insert([
            'nombre_ruta' => 'Transpubenza Ruta 3 ida',
            'numero_ruta' => '3',
            'url_recorrido' => 'https://www.google.com/maps/d/u/0/edit?mid=1993xFeoXwhZ69tWKyoyu8iBq6szaOmQ&usp=sharing',
            'imagen_recorrido' => 'https://scontent-bog1-1.xx.fbcdn.net/v/t39.30808-6/286586372_116403604418208_5952471176140136321_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=0debeb&_nc_ohc=7tzfm3-UhXUAX9rOyEr&tn=8GRw4kfDaz_OOoaS&_nc_ht=scontent-bog1-1.xx&oh=00_AT8Q43dsCA1EeyarY5QbwsRk1jNK7DcmTY5tV0j_L3tmLQ&oe=62A44D4A',
            'id_horario' => '1',
            'id_empresa' => '3',
        ]);
        DB::table('recorridos')->insert([
            'nombre_ruta' => 'Transpubenza Ruta 3 vuelta',
            'numero_ruta' => '3',
            'url_recorrido' => 'https://www.google.com/maps/d/u/0/edit?mid=1993xFeoXwhZ69tWKyoyu8iBq6szaOmQ&usp=sharing',
            'imagen_recorrido' => 'https://scontent-bog1-1.xx.fbcdn.net/v/t39.30808-6/286586372_116403604418208_5952471176140136321_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=0debeb&_nc_ohc=7tzfm3-UhXUAX9rOyEr&tn=8GRw4kfDaz_OOoaS&_nc_ht=scontent-bog1-1.xx&oh=00_AT8Q43dsCA1EeyarY5QbwsRk1jNK7DcmTY5tV0j_L3tmLQ&oe=62A44D4A',
            'id_horario' => '1',
            'id_empresa' => '3',
        ]);
        DB::table('recorridos')->insert([
            'nombre_ruta' => 'Sotracauca Ruta 1 ida',
            'numero_ruta' => '1',
            'url_recorrido' => 'https://www.google.com/maps/d/u/0/edit?mid=1993xFeoXwhZ69tWKyoyu8iBq6szaOmQ&usp=sharing',
            'imagen_recorrido' => 'https://scontent-bog1-1.xx.fbcdn.net/v/t39.30808-6/286586372_116403604418208_5952471176140136321_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=0debeb&_nc_ohc=7tzfm3-UhXUAX9rOyEr&tn=8GRw4kfDaz_OOoaS&_nc_ht=scontent-bog1-1.xx&oh=00_AT8Q43dsCA1EeyarY5QbwsRk1jNK7DcmTY5tV0j_L3tmLQ&oe=62A44D4A',
            'id_horario' => '1',
            'id_empresa' => '4',
        ]);
        DB::table('recorridos')->insert([
            'nombre_ruta' => 'Sotracauca Ruta 1 vuelta',
            'numero_ruta' => '1',
            'url_recorrido' => 'https://www.google.com/maps/d/u/0/edit?mid=1993xFeoXwhZ69tWKyoyu8iBq6szaOmQ&usp=sharing',
            'imagen_recorrido' => 'https://scontent-bog1-1.xx.fbcdn.net/v/t39.30808-6/286586372_116403604418208_5952471176140136321_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=0debeb&_nc_ohc=7tzfm3-UhXUAX9rOyEr&tn=8GRw4kfDaz_OOoaS&_nc_ht=scontent-bog1-1.xx&oh=00_AT8Q43dsCA1EeyarY5QbwsRk1jNK7DcmTY5tV0j_L3tmLQ&oe=62A44D4A',
            'id_horario' => '1',
            'id_empresa' => '4',
        ]);
        DB::table('recorridos')->insert([
            'nombre_ruta' => 'Sotracauca Ruta 2 ida',
            'numero_ruta' => '2',
            'url_recorrido' => 'https://www.google.com/maps/d/u/0/edit?mid=1993xFeoXwhZ69tWKyoyu8iBq6szaOmQ&usp=sharing',
            'imagen_recorrido' => 'https://scontent-bog1-1.xx.fbcdn.net/v/t39.30808-6/286586372_116403604418208_5952471176140136321_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=0debeb&_nc_ohc=7tzfm3-UhXUAX9rOyEr&tn=8GRw4kfDaz_OOoaS&_nc_ht=scontent-bog1-1.xx&oh=00_AT8Q43dsCA1EeyarY5QbwsRk1jNK7DcmTY5tV0j_L3tmLQ&oe=62A44D4A',
            'id_horario' => '1',
            'id_empresa' => '4',
        ]);
        DB::table('recorridos')->insert([
            'nombre_ruta' => 'Sotracauca Ruta 2 vuelta',
            'numero_ruta' => '2',
            'url_recorrido' => 'https://www.google.com/maps/d/u/0/edit?mid=1993xFeoXwhZ69tWKyoyu8iBq6szaOmQ&usp=sharing',
            'imagen_recorrido' => 'https://scontent-bog1-1.xx.fbcdn.net/v/t39.30808-6/286586372_116403604418208_5952471176140136321_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=0debeb&_nc_ohc=7tzfm3-UhXUAX9rOyEr&tn=8GRw4kfDaz_OOoaS&_nc_ht=scontent-bog1-1.xx&oh=00_AT8Q43dsCA1EeyarY5QbwsRk1jNK7DcmTY5tV0j_L3tmLQ&oe=62A44D4A',
            'id_horario' => '1',
            'id_empresa' => '4',
        ]);
        DB::table('recorridos')->insert([
            'nombre_ruta' => 'Sotracauca Ruta 3 ida',
            'numero_ruta' => '1',
            'url_recorrido' => 'https://www.google.com/maps/d/u/0/edit?mid=1993xFeoXwhZ69tWKyoyu8iBq6szaOmQ&usp=sharing',
            'imagen_recorrido' => 'https://scontent-bog1-1.xx.fbcdn.net/v/t39.30808-6/286586372_116403604418208_5952471176140136321_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=0debeb&_nc_ohc=7tzfm3-UhXUAX9rOyEr&tn=8GRw4kfDaz_OOoaS&_nc_ht=scontent-bog1-1.xx&oh=00_AT8Q43dsCA1EeyarY5QbwsRk1jNK7DcmTY5tV0j_L3tmLQ&oe=62A44D4A',
            'id_horario' => '3',
            'id_empresa' => '4',
        ]);
        DB::table('recorridos')->insert([
            'nombre_ruta' => 'Sotracauca Ruta 3 vuelta',
            'numero_ruta' => '3',
            'url_recorrido' => 'https://www.google.com/maps/d/u/0/edit?mid=1993xFeoXwhZ69tWKyoyu8iBq6szaOmQ&usp=sharing',
            'imagen_recorrido' => 'https://scontent-bog1-1.xx.fbcdn.net/v/t39.30808-6/286586372_116403604418208_5952471176140136321_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=0debeb&_nc_ohc=7tzfm3-UhXUAX9rOyEr&tn=8GRw4kfDaz_OOoaS&_nc_ht=scontent-bog1-1.xx&oh=00_AT8Q43dsCA1EeyarY5QbwsRk1jNK7DcmTY5tV0j_L3tmLQ&oe=62A44D4A',
            'id_horario' => '1',
            'id_empresa' => '4',
        ]);
    }
}
