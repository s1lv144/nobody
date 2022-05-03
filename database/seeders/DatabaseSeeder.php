<?php

namespace Database\Seeders;

use App\Models\c_catalogo;
use App\Models\c_tipocatalogo;
use App\Models\t_asignacione;
use App\Models\t_delito;
use App\Models\t_denuncia;
use App\Models\t_image;
use App\Models\t_lugarhecho;
use App\Models\t_patrulla;
use App\Models\t_patrullasper;
use App\Models\t_persona;
use App\Models\t_resultado;
use App\Models\User;
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
         \App\Models\c_tipocatalogo::factory(10)->create();
         $this->call(UserSeeder::class);
       //  User::factory(5)->create();
       // c_tipocatalogo::factory(8)->create();
        c_catalogo::factory(60)->create();
        t_persona::factory(50)->create();
        t_lugarhecho::factory(50)->create();
        t_denuncia::factory(50)->create();
        t_delito::factory(50)->create();

        t_asignacione::factory(50)->create();




        t_patrulla::factory(50)->create();
        t_patrullasper::factory(50)->create();

        t_resultado::factory(50)->create();
        t_image::factory(50)->create();

    }
}
