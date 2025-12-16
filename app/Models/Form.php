<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',            
        'title',
        'email_address',
        'website',
        'phone_number',
        'secret_code',
        'search_term',
        'age',
        'satisfaction_score',
        'event_date',
        'start_time',
        'appointment_time',
        'fav_month',
        'fav_week',
        'is_visible',
        't_shirt_size',
        'theme_color',
        'resume_path',
        'tracking_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}