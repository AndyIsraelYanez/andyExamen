<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,

            'fullName' => $this->faker->sentence(),

            'email' => $this->faker->sentence(),

            'phone' => $this->faker->sentence(),
            
            'age' => $this->faker->sentence(),

            'dateOfBirth' => $this->faker->date,
            

            'setting_id' => $this->faker->unique()->numberBetween(1, 8)
        ];
    }
}
