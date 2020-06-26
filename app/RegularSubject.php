<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegularSubject extends Model
{
    protected $table = "regular_subjects";
    protected $fillable = [
        'user_id','subjects',
    ];
}
