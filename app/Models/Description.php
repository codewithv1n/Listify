<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Description extends Model
{
    protected $fillable = ['message', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
