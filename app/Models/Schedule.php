<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_mentor',
        'id_mentee',
        'id_course',
        'days',
        'isValid'
    ];

    protected $table = 'schedules';
}
