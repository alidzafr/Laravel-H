<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Smalot\PdfParser\Parser;
use Illuminate\Validation\ValidationException;


class ResumeController extends Controller
{
    public function store(Request $request)
    {
        // Validation max 5mb
        $request->validate([
            'resumepdf' => 'required|file|mimes:pdf|max:5000'
        ]);

        // try {
        //     if ($request->hasFile('resumepdf')) {
        //         $pdfPath = $request->file('resumepdf')->store('resume', 'public');

        //         // Parsing to plain text
        //         $parser = new Parser();
        //         $pdf = $parser->parseFile($pdfPath);
        //         $text = $pdf->getText();
        //     }
    
        //     dd($text);
        
        // } catch (\Exception $e) {

        //     $error = ValidationException::withMessages([
        //         'system_error' => ['System error!' . $e->getMessage()],
        //     ]);
        //     throw $error;
        // }
        
        $pdfPath = $request->file('resumepdf');
        // Parsing to plain text
            $parser = new Parser();
            $pdf = $parser->parseFile($pdfPath);
            $text = $pdf->getText();
            dd($text);
    }
    
}
