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

    public function dashboard()
    {
        return view('employee.dashboard');
    }

    public function upload()
    {
        return view('employee.upload');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'gender' => 'required|in:male,female',
            'skills' => 'required|array|min:1',
            'skills.*' => 'string|max:50'
        ]);

        Employee::create($validated);

        return redirect()->back()->with('success', 'candidate created');
    }
}
