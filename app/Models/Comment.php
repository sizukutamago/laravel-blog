<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function article()
    {
        return $this->belongsTo(Article::class, 'article_id');
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
