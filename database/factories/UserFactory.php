<?php

namespace Database\Factories;
<<<<<<< HEAD

use Illuminate\Database\Eloquent\Factories\Factory;
=======
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
>>>>>>> front/main
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
<<<<<<< HEAD
=======
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
>>>>>>> front/main
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
<<<<<<< HEAD
    public function definition()
=======
    public function definition(): array
>>>>>>> front/main
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
<<<<<<< HEAD
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
=======
            'password' => static::$password ??= Hash::make('password'),
>>>>>>> front/main
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
<<<<<<< HEAD
     *
     * @return static
     */
    public function unverified()
=======
     */
    public function unverified(): static
>>>>>>> front/main
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
<<<<<<< HEAD
=======


>>>>>>> front/main
