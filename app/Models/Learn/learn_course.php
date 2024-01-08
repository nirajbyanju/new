<?php

namespace App\Models\Learn;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class learn_course extends Model
{
    use HasFactory;
    protected $connection = 'learn';
    protected $table = "course";
    protected $fillable = ['id','title','short_description','description','outcomes','language','category_id','section','requirements','price','discount_flag','discount_flag','level','user_id','thumbnail'
    ,'video_url','date_added','last_modified','course_type','is_top_course','is_admin','status','course_overview_provider','meta_keywords','meta_description','is_free_course','multi_instructor','creator'
];
}
