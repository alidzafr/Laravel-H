<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Smalot\PdfParser\Parser;
use Illuminate\Validation\ValidationException;
use OpenAI\Laravel\Facades\OpenAI;


class ResumeController extends Controller
{
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

  public function store(Employee $employee)
  {
    // Sampe Sini ambil 
  }
}
