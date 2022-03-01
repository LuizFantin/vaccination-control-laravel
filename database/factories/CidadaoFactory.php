<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CidadaoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name(),
            'cpf' => $this->faker->cpf(),
            'data_nascimento' => $this->faker->date('Y-m-d'),
            'nome_da_mae' => $this->faker->firstNameFemale() . ' ' . $this->faker->lastName(),
            'sexo' => $this->faker->randomElement(['masculino', 'feminino']),
            'estado_civil' => $this->faker->randomElement(['solteiro', 'casado', 'divorciado']),
            'escolaridade' => $this->faker->randomElement(['fundamental', 'médio', 'superior']),
            'etnia' => $this->faker->randomElement(['branco', 'pardo', 'preto', 'indigena', 'amarelo']),
            'cns' => $this->faker->numerify('#######'),
            'telefone' => $this->faker->cellphonenumber(),
            'cep' => $this->faker->postcode(),
            'logradouro' => $this->faker->streetName(),
            'bairro' => 'Guriri',
            'numero' => $this->faker->buildingNumber(),
            'cidade' => $this->faker->city(),
            'uf' => $this->faker->stateAbbr(),
            'possui_plano_de_saude' => $this->faker->boolean()
        ];
    }
}
