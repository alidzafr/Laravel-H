<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $guarded = [
        'id'
    ];

    public function employees()
    {
        return $this->belongsToMany(Employee::class, 'employee_skills', 'skill_id', 'employee_id')->withTimestamps();
    }
}
