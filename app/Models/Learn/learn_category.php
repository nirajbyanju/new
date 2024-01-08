<?php

namespace App\Models\Learn;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class learn_category extends Model
{
    use HasFactory;
    protected $connection = 'learn';
    protected $table = "learn_category";
    protected $fillable = ['id','name','slug'];
}
