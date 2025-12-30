<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Smalot\PdfParser\Parser;
use Illuminate\Validation\ValidationException;
use OpenAI\Laravel\Facades\OpenAI;


class ResumeController extends Controller
{
    public function store(Request $request)
    {
        // Validation max 5mb
        $request->validate([
            'resumepdf' => 'required|file|mimes:pdf|max:5000'
        ]);

        $pdfPath = $request->file('resumepdf');
        // Parsing to plain text
        $parser = new Parser();
        $pdf = $parser->parseFile($pdfPath);
        $text = $pdf->getText();
        dd($text);
        
        // Resume schema
        $resumeSchema = [
            "personal" => [
                "full_name" => "",
                "email" => "",
                "phone" => "",
                "location" => ""
            ],
            "summary" => "",
            "skills" => [],
            "experience" => [
                [
                    "company" => "",
                    "role" => "",
                    "start_date" => "",
                    "end_date" => "",
                    "description" => ""
                ]
            ],
            "education" => [
                [
                    "institution" => "",
                    "degree" => "",
                    "field" => "",
                    "year" => ""
                ]
            ],
            "certifications" => [],
            "languages" => []
        ];
        
        $response = OpenAI::chat()->create([
            'model' => 'gpt-4o-mini',
            'messages' => [
                [
                    'role' => 'system',
                    'content' => 'You are an ATS resume parser. Output ONLY valid JSON.'
                ],
                [
                    'role' => 'user',
                    'content' => "
                    Parse the following resume text into this JSON schema.
                    Return null for missing fields.
                    Do not add extra fields.
                    
                    Schema:
                    " . json_encode($resumeSchema) . "
                    
                    Resume text:
                    $text"
                ]
            ],
            'temperature' => 0,
        ]);

        dd($response);
        
    }
    
}
