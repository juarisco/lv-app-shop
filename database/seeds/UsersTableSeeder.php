<?php

use App\User;
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
        User::create([
            'name' => 'John Doe',
            'email' => 'john@doe.com',
            'password' => bcrypt('secret'),
            'admin' => true
        ]);

        User::create([
            'name' => 'Jane Doe',
            'email' => 'jane@doe.com',
            'password' => bcrypt('secret'),
        ]);


    }
}
