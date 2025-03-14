<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Create predefined user
        User::create([
            'name' => 'M.K. Vishwa',
            'email' => 'm.k.vishwa007@gmail.com',
            'password' => Hash::make('123456'),
        ]);


        User::factory()->count(10)->create();
    }
}
