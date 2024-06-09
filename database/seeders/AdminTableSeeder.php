<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'nama' => 'Admin Gadiza',
            'email' => 'admin@jago.com',
            'role' => 'admin',
            'password' => Hash::make('admin'),
            'slug_link' => 'admin'
        ]);
    }
}
