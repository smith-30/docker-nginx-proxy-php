<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DatabaseSeeder::truncateTable('posts');

        DB::table('posts')->insert([
            'title' => 'test1',
            'content' => 'test1',
            'user_id' => '1'
        ]);
    }
}
