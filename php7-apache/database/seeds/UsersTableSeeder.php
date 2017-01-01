<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DatabaseSeeder::truncateTable('users');

        for ($i=0; $i<10; $i++) {
            $name = 'root'.$i;
            if ($i > 4) {
                $email = $name.'@gmail.com';
            } else {
                $email = $name.'@yahoo.com';
            }

            DB::table('users')->insert([
                'name' => $name,
                'email' => $email,
                'password' => bcrypt($name),
            ]);
        }
    }
}
