<?php

namespace Database\Factories;

use App\Models\status;
use App\Models\t_delito;
use App\Models\t_persona;
use Illuminate\Database\Eloquent\Factories\Factory;

class T_delitoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = t_delito::class;
    public function definition()
    {
        return [
            //
            'status' => '0',
            't_personas_id' => t_persona::all()->random()->id,
        ];
    }
}
