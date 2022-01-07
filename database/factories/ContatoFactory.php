<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContatoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create('pt_BR');
        return [
            'nome' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'cpf' => $faker->cpf(false),
            'telefone' => $faker->cellphoneNumber,
            'data_nascimento' => $this->faker->date('Y-m-d'),
        ];
    }
}
