<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = [
        'firstName',
        'lastName',
        'middleName',
        'dateOfBirth',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
