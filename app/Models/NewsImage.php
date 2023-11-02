<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsImage extends Model
{
    use HasFactory;

    protected $table = 'news_images';

    protected $fillable = [
        'news_id',
        'name',
        'type',
        'filename',
        'order',
        'status',
    ];

    public function newsItem()
    {
        return $this->belongsTo(NewsItem::class, 'news_id');
    }
}
