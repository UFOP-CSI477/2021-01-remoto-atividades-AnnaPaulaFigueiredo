<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RegistroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'pessoa_id'=>$this->faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
            'unidade_id'=>$this->faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
            'vacina_id'=>$this->faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
            'data'=>$this->faker->date('Y_m_d'),
        ];
    }
}
