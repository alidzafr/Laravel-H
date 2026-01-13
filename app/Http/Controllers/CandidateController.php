<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;
use Illuminate\Support\Facades\Http;
use Smalot\PdfParser\Parser;

class CandidateController extends Controller
{
    public function create()
    {
        return view('candidate.create');
    }

    public function parse(Request $request)
    {
        // Validation max 5mb
        $request->validate([
            'resumepdf' => 'required|file|mimes:pdf|max:5000'
        ]);

        $pdfPath = $request->file('resumepdf');
        // Parsing to plain text
        $parser = new Parser();
        $pdf = $parser->parseFile($pdfPath);
        $resumetext = $pdf->getText();
        // dd($resumetext);

        // Json Schema for API response
        $jsonSchema = [
            "type" => "object",
            "properties" => [

                "name" => [
                    "type" => "string",
                    "description" => "full name of the candidate"
                ],
                "gender" => [
                    "type" => "integer",
                    "description" => "candidate gender type"
                ],
                "email" => [
                    "type" => "string",
                    "description" => "email candidate"
                ],
                "address" => [
                    "type" => "string",
                    "description" => "adress candidate"
                ],
                "phone_number" => [
                    "type" => "string",
                    "description" => "phone number candidate"
                ],
                "skills" => [
                    "type" => "array",
                    "items" => [
                        "type" => "object",
                        "properties" => [
                            "name_skill" => ["type" => "string", "description" => "skill / work name"],
                            "exp" => ["type" => "integer", "description" => "length skill / work experience"]
                        ]
                    ]
                ],
                "score" => [
                    "type" => "integer",
                    "description" => "Score of candidate resume"
                ]

            ]
        ];

        // API response
        $response = Http::withHeaders(
            [
                "Content-Type" => "application/json",
                "x-goog-api-key" => env('GEMINI_API_KEY')
            ]
        )->post(
            'https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash:generateContent',
            [
                // prompt
                "contents" => [
                    "parts" => ["text" => "Please extract this resume from the following text.\n$resumetext."]
                ],
                "generationConfig" => [
                    "responseMimeType" => "application/json",
                    "responseJsonSchema" => $jsonSchema
                ]
            ]
        );

        if ($response->successful()) {
            $resumetext = $response->json()['candidates'][0]['content']['parts'][0]['text'];
        } else {
            $resumetext = "something is wrong";
        }
        $employee = json_decode($resumetext, true);
        // return view employee.create [$text]
        return view('employee/create', ['employee' => $employee]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            // 'name' => 'required|string',
            // 'gender' => 'required|in:male,female',
            // 'city' => 'required|string',
            'skills' => 'required|array|min:1',
            'skills.*' => 'string|max:50'
        ]);

        dd($validated);

        // Candidate::create($validated);

        // return redirect()->back()->with('success', 'candidate created');
    }

    public function index()
    {
        // return Employee::with('skills')->get();
        $employees = Candidate::get();

        return view('employee.index', [
            'employees' => $employees,
        ]);
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        $employees = Candidate::where('name', 'LIKE', '%' . $keyword . '%')->get();

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
}
