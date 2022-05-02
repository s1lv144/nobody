<?php

namespace Database\Factories;

use App\Models\c_catalogo;
use App\Models\status;
use App\Models\t_persona;
use Illuminate\Database\Eloquent\Factories\Factory;

class T_personaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = t_persona::class;
    public function definition()
    {
       
        return [
            //
            'nombre' => $this->faker->word(20),
            'apellido' => $this->faker->word(20),
            'comentario' => $this->faker->word(20),
            'alias' => $this->faker->word(20),
            'clave' => $this->faker->word(20),
            'otraorg' => $this->faker->word(20),
            'edad' =>$this->faker->numerify('##'),
            'dui' =>$this->faker->numerify('##########'),
            'rol_id' => c_catalogo::all()->random()->id,
            'pandilla_id' => c_catalogo::all()->random()->id,
            'genero_id' => c_catalogo::all()->random()->id,
            'organizacion_id' => c_catalogo::all()->random()->id,
            'status' =>'0'
        ];
    }
}
