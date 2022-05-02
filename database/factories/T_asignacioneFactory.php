<?php

namespace Database\Factories;

use App\Models\t_asignacione;
use App\Models\t_lugarhecho;
use Illuminate\Database\Eloquent\Factories\Factory;

class T_asignacioneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = t_asignacione::class;
    public function definition()
    {
        return [
            //
            'status' => '0',
            'end_at'=>$this->date = new \DateTimeImmutable(),
            't_lugarhechos_id' => t_lugarhecho::all()->random()->id,
        ];
    }
}
