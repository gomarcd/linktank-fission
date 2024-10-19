<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Bookmark;
use App\Models\Archive;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Bookmark::factory(10)
            ->for($user)
            ->has(Archive::factory(2))
            ->create();
    }
}