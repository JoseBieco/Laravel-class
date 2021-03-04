<?php

namespace Database\Factories;

use App\Models\Teste;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TesteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Teste::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory()->create(),
            'title' => $this->faker->sentence,
            'subTitle' => $this->faker->sentence,
            'text' => $this->faker->paragraph,
        ];
    }
}

// Teste::factory()->create(['user_id'] => 1)