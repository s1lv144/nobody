<?php

namespace Database\Factories;

use App\Models\status;
use App\Models\t_image;
use App\Models\t_resultado;
use Illuminate\Database\Eloquent\Factories\Factory;

class T_imageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = t_image::class;
    public function definition()
    {

        return [
            //
            'url' => 'resultados/' . $this->faker->image('public/storage/resultados', 640, 480, null, false),
            'status' =>'0',
            't_resultados_id' => t_resultado::all()->random()->id,
        ];
    }
}
