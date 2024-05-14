<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected static function booted(): void
    {
        self::deleting(function (Post $post) {
            Storage::disk('public')->delete($post->image);
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
