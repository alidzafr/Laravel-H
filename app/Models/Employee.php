<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Employee extends Model
{
    use Hasfactory;
    
    public function skills()
    {
        return $this->belongsToMany(
            Skill::class,
            'employee_skill',   // pivot table
            'employee_id',      // foreign key
            'skill_id'          // related key
        )->withTimestamps();
    }
}
