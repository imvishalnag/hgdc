<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compulsory extends Model
{
    protected $table = "compulsories";
    protected $fillable = [
        'user_id','compulsory_subject','language',
    ];
}
