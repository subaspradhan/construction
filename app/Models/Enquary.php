<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enquary extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
        'message',
        'price_id',
        'status',
    ];
}
