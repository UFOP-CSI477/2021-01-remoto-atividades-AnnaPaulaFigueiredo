<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pessoa;

class PessoaFactory extends Factory
{   
    protected $model = Pessoa::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome'=> $this->faker->firstName($gender = 'male'|'female'),
            'bairro'=>$this->faker->streetName(),
            'cidade'=>$this->faker->city(),
            'estado'=>$this->faker->stateAbbr(),
            'data_nascimento'=>$this->faker->date('Y_m_d'),
            'cpf'=>$this->faker->cpf(false)
        ];
    }
}
