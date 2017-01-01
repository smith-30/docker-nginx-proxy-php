<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UsersTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(PostTagsTableSeeder::class);
        $this->call(TagsTableSeeder::class);

        Model::reguard();
    }

    public static function truncateTable($table)
    {
        DB::statement('SET foreign_key_checks = 0');
        DB::table($table)->truncate();
        DB::statement('SET foreign_key_checks = 1');
    }

}
