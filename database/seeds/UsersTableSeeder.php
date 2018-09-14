<?php

use Illuminate\Database\Seeder;
use \App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User;
        $admin->name = 'Fernando Puchana';
        $admin->email = 'fernando.2889@gmail.com';
        $admin->password = bcrypt('qwerty');
        $admin->save();
    }
}
