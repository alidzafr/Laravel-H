<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Skill;

class EmployeeController extends Controller
{
    public function index()
    {
        // return Employee::with('skills')->get();
        $employees = Employee::with('skills')->get();
        
        return view('employee.index', [
            'employees' => $employees,
        ]);
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        $employees = Employee::where('name', 'LIKE', '%' . $keyword . '%')->get();

        return view('employee.index', [
            'employees' => $employees,
            'keyword' => $keyword
        ]);
    }
}
