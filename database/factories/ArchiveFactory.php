<?php

namespace Database\Factories;

use App\Models\Archive;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArchiveFactory extends Factory
{
    protected $model = Archive::class;

    public function definition()
    {
        return [
            'bookmark_id' => \App\Models\Bookmark::factory(),
            'archive_service' => $this->faker->randomElement(['Wayback Machine', 'Archive.is']),
            'archive_url' => $this->faker->url(),
            'archived_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}