<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'photo',
        'created_by'
    ];

    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($article) {
            // Hapus file gambar dari storage
            Storage::delete($article->photo);
        });
    }

    public function created_by(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
