<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Awards extends Model
{
    protected $fillable = [
        'client',
        'award',
        'projects',
        'worker',
    ];
}
