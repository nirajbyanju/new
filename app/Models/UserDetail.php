<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blogs\post;

class UserDetail extends Model
{
    use HasFactory;
    protected $table = "userdetails";
    protected $primaryKey = 'user_id';
      protected $fillable = [
        'user_id',
        'photo',
        'bio',
        'company_name',
        'industry_type',
        'contact_email',
        'establishment',
        'phonenumber',
        'website',
        'location',
        'notification',
        'message',
        'role'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    

}
