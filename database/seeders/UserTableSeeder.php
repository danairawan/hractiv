<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superoot = User::create([
            'name' => "Nabil",
            'email' => 'nabil@activ.co.id',
            'password' => bcrypt('password')
        ]);
        $superoot->assignRole('superoot');

        $engineer = User::create([
            'name' => "Handrian WU",
            'email' => 'han@activ.co.id',
            'password' => bcrypt('password')
        ]);
        $engineer->assignRole('superoot');
    }
}
