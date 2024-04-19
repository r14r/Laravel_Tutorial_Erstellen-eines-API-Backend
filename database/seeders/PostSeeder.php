<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    static $posts = [
        ['title' => 'Summer Health', 'content' => 'Stay hydrated!'],
        ['title' => 'Pasta Recipe', 'content' => 'Tomato base'],
        ['title' => 'Decor Ideas', 'content' => 'Go minimal'],
        ['title' => 'Python Tips', 'content' => 'Use lists']
    ];


    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $this->command->info('Seeding Posts table');
        foreach (self::$posts as $post) {

            DB::table('posts')->insert([
                'title' => $post['title'], 'content' => $post['content']
            ]);
        }
    }
}
