<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Candidate extends Model
{
    protected $fillable = [
        'name',
        'gender',
        'city',
    ];

    protected $casts = [
        'skills' => 'array'
    ];
}
