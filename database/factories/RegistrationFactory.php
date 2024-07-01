<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Registration>
 */
class RegistrationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'lesson_id'=> \App\Models\Lesson::inRandomOrder()->first()->id,
            'student_id'=> \App\Models\Student::inRandomOrder()->first()->id,
            'price'=>$this->faker->randomFloat(2,10,100),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
