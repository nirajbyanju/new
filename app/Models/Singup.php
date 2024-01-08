<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Singup extends Model
{
    use HasFactory;
    protected $table = "signups";
    protected $fillable = ['name','email', 'password','cpassword'];
}
