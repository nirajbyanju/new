<?php

namespace App\Models\Blogs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogscategory extends Model
{
    use HasFactory;
    protected $connection = 'blogs';
    protected $table = "blogs_category";
    protected $primaryKey = 'category_id';
    protected $fillable =['category_id', 'name', 'slug'];


}
