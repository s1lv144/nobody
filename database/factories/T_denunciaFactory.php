<?php

namespace Database\Factories;

use App\Models\c_catalogo;
use App\Models\status;
use App\Models\t_denuncia;
use App\Models\t_lugarhecho;
use App\Models\t_persona;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class T_denunciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = t_denuncia::class;
    public function definition()
    {
        return [
            //
            'telefono' =>$this->faker->numerify('########'),
            'relato' => $this->faker->word(50),
            'titulo' => $this->faker->word(20),
            'status' => '0',
            'tipodelito_id' => c_catalogo::all()->random()->id,
            'delito_id' => c_catalogo::all()->random()->id,
            'tipodenuncia_id' => c_catalogo::all()->random()->id,
            'tipoinfo_id' => c_catalogo::all()->random()->id,
            'user_id' => User::all()->random()->id,
            't_lugarhechos_id' => t_lugarhecho::all()->random()->id,
            't_personas_id' => t_persona::all()->random()->id,

        ];
    }
}
