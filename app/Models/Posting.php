<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Posting extends Model
{
    use HasFactory;
    protected $table = "postingvacancy";
    protected $fillable = ['id', 'nameofcompany', 'position', 'categoryofvacancy', 'phonenumber', 'website', 'emailid', 'publishdate', 'dateline', 'workingplace', 'jobstypes', 'jobslevel', 'numberofvacancy', 'uploadcompanylogo', 'tags', 'educationrequirement', 'experiencerequirment', 'salary', 'descriptions'];



}
