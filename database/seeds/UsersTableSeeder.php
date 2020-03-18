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
            'name' => 'zia',
            'email' => 'zia.csco@gmail.com',
            'password' => bcrypt('zia@12345'),
            'role' => 1
        ]);
    }
}
