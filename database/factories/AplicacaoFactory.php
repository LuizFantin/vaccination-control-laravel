<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AplicacaoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cidadao_id' => $this->faker->randomDigitNot(0),
            'vacina_id' => $this->faker->randomDigitNot(0),
            'dose' => '1',
            'data_de_aplicacao' => $this->faker->date('d/m/Y'),
            'aplicador' => $this->faker->name(),
            'unidade_de_saude' => $this->faker->company()
        ];
    }
}
