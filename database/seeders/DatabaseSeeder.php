<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $user1 = User::factory()->create([
        //     "name" => "Ar Kar",
        //     "username" => "arkar"
        // ]);
        // $user2 = User::factory()->create([
        //     "name" => "Minn Minn",
        //     "username" => "minn"
        // ]);

        // $category1 = Category::factory()->create([
        //     "name" => "Travel",
        //     "slug" => "travel"
        // ]);
        // $category2 = Category::factory()->create([
        //     "name" => "Nature",
        //     "slug" => "nature"
        // ]);
        // $category3 = Category::factory()->create([
        //     "name" => "Vlog",
        //     "slug" => "vlog"
        // ]);

        // Blog::factory(5)->create([
        //     "category_id" => $category1->id,
        //     "user_id" => $user1->id
        // ]);
        // Blog::factory(5)->create([
        //     "category_id" => $category2->id,
        //     "user_id" => User::find(1)->id
        // ]);
        // Blog::factory(3)->create([
        //     "category_id" => $category3->id,
        //     "user_id" => $user2->id
        // ]);
        // Blog::factory()->create([
        //     "category_id" => Category::find(1)->id,
        //     "user_id" => User::find(1)->id
        // ]);
    }
}
