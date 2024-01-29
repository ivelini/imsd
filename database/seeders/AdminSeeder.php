<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        Admin::create([
            'name' => 'admin',
            'email' => 'ivelini@yandex.ru',
            'password' => bcrypt('123123'),
            'is_active' => 1,
        ]);
    }
}
