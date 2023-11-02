<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsItem extends Model
{
    use HasFactory;

    protected $table = 'news_items';

    protected $fillable = [
        'name',
        'avatar',
        'description',
        'event_date',
        'status',
    ];

    public function categories()
    {
        return $this->belongsToMany(NewsCategory::class, 'news_item_has_categories', 'item_id', 'category_id');
    }

    public function images()
    {
        return $this->hasMany(NewsImage::class, 'news_id');
    }
}
