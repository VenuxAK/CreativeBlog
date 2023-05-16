<?php

namespace Database\Factories;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "body" => $this->faker->paragraph(),
            "user_id" => User::find(1)->id,
            "blog_id" => Blog::find(15)->id,
        ];
    }
}
