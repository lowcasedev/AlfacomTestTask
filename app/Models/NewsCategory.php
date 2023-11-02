<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    use HasFactory;

    protected $table = 'news_categories';

    protected $fillable = [
        'name',
        'parent_id',
        'lft',
        'rgt',
        'depth',
        'order',
        'status',
    ];

    public function newsItems()
    {
        return $this->belongsToMany(NewsItem::class, 'news_item_has_categories', 'category_id', 'item_id');
    }
}
