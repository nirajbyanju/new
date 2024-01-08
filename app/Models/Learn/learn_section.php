<?php

namespace App\Models\Learn;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class learn_section extends Model
{
    use HasFactory;
    protected $connection = 'learn';
    protected $table = "learn_section";
    protected $fillable = ['id','title','course_id','order'];
}
