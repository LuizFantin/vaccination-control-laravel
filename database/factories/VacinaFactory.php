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
            'nome' => $this->faker->word(),
            'fabricante' => $this->faker->company(),
            'lote' => $this->faker->bothify('???-####'),
            'data_de_validade' => $this->faker->date('Y-m-d'),
            'quantidade_de_doses' => $this->faker->randomDigitNot(0),
            'doenca' => $this->faker->word(),
        ];
    }
}
