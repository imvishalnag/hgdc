<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HonoursSujbect extends Model
{
    
    protected $table = "honours_sujbects";
    protected $fillable = [
        'user_id','honors','honors_other',
    ];
}
