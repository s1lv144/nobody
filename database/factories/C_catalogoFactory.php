<?php

namespace Database\Factories;

use App\Models\c_catalogo;
use App\Models\c_tipocatalogo;
use App\Models\status;
use Illuminate\Database\Eloquent\Factories\Factory;

class C_catalogoFactory extends Factory
{
    /**
     * Define the model's default state.
     * protected $model = c_tipocatalogo::class;
     * @return array
     */
    protected $model = c_catalogo::class;
    public function definition()
    {
        $name = $this->faker->unique()->word(20);
        return [
            'descripcion' => $name,
            'status' => '0',
            'child_id' =>$this->faker->randomNumber(),
            'c_tipocatalogo_id' => c_tipocatalogo::all()->random()->id,
        ];
    }
}
