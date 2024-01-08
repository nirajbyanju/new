<?php

namespace App\Models\Blogs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserDetail;
use App\Models\Blogs\blogscomment;
class post extends Model
{ 
    use HasFactory;
    protected $connection = 'blogs';
    protected $table = "post";
    protected $primaryKey = 'post_id';
    protected $fillable =['post_id', 'title', 'user_id', 'author', 'tags', 'category', 'status', 'content','publish_date', 'thumbnail', 'media' ];


// In your post model
public function comments()
{
    return $this->hasMany(blogscomment::class, 'post_id') // Explicitly specify the foreign key
        ->where(function ($query) {
            $query->whereNull('prent_id')
                  ->orWhereNull('reply_id');
        });
}



}
