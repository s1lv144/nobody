<?php

namespace Database\Factories;

use App\Models\c_catalogo;
use App\Models\status;
use App\Models\t_patrulla;
use App\Models\t_patrullasper;
use Illuminate\Database\Eloquent\Factories\Factory;

class T_patrullasperFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = t_patrullasper::class;
    public function definition()
    {
        return [
            //
            'dui' => $this->faker->numerify('#########'),
            'codper' => $this->faker->numerify('#####'),
            'nombre' => $this->faker->word(20),
            'apellido' => $this->faker->word(20),
            'categoria' => $this->faker->word(10),
            'status' => '0',
            'rol_id' => c_catalogo::all()->random()->id,
            't_patrullas_id' => t_patrulla::all()->random()->id,

        ];
    }
}
