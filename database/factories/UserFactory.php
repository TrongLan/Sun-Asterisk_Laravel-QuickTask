<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "first_name" => $this->faker->name(),
            "last_name" => $this->faker->name(),
            "email" => $this->faker->unique()->safeEmail(),
            "password" => Hash::make("12345678"),
            "username" => $this->faker->name(),
            "email_verified_at" => now(),
            "remember_token" => Str::random(10),
        ];
    }
}
