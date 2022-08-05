<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\endereco>
 */
class enderecoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'rua' => fake()->streetName(),
            'numero' => fake()->buildingNumber(),
            'bairro' => fake()->streetSuffix(),
            'cep' => fake()->postcode(),
            'cidade' => fake()->city(),
            'estado' => fake()->state(),
        ];
    }
}
