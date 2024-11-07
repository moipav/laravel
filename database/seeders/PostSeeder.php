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
        for ($i = 0; $i < 50; $i++) {
            $countUsers = DB::table('users')->select('id')->get();
            $ran = $countUsers->random()->id;
            $title = fake()->text(50);
            $slug = Str::of($title)->slug('-');
            DB::table('posts')->insert([
                'title' => $title,
                'slug' => $slug,
                'content' => fake()->text(),
                'date' => fake()->date(),
                'image' => fake()->image,
                'user_id' => $ran

            ]);
        }
    }
}
