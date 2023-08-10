<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::truncate();
        Post::truncate();
        Category::truncate();

         $user = User::factory()->create();

         $personal = Category::create([
             'name' => 'Personal',
             'slug' => 'personal',
         ]);

         $family = Category::create([
             'name' => 'Family',
             'slug' => 'family',
         ]);

         $work = Category::create([
             'name' => 'Work',
             'slug' => 'work',
         ]);

         Post::create([
             'user_id' => $user->id,
             'category_id' => $personal->id,
             'title' => 'My First Post',
             'slug' => 'my-first-post',
             'excerpt' => "<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>",
             'body' => "<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>"
         ]);

         Post::create([
             'user_id' => 1,
             'category_id' => $work->id,
             'title' => 'My Second Post',
             'slug' => 'my-second-post',
             'excerpt' => "<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>",
             'body' => "<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>"
         ]);

    }
}
