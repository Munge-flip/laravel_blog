<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = [
        'text',
        'email',
        'password',
        'color',
        'radio',
        'checkbox',
        'date',
    ];
    public function user() {
        return $this->belongsTo(User::class);
    }
}
