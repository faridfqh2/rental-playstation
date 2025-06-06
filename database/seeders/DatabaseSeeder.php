<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'farid',
            'email' => 'test@example.com',
            'password'=> bcrypt('abcd123'),
            'phone' => '081347515557',
            'role' => 'admin'
        ]);
         $this->call(OrderSeeder::class);
    }
}
