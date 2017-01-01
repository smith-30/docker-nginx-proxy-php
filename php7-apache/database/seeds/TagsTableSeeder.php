<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DatabaseSeeder::truncateTable('tags');

        DB::table('tags')->insert([
            'title' => 'testTag1',
        ]);

        DB::table('tags')->insert([
            'title' => 'testTag2',
        ]);

        DB::table('tags')->insert([
            'title' => 'testTag3',
        ]);
    }
}
