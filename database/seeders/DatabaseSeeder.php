<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'first_name' => 'Test User',
            'email' => 'eshop@gmail.com',
            'role_id'=>1,
            'password'=>Hash::make('password'),
            'status'=>'active'
        ]);
        $this->call(RoleSeeder::class);
    }
}
