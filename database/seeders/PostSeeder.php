<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use function Laravel\Prompts\table;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //        DB::table('users')->insert([
//            'name' => fake()->name,
//            'email' => fake()->email,
//            'password' => Hash::make('password')
//        ]);
        $posts = [];
        $countUsers = DB::table('users')->select('id')->get();
        for ($i = 0; $i < 50; $i++) {
            $title = fake()->text(50);
            $slug = Str::of($title)->slug('-');
            $content =  fake()->text();
            $date = fake()->date();
            $image = fake()->image;
            $user_id = $countUsers->random()->id;
            $posts = [
                'title' => $title,
                'slug' => $slug,
                'content' =>$content,
                'date' => $date,
                'image' => $image,
                'user_id' => $user_id
            ];

            DB::table('posts')->insert($posts);
        }
    }
}
