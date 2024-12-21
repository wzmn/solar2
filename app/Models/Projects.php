<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'client',
        // 'start_date',
        // 'end_date',
    ];

    // protected $casts = [
    //     'start_date' => 'date',
    //     'end_date' => 'date',
    // ];
}