<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class VentasFactory extends Factory
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
            'id_usuario'=>fake()->name(),
            'id_producto'=>fake()->numberBetween(1-100),
            'fecha_venta'=>fake()->numberBetween(60-1000),

        ];
    }
}
