<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CandidateController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

Route::get('/register', [AuthController::class, 'showRegister'])->name('register.show');
Route::get('/login', [AuthController::class, 'showLogin'])->name('login.show');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::get('/', [CandidateController::class, 'index'])->name('candidate.index');
Route::get('/create', [CandidateController::class, 'create'])->name('candidate.create');
Route::post('/store', [CandidateController::class, 'store'])->name('candidate.store');
// Route::get('/analyze', [CandidateController::class, 'analyze'])->name('candidate.analyze');
// Route::post('/parse', [CandidateController::class, 'parse'])->name('candidate.parse');
// Route::get('/search', [CandidateController::class, 'search'])->name('candidate.search');


Route::get('/wololo', function () {
    $response = Http::withHeaders([
        "Content-Type" => "application/json",
        "x-goog-api-key" => env('GEMINI_API_KEY')
    ])
        ->post(
            'https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash:generateContent',
            [
                // prompt
                "contents" => [
                    "parts" => ["text" => "Explain how car turbo works in a few words"]
                ]
            ]
        );

    if ($response->successful()) {
        $text = $response->json()['candidates'][0]['content']['parts'][0]['text'];
    } else {
        $text = "something is wrong";
    }
    dd($text);
})->name('index');
