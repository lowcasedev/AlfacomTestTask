<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsItemCategory extends Model
{
    use HasFactory;

    protected $table = 'news_item_has_categories';

    protected $fillable = [
        'item_id',
        'category_id',
    ];

    public function newsItem()
    {
        return $this->belongsTo(NewsItem::class, 'item_id');
    }

    public function newsCategory()
    {
        return $this->belongsTo(NewsCategory::class, 'category_id');
    }
}
