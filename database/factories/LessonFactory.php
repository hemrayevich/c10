<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'classroom_id' => \App\Models\Classroom::inRandomOrder()->first()->id,
            'branch_id' => \App\Models\Branch::inRandomOrder()->first()->id,
            'teacher_id' => \App\Models\Teacher::inRandomOrder()->first()->id,

        ];
    }
}
