<?php

namespace App\Models\Learn;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enrollment_courses extends Model
{
    use HasFactory;
    protected $connection = 'learn';
    protected $table = "learn_enroll";
    protected $fillable = ['id','user_id','course_id'];
}
