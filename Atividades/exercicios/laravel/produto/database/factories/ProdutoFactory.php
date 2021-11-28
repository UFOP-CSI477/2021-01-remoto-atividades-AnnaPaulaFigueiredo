<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class ProdutoFactory extends Factory
{   
   

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->words(1),
            'quantidade' => $this->faker->randomNumber(3, false),
            'tipo' => $this->faker->sentence(3)          
        ];
    }
}
