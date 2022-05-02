<?php

namespace Database\Factories;

use App\Models\status;
use App\Models\t_asignacione;
use App\Models\t_lugarhecho;
use App\Models\t_patrulla;
use Illuminate\Database\Eloquent\Factories\Factory;

class T_patrullaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = t_patrulla::class;
    public function definition()
    {
        return [
            //
            'status' => '0',
            't_lugarhechos_id' => t_lugarhecho::all()->random()->id,
            't_asignaciones_id' => t_asignacione::all()->random()->id,
           
        ];
    }
}
