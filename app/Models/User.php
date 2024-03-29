<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','date_of_birth','phone', 'email', 'password','role','is_active','created_at','updated_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts()
    {
        // Khai báo khoá ngooại (user_id) bên bảng posts
        // Khai báo khoá chính id
        return $this->hasMany(Post::class, 'user_id', 'id');
    }
    public function categories()
    {
        // Khai báo khoá ngooại (user_id) bên bảng posts
        // Khai báo khoá chính id
        return $this->hasMany(Category::class, 'user_id', 'id');
    }
    public function comments()
    {
        // Khai báo khoá ngooại (user_id) bên bảng posts
        // Khai báo khoá chính id
        return $this->hasMany(Comment::class, 'user_id', 'id');
    }
}
