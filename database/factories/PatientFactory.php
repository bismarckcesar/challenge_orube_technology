<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Patient::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            //
            'name'=> $this->faker->name($gender = null),
            'age'=> $this->faker->randomNumber(2, false),
            'height'=> $this->faker->randomFloat(2, 1, 2),
            'weight'=> $this->faker->randomFloat(2, 30, 90),
            'gender'=> $this->faker->randomElement(['M','F']),
            'health_plan'=> $this->faker->word(),
        ];
    }
}
