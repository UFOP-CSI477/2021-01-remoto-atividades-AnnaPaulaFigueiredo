<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VacinaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => 'Vacina Covid-19',
            'fabricante'=> $this->faker-> randomElement(['CoronaVac', 'AstraZeneca', 'SpiN-Tec', 'Sputnik', 'Janssen', 'Pfizer']),
            'pais'=>$this->faker->country(),
            'doses'=>$this->faker->numberBetween(1, 3),
        ];
    }
}
