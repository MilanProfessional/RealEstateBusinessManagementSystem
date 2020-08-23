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
        DB::table('users')->insert([
        	'name' => 'Milan',
        	'email' => 'milan@gmail.com',
        	'password' => bcrypt('milan'),
        	'address' => 'pokhara',
        	'mobileno' => '9804129459',
        	]);
    }
}
