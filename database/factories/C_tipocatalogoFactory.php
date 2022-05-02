<?php

namespace Database\Factories;

use App\Models\c_tipocatalogo;
use App\Models\status;
use Illuminate\Database\Eloquent\Factories\Factory;

class C_tipocatalogoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = c_tipocatalogo::class;
    public function definition()
    {
        $name = $this->faker->unique()->word(20);
        
        return [
            'descripcion' => $name,
            'status' =>'0'
          //'status' => $this->faker->randomElement([Post::BORRADOR, Post::PUBLICADO]),
        ];
    }
}
