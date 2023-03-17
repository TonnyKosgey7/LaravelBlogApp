<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'auth_level' => 'user',
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (User $user) {
            //
        });
    }

    public function superAdmin()
    {
        return $this->state(function (array $attributes) {
            return [
                'auth_level' => 'superAdmin',
            ];
        });
    }

    public function admin()
    {
        return $this->state(function (array $attributes) {
            return [
                'auth_level' => 'admin',
            ];
        });
    }

    public function user()
    {
        return $this->state(function (array $attributes) {
            return [
                'auth_level' => 'user',
            ];
        });
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
