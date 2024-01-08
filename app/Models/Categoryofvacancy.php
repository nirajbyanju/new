<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoryofvacancy extends Model
{
    use HasFactory;
    protected $table = "categoryofvacancy";
    protected $fillable = ['cat_id','categoryofvacancy'];
}
