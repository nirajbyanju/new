<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registration extends Model
{
    use HasFactory;
   protected $table = "registration";
    protected $primarykey =  "registration_id";
}
