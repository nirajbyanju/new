<?php

namespace App\Models\Learn;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class learn_courses extends Model
{
    use HasFactory;
    protected $connection = 'learn';
    protected $table = "courses";
    protected $primaryKey = 'course_id';
    protected $fillable = ['course_id','user_id','title','description','courses_caergories','courses_features','courses_photo'];
}
