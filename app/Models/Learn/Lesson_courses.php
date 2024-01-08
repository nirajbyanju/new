<?php

namespace App\Models\Learn;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson_courses extends Model
{
    use HasFactory;
    protected $connection = 'learn';
    protected $table = "lesson";
    protected $primaryKey = 'lesson_id';
    protected $fillable = ['lesson_id','course_id','title','content'];

}
