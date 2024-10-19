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
        User::all()->each(function ($user) {
            Bookmark::factory(10)
                ->for($user)
                ->has(Archive::factory(2))
                ->create();
        });
    }
}