<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    

    public function definition(): array
    {
        /**
         * 기존 fake()->imageUrl 주소가 변경되어 임시방편으로 array를 생성해서 랜덤으로 돌림
         */
        $imgUrlArr = [
            "https://placehold.co/600x400",
            "https://placehold.co/800x300",
            "https://placehold.co/500x200",
            "https://placehold.co/300x300"
        ];
        return [
            'name'  => fake()->sentence(),
            'description'   =>  fake()->realText(),
            'due_date'   =>  fake()->dateTimeBetween('now','+1 year'),
            'status'    =>  fake()->randomElement(['pending','in_progress','completed']),
            'image_path'    =>  fake()->randomElement($imgUrlArr),
            'created_by'    =>  1,
            'updated_by'    =>  1,
            'created_at'    =>  time(),
            'updated_at'    =>  time()
        ];
    }
}
