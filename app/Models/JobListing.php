<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobListing extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'date',
        'apply_link'
        // 'location',
        // 'type', // e.g., Full-time, Part-time, Contract
        // 'salary',
        // 'closing_date',
        // 'company', // Company name
        // 'company_logo', // Path to company logo
    ];

    // protected $casts = [
    //     'closing_date' => 'datetime',
    // ];
}