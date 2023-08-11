<?php

namespace App\Models\Member;

use App\Enums\Gender;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\URL;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Str;

class Member extends User
{
    use HasFactory, SoftDeletes,  HasRoles, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'avatar',
        'gender',
        'address',
        'is_active',
        'last_login',
        'last_login_ip',
        'last_login_useragent',
        'last_login_url',
        'token',
        'settings',
    ];

    protected $appends = [
        'gender_description',
    ];

    protected $casts = [
        'last_login'    => 'datetime',
    ];

    /**
     * @param $value
     * @return string
     */
    public function getAvatarAttribute($value)
    {
        return $value ? (Str::substr($value, 0, 4) == 'http' ? $value : URL::to('storage/' . $value))
            : null;
    }

    public function getGenderDescriptionAttribute()
    {
        return Gender::getDescription($this->gender);
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }

    public function scopeInactive($query)
    {
        return $query->where('is_active', 0);
    }
}
