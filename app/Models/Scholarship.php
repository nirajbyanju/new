<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    use HasFactory;
    protected $table = "scholarships";
    protected $fillable = ['id','tittleofopportunity','tags','sponsorby','opento','categoryofvacancy','position', 'website','emailid','phonenumber', 'publishdate','dateline','location', 'fundingtype', 'forwhom', 'numberofopportunity', 'experiencerequirment', 'educationrequirement', 'subtopic', 'descriptions', 'uploadcover', 'uploadlogo','created_at','updated_at'];
}