<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name',
        'details',
        'cname',
        'aname',
        'bname',
        'price',
        'image',
    ];
}
