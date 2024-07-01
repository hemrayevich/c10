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
        $this->call([
            LocationSeeder::class,
            ClassroomSeeder::class,
            BranchSeeder::class,
        ]);

        \App\Models\Teacher::factory(10)->create();
        \App\Models\Student::factory(50)->create();
        \App\Models\Lesson::factory(50)->create();
        \App\Models\Registration::factory(100)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
