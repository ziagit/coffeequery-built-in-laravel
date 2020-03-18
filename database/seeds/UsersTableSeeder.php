<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'coffee',
            'email' => 'coffee@gmail.com',
            'password' => bcrypt('coffee12345'),
            'role' => 1
        ]);
    }
}
