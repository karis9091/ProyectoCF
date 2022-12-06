<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Database\Factories\UsuarioFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'nombre' => fake()->name(),
            'edad'=>fake()->numberBetween(1,100),
            'password'=>Hash::make (Str::random(10)),
            'email'=>fake()->safeEmail(),

        ];
    }
}
