<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tags_to_news extends Model
{
    use HasFactory;
    protected $table='tag_to_news';

    // protected $fillable = [
    //     'news_id',
    //     'tag_id',
    // ];
    // public function news()
    // {
    //     return $this->belongsTo(News::class);
    // }
    // public function tags()
    // {
    //     return $this->belongsTo(Tags::class);
    // }
}
