<?php

use CodeShopping\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        factory(User::class,1)->create(['email' => 'admin@user.com']);
        factory(User::class,3)->create();
    }
}
