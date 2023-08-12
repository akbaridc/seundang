<?php

namespace App\Models\Site;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\URL;

class Site extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'about',
        'site_keywords',
        'logo',
        'address',
        'phone',
        'whatsapp',
        'email',
        'facebook_link',
        'instagram_link',
        'twitter_link',
        'youtube_link',
        'playstore_link',
        'appstore_link',
    ];

    public function getLogoAttribute($value)
    {
        return $value ? URL::to('storage/' . $value) : null;
    }
}
