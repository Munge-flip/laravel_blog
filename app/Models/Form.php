<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = [
        'username',
        'password'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
