<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::factory()->create([
             'name' => 'Jeroen Hodenius',
             'email' => 'jeroenhodenius@gmail.com',
             'password' => Hash::make('.E]?v^2M55@snLEH')
         ]);
    }
}
