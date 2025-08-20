<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Course;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
             'course_name' => fake()->word(3, true),  
             'course_code' => 'CSE ',fake()->numberBetween(),
             'student_id' => fake()->numberBetween(1,100), 

        ];
    }
}
