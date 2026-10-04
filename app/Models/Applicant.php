<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $fillable = [
        'industry_id',
        'job_posting_id',
        'sso_number',
        'full_name',
        'major',
        'dtp',
        'email',
        'phone',
        'linkedin_url',
        'skills',
        'ai_match_score',
        'work_preference',
        'status',
        'interview_details',
    ];

    protected $casts = [
        'skills' => 'array',
    ];

    public function industry()
    {
        return $this->belongsTo(Industry::class);
    }

    public function jobPosting()
    {
        return $this->belongsTo(JobPosting::class);
    }
}