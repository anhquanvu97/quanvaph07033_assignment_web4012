<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // protected $table = '<table_name>';
    // protected $primaryKey = '<key>';

    protected $fillable = [
        'title', 'content',
    ];

    public function ShowNameCategory()
    {
        return $this->belongsTo('App\Models\Category', 'category_id', 'id');
    }
    public function ShowNameUser()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
