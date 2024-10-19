<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Archive extends Model
{
    protected $fillable = [
        'bookmark_id',
        'archive_service',
        'archive_url',
        'archived_at'
    ];

    public function bookmark()
    {
        return $this->belongsTo(Bookmark::class);
    }
}
