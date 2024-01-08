<?php

namespace App\Models\Blogs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blogs\post;
use App\Models\User;
use App\Models\Blogs\blogscomment;

class blogscomment extends Model
{
    use HasFactory;
    protected $connection = 'blogs';
    protected $table = "comments";
    protected $fillable =['user_id', 'post_id', 'prent_id', 'reply_id', 'comment','created_at','updated_at'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function post(){
        return $this->hasMany(post::class);
    }

    // Comment model
// In your blogscomment model
public function replies()
{
    return $this->hasMany(blogscomment::class, 'prent_id');
}
public function repliess()
{
    return $this->hasone(blogscomment::class,  'reply_id');
}


}
