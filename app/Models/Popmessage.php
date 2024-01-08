<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Popmessage extends Model
{
    use HasFactory;
    protected $table = "popmessage";
    protected $fillable = ['id', 'image', 'description', 'date', 'views'];
}

