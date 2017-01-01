<?php

use Illuminate\Database\Seeder;

class PostTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DatabaseSeeder::truncateTable('post_tags');

        DB::table('post_tags')->insert([
            'post_id' => '1',
            'tag_id' => '1'
        ]);

        DB::table('post_tags')->insert([
            'post_id' => '1',
            'tag_id' => '2'
        ]);

        DB::table('post_tags')->insert([
            'post_id' => '1',
            'tag_id' => '3'
        ]);
    }
}
