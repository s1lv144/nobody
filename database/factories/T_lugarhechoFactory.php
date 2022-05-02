<?php

namespace Database\Factories;

use App\Models\c_catalogo;
use App\Models\t_lugarhecho;
use Illuminate\Database\Eloquent\Factories\Factory;

class T_lugarhechoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = t_lugarhecho::class;
    public function definition()
    {
        return [
            //
            'comunidad' => $this->faker->word(20),
            'complementodir' => $this->faker->word(20),
            'latitud' => $this->faker->word(20),
            'longitud' => $this->faker->word(20),
            'coduniorg' => $this->faker->word(20),
            'municipio_id' => c_catalogo::all()->random()->id,
            'departamento_id' => c_catalogo::all()->random()->id,
            'canton_id' => c_catalogo::all()->random()->id,

        ];
    }
}
