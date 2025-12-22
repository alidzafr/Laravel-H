<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Skill;

class EmployeeController extends Controller
{
    public function index()
    {
        return Employee::with('skills')->get();
        
    }
}
