<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'John Doe',
            'email' => 'info@codewithdary.com',
            'password' => '$2a$12$zMTftpNHM8/sgB0I26ggJOAWWPpuY5OJH3j2m3vg56frHM5FUdGAq',
        ]);
    }
}
