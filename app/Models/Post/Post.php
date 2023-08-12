<?php

namespace App\Models\Post;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\URL;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'cover_image',
        'type',
        'views',
        'published',
        'published_at',
        'created_by',
        'post_category_id',
        'link'
    ];


    protected $casts = [
        'published_at' => 'datetime',
    ];

    protected $statuses = array(
        0 => 'Draft',
        1 => 'Published'
    );

    protected $appends = ['published_text', 'content_text'];

    public function getPublishedTextAttribute()
    {
        return $this->statuses[$this->published] ?? null;
    }

    public function getContentTextAttribute($value)
    {
        $temp = strip_tags(html_entity_decode($value));
        $temp = trim(preg_replace('/\s\s+/', '', $temp));
        $temp = preg_replace('/\xc2\xa0/', ' ', $temp);
        return $temp;
    }


    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function scopePublished($query)
    {
        return $query->where('published', 1);
    }

    public function scopeType($query, $type)
    {
        return $query->where('type', $type);
    }

    public function getCoverImageAttribute($value)
    {
        return $value ? URL::to('storage/' . $value) : null;
    }
}
