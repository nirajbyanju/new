<?php

namespace App\Models\Learn;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class learn_lesson extends Model
{
    use HasFactory;
    
    protected $connection = 'learn';
    protected $table = 'learn_lesson';
    
    public $timestamps = false; // Disable automatic timestamps
    
    protected $fillable = [
        'title',
        'duration',
        'course_id',
        'section_id',
        'lesson_type',
        'video_url',
        'video_file',
        'document_type',
        'document_upload',
        'iframe_upload',
        'summary',
        'date_added',
        'last_modified',
        'is_free',
        'order'];

}
