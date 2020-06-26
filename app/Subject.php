<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = "subjects";
    protected $fillable = [
        'user_id','subject_name','full_marks','marks_scored',
    ];
}
