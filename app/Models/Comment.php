<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // protected $table = '<table_name>';
    // protected $primaryKey = '<key>';

    protected $fillable = [
        'title', 'content',
    ];

    public function user_name()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
