<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FormEntry extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'reason',
        'zip',
        'city',
        'state',
        'country',
        'message',
        'form_type', // e.g., Contact, Application, etc.
        // 'job_id', // If the form is related to a job
    ];

    // public function job()
    // {
    //     return $this->belongsTo(Job::class);
    // }
}