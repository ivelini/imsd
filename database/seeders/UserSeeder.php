<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        User::create([
            'name' => 'user',
            'email' => 'user@test.ru',
            'password' => bcrypt('123123'),
        ]);
    }
}
