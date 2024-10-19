<?php

namespace Database\Factories;

use App\Models\Bookmark;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BookmarkFactory extends Factory
{
    protected $model = Bookmark::class;

    public function definition()
    {
        return [
            'url' => $this->faker->url,
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'user_id' => \App\Models\User::factory(),
        ];
    }
}