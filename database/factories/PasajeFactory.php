<?php

namespace Database\Factories;

use App\Models\Pasaje;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pasaje>
 */
class PasajeFactory extends Factory
{
    protected $model = Pasaje::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'dni'=>fake()->randomNumber(8,true),
            'nombres' =>fake()->firstName(),
            'apellidos' =>fake()->lastName(),
            'precio' =>fake()->randomFloat(2, 100,999),
            'destino' =>fake()->city(),
            'fechaviaje' =>fake()->dateTimeBetween('now', '+1 month'),
            'asiento'=> fake()->unique()->numberBetween(0,100)
        ];
    }
}
