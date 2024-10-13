<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    use HasFactory;
    protected $table = 'jobs_company';
    protected $fillable = ['job_title', 'job_description', 'job_type', 'job_location', 'job_category', 'job_salary', 'job_status'];
}
