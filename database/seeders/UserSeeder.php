<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('12345678'),
        ]);
        $admin->assignRole('ADMIN');

        $kepala = User::create([
            'name' => 'kepala',
            'email' => 'kepala@mail.com',
            'password' => bcrypt('12345678'),
        ]);
        $kepala->assignRole('KEPALA');
    }
}
