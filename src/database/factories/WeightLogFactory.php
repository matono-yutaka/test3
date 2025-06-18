<?php

namespace Database\Factories;

use App\Models\WeightLog;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\CarbonInterval;



class WeightLogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' =>  \App\Models\User::factory(),
            'date' => $this->faker->date(),
            'weight' => $this->faker->randomFloat(1, 65, 120),
            'calories' => $this->faker->numberBetween(1000,3000),
            'exercise_time' => CarbonInterval::minutes(rand(15, 120))->cascade()->format('%H:%I'),
            'exercise_content' => $this->faker->text(120),
        ];
    }
}
