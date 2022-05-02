<?php

namespace Database\Factories;

use App\Models\status;
use App\Models\t_asignacione;
use App\Models\t_lugarhecho;
use App\Models\t_patrulla;
use App\Models\t_resultado;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class T_resultadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = t_resultado::class;
    public function definition()
    {
        
        return [
            //
            'descripcion' => $this->faker->word(20),
            't_patrullas_id' => t_patrulla::all()->random()->id,
            't_lugarhechos_id' => t_lugarhecho::all()->random()->id,
            't_asignaciones_id' => t_asignacione::all()->random()->id,
            'user_id' => User::all()->random()->id,
            'status' =>'0'
            

        ];
    }
}
